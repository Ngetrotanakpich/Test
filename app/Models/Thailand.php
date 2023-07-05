<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thailand extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_comment_thailand_package';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
