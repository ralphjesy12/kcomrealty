<?php
use App\Developers;

if(!empty($input['dev-feature-id'])){
    $developer = new Developers;
    $thisdeveloper = $developer->where('id', $input['dev-feature-id'])->first();
    $updates = [];
    if(!empty($input['image'])){
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

        $updates['image'] = $imageFile;
    }
    $updates['name'] = $input['dev-feature-name'];
    $updates['profile'] = $input['dev-feature-profile'];
    $ajax[] = $thisdeveloper->update($updates);
}else{
    $ajax = false;
}
