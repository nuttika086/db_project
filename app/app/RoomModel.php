<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    protected $table= 'Room';
	protected $filltable=['Room_Number','Room_Size','Room_type'];
}
