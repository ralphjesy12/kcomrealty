<?php
use App\Developers;
$developer = new Developers;
$ajax = $developer->select('id','name')->orderBy('name', 'asc')->get();
