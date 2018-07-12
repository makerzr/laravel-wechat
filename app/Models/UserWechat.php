<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserWechat extends Model
{
    use SoftDeletes;
    protected $fillable =[
      'open_id','nickname','avatar'
    ];
}
