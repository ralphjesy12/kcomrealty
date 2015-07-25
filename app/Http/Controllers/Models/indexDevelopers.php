<?php
use App\Developers;
$developer = new Developers;
$d = [
    'developers' => $developer->orderBy('created_at', 'desc')->get()
];