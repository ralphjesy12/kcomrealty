<?php
use App\Developers;
$developer = new Developers;
$ajax = $developer->orderBy('created_at', 'desc')->paginate(10)->toArray();
