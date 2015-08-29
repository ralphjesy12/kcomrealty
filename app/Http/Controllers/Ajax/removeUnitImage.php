<?php

use App\Unit;
if(!empty($input['id'])){
	$unit = Unit::where(['id' => $input['id']])->first();
	$images = json_decode($unit->images,true);

	$index = array_search($input['file'],$images);
	if($index !== FALSE){
		unset($images[$index]);
	}
	$unit->images = json_encode($images);

	$moveFolder = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'units'.DIRECTORY_SEPARATOR;
	$moveFolder2 = "/home/kcomrealty/public_html".DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'units'.DIRECTORY_SEPARATOR;

	if(file_exists($moveFolder . $input['file'])){
		unlink( $moveFolder . $input['file'] );
	}
	if(file_exists($moveFolder2 . $input['file'])){
		unlink( $moveFolder2 . $input['file'] );
	}

	$unit->save();
}

