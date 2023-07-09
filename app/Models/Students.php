<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable=[
      'stu_name',
      'stu_dob',
      'stu_address',
      'sttu_status'
    ];
}
