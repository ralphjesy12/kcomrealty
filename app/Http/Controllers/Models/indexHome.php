<?php
use App\Project;
use App\Unit;
$topUnits = Unit::has('project')->orderBy('updated_at')->take(7)->get();
$projects = Project::has('units')->has('developer')->get();

$projects = $projects->sortBy(function($project)
{
    return $project->units()->count();
});

$d = [
	'topUnits' => $topUnits,
	'projects' => $projects
];
