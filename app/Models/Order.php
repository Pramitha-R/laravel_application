<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable= ['PID','EID','CID','emp_name','product','detail','price','cust_name','cust_address','cust_mobile','status'];
    protected $table='orders';
    
}
