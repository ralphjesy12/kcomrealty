<?php
use App\Project;
use App\Unit;
$unit = new Unit;
$proj = new Project;

$d = [
    'info' => $proj->leftJoin('developers','developers.id','=','projects.developer')->select('projects.*',DB::raw('IFNULL(developers.name,"-") as developername'),DB::raw('IFNULL(developers.profile,"-") as developerprofile'))->orderBy('projects.created_at', 'desc')->first()->toArray(),
    'children' => $unit->select('*')->where('project', $id)->orderBy('created_at', 'desc')->get()->toArray(),
];


