<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailModel extends Model
{
    protected $table= 'Detail';
	protected $filltable=['Pet_ID','Pet_In','Pet_Out'];
}
