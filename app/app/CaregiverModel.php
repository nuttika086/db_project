<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaregiverModel extends Model
{
    protected $table= 'Caregiver';
	protected $filltable=['Caregiver_ID','Caregiver_FirsName','CareGiver_LastName','CareGiver_Phone'];
}
