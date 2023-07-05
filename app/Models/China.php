<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class China extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_comment_china_package';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
