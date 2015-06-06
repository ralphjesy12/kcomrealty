<?php

$input = Request::all();

if(
    !empty($input['dev-feature-name']) &&
    !empty($input['dev-feature-profile']) &&
    !empty($input['image'])
){
    $imageFile = basename($input['image']);
    $uploadFolder = public_path().'\\uploads\\';
    $moveFolder = public_path().'\\images\\developers\\';
    
    $img = Image::make($uploadFolder.$imageFile)->save($moveFolder.$imageFile);
    
//    Storage::disk('local')->move($uploadFolder.$imageFile,$moveFolder.$imageFile);
    
    
    DB::table('developers')->insert([
        'name' => $input['dev-feature-name'],
        'profile' => $input['dev-feature-profile'],
        'image' => $imageFile
    ]);
    $ajax[] = true;
}else{
    $ajax = false;
}
