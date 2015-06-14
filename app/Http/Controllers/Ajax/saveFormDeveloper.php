<?php
use App\Developers;

if(
    !empty($input['dev-feature-name']) &&
    !empty($input['dev-feature-profile']) &&
    !empty($input['image'])
){
    $imageFile = basename($input['image']);
    $uploadFolder = public_path().'\\uploads\\';
    $moveFolder = public_path().'\\images\\developers\\';
   
    $canvas = Image::canvas(500, 500 , '#ffffff');
    $img = Image::make($uploadFolder.$imageFile);
    $color = $img->pickColor(0, 0, 'hex');
    $img->trim('top-left', null, 25, 50)
        ->resize(450, 450,function ($constraint) {
            $constraint->aspectRatio();
        })
        ->resizeCanvas(450, 450, 'center', false, $color);
    $canvas->insert($img, 'center')
        ->save($moveFolder.$imageFile);

    //    Storage::disk('local')->move($uploadFolder.$imageFile,$moveFolder.$imageFile);


    $developer = new Developers;
    $developer->name = $input['dev-feature-name'];
    $developer->profile = $input['dev-feature-profile'];
    $developer->image = $imageFile;
    $developer->save();

    //    DB::table('developers')->insert([
    //        'name' => $input['dev-feature-name'],
    //        'profile' => $input['dev-feature-profile'],
    //        'image' => $imageFile,
    //        'created_at' => 
    //    ]);
    $ajax[] = true;
}else{
    $ajax = false;
}
