<?php
use App\Unit;
$unit = new Unit;
$ajax = $unit->select('*')->where('id', $input['id'])->first();
