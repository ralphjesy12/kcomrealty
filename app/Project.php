<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $table = 'projects';
    protected $fillable = [
        "name", 
        "location", 
        "developer", 
        "profile",
        "features",
        "amenities", 
        "images", 
        "map"
    ];

	
	public function units(){
		return $this->hasMany('App\Unit' , 'project');
	}
	
	
	public function developer(){
		return $this->belongsTo('App\Developers' , 'developer');
	}
}
