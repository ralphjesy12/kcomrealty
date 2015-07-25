<?php
use App\Developers;
use App\Project;

$dev = new Developers;
$proj = new Project;

$d = [
    'info' => $dev->select('id','name','profile','image')->where('id', $id)->first()->toArray(),
    'children' => $proj->select('id','name','type','category','unit','area','images','profile','location')->where('developer', $id)->orderBy('created_at', 'desc')->get()->toArray()
];