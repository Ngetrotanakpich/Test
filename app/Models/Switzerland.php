<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Switzerland extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_comment_switzerland_package';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
