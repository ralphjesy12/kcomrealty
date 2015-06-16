<?php
use App\Project;
use App\Developers;
if($type){
    switch($type){
        case 'deleteProject':
        if(!empty($input['id'])){
            $project = new Project;
            $ajax = $project->where('id', '=',$input['id'])->delete();
        }else{
            $ajax = false;
        }
        break;
        case 'deleteDeveloper':
        if(!empty($input['id'])){
            $developer = new Developers;
            $ajax = $developer->where('id', '=',$input['id'])->delete();
        }else{
            $ajax = false;
        }
        break;
    }
}