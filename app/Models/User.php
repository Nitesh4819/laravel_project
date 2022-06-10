<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;//us path for soft delete
use Illuminate\Foundation\Auth\User as Authenticatable;//when e create a login then use this path

class User extends Authenticatable
{
    use softdeletes;//also use here for delete
public $table='users';
public $guarded=['sid','created_at','updated_at','deleted_at'];

}
