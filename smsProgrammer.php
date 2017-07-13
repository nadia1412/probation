<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class smsProgrammer extends Model
{
    $data = new smsProgrammer;
	$data->phone_number = 1;
	$data->message=1;
	$data->token = str_randomw(50);
	$data->save();

}
