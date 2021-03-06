<?php

use App\Project;
if(
	empty($input['proj-feature-name']) ||
	empty($input['proj-feature-location']) ||
	empty($input['proj-feature-profile'])
){
	$ajax = false;
}else{

	$project = new Project;
	$project->name = $input['proj-feature-name'];
	$project->location = $input['proj-feature-location'];
	$project->profile = $input['proj-feature-profile'];
	$project->type = $input['proj-feature-type'];
	$project->category = $input['proj-feature-category'];

	if(!empty($input['proj-feature-developer'])){
		$project->developer = $input['proj-feature-developer'];
	}

	if(!empty($input['proj-feature-lists'])){
		$project->features = json_encode(explode(', ',$input['proj-feature-lists']));
	}
	if(!empty($input['proj-amenities'])){
		$project->amenities = json_encode($input['proj-amenities']);
	}
	if(!empty($input['proj-feature-map-source'])){
		$project->map = $input['proj-feature-map-source'];
	}
	if(!empty($input['proj-images']) && !empty(Input::file('proj-images'))){
		$imagepack = [];
		$moveFolder = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'projects'.DIRECTORY_SEPARATOR;
		$moveFolder2 = "/home/kcomrealty/public_html".DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'projects'.DIRECTORY_SEPARATOR;
		$images = Input::file('proj-images');
		foreach($images as $k=>$v){
			if(!empty($v)){
				$outputname = hash('crc32b',$project->name) . '_' . hash('crc32b',$v->getClientOriginalName());
				//                Image::make($v)->fit(1000,1000,function($constraint){
				//                    $constraint->aspectRatio();
				//                    //                    $constraint->upsize();
				//                })->save($moveFolder.$outputname);

				$imgTop = Image::make($v)->resize(800, 534, function ($constraint) {
					$constraint->aspectRatio();
					$constraint->upsize();
				});

				$imgBack = Image::make($v)->resize(800, 534)->blur(15)->greyscale()->insert($imgTop,'center')
					//					->resizeCanvas(800, 534, 'center', false, array(255, 255, 255, 0))
					->save($moveFolder.$outputname);
				if(file_exists($moveFolder2)){
					$imgBack->save($moveFolder2.$outputname);
				}

				$imagepack[] = $outputname;
			}
		};
		if(!empty($imagepack))
			$project->images = json_encode($imagepack);
	}
	$project->save();
	$ajax = true;
}