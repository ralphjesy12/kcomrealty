<?php
use App\Developers;
$developer = new Developers;
$ajax = $developer->select('id','name','profile','image')->where('id', $input['id'])->first();
