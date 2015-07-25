<?php
use App\Unit;
if(
    empty($input['unit-feature-description']) ||
    empty($input['unit-feature-type']) ||
    empty($input['unit-feature-area'])
){
    $ajax = false;
}else{

    $unit = new Unit;
    $unit->description = $input['unit-feature-description'];
    $unit->type = $input['unit-feature-type'];

    if(!empty($input['unit-feature-project'])){
        $unit->project = $input['unit-feature-project'];
    }
    if(!empty($input['unit-feature-studio'])){
        $unit->studio = boolval($input['unit-feature-studio']) ? 1 : 0;
    }

    $unit->bedrooms = (int)$input['unit-feature-bedrooms'];
    $unit->bathroom = (int)$input['unit-feature-bathroom'];
    $unit->price = (float)$input['unit-feature-bathroom'];
    $unit->area = (float)$input['unit-feature-area'];
    
    if(!empty($input['unit-images']) && !empty(Input::file('unit-images'))){
        $imagepack = [];
        $moveFolder = public_path().'\\images\\units\\';
        $images = Input::file('unit-images');
        foreach($images as $k=>$v){
            if(!empty($v)){
                $outputname = hash('crc32b','$unit->description') . '_' . $v->getClientOriginalName();
                Image::make($v)->fit(1000,1000,function($constraint){
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($moveFolder.$outputname);
                $imagepack[] = $outputname;
            }
        };
        if(!empty($imagepack))
            $unit->images = json_encode($imagepack);
    }
    $unit->save();
    $ajax = true;
}