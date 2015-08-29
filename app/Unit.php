<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model {

	protected $table = 'units';


	public function project(){
		return $this->belongsTo('App\Project' , 'project');
	}

	public function scopeKeyword($query,$key = false){
		if(!empty($key))
			return $query->where('description','LIKE','%'.$key.'%');
		return $query;
	}

	public function scopeType($query,$type = false){
		if(!empty($type))
			return $query->where('type','LIKE',''.$type.'');
		return $query;
	}

	public function scopeBedroom($query,$bedroom = 1){
		if(!empty($bedroom))
			return $query->where('bedrooms','>',$bedroom-1);
		return $query;
	}

	public function scopeArea($query,$area = 1){
		if(!empty($area))
			return $query->where('area','>',$area-1);
		return $query;
	}

	public function scopeHasCategory($query,$cat = ''){
		if(!empty($cat)){
			return $query->whereHas('project', function($q) use($cat){
										$q->where('category', 'like', $cat);
									});
		}
		return $query;
	}

}
