<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    public $table = "member";
    use HasFactory;

    protected $guarded = ['id'];
}
