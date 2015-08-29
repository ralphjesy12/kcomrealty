<?php


use App\Unit;

if(!empty($input['id'])){
	$unit = Unit::where(['id' => $input['id']])->first();

	if(!empty($input['unit-image'])){
		$imagepack = json_decode($unit->images,true);
        $moveFolder = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'units'.DIRECTORY_SEPARATOR;
		$moveFolder2 = "/home/kcomrealty/public_html".DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'units'.DIRECTORY_SEPARATOR;
        $images = $input['unit-image'];
		$saved = [];
        foreach($images as $k=>$v){
            if(!empty($v)){
                $outputname = hash('crc32b',$unit->description) . '_' . hash('crc32b',$v->getClientOriginalName()).".jpg";
                $img = Image::make($v)->fit(1000,1000,function($constraint){
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($moveFolder.$outputname);
				
				if(file_exists($moveFolder2)){
					$img->save($moveFolder2.$outputname);
				}
				$saved[$k] = [
					'name' => $v->getClientOriginalName(),
					'save' => $outputname
				];
                $imagepack[] = $outputname;
            }
        };
        if(!empty($imagepack))
            $unit->images = json_encode($imagepack);
	}
	$unit->save();
}
$ajax = $saved;