<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetModel extends Model
{
    protected $table= 'Pet';
	protected $filltable=['Pet_ID','Pet_Name','Pet_sex'];
}
