<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Developers extends Model {

	protected $table = 'developers';
    protected $fillable = ['image', 'name', 'profile'];
}
