<?php
use App\Unit;
$unit = new Unit;
$ajax = $unit->leftJoin('projects','projects.id','=','units.project')->select('units.id','units.description','units.type','units.bedrooms','units.bathroom','units.area',DB::raw('IFNULL(projects.name,"-") as project'))->orderBy('units.created_at', 'desc')->paginate(10)->toArray();
