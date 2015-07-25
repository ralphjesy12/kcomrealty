<?php
use App\Project;
use App\Developers;
use App\Unit;
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
        case 'deleteUnit':
        if(!empty($input['id'])){
            $unit = new Unit;
            $ajax = $unit->where('id', '=',$input['id'])->delete();
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