<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model {

	protected $table = 'units';


	public function project(){
		return $this->belongsTo('App\Project' , 'project');
	}

}
