<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomersModel extends Model
{
    protected $table= 'Customers';
    protected $filltable=['customerid','customerFirstName','customertLastName','customerphone','customeraddress'];
}
