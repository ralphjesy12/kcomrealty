<?php
use App\Project;
$project = new Project;
$ajax = $project->select('id','name')->orderBy('name', 'asc')->get();
