<?php

namespace App\Models\Administrator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tblUser';
    protected $primaryKey = 'user_id';
}
