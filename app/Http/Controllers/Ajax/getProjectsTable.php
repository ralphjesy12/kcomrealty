<?php
use App\Project;
$project = new Project;
$ajax = $project->leftJoin('developers','developers.id','=','projects.developer')->select('projects.id','projects.name',DB::raw('IFNULL(developers.name,"-") as developer'))->orderBy('projects.created_at', 'desc')->paginate(10)->toArray();
