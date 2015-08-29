<?php
use App\Project;
use App\Unit;
$unit = new Unit;
$proj = new Project;

$view = !empty($q['view']) && (in_array(strtolower($q['view']),['unit','project'])) ? strtolower($q['view']) : 'unit';
$key = !empty($q['key']) ? trim(strtolower($q['key'])) : false;
$type = !empty($q['type']) && (in_array(strtolower($q['type']),["for sale", "for rent", "ready for occupancy", "pre-selling"])) ? trim(strtolower($q['type'])) : false;
$bedrooms = !empty($q['bedrooms']) && (int)$q['bedrooms']>1 ? (int)$q['bedrooms'] : 1;
$area = !empty($q['area']) && (int)$q['area']>1 ? (int)$q['area'] : 1;
$category = !empty($q['category']) ? strtolower($q['category']) : false;

$result = [];
switch($view){
	case 'unit':
	default:
		$result = Unit::Keyword($key);
		if($type){ 
			$result = $result->Type($type);	
		}
		if($bedrooms){ 
			$result = $result->Bedroom($bedrooms);	
		}
		if($area){ 
			$result = $result->Area($area);	
		}
		if($category){ 
			$result = $result->HasCategory($category);
		}
		$result = $result->paginate(6);
		break;
}

$d = [
	'result' => $result,
	'q' => $q
	//	'info' => $proj->leftJoin('developers','developers.id','=','projects.developer')->select('projects.*',DB::raw('IFNULL(developers.name,"-") as developername'),DB::raw('IFNULL(developers.profile,"-") as developerprofile'))->orderBy('projects.created_at', 'desc')->where('projects.id', $id)->first()->toArray(),
	//	'children' => $unit->select('*')->where('project', $id)->orderBy('created_at', 'desc')->get()->toArray(),
];


