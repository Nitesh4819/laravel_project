<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;//us path for soft delete


class Registration extends Model
{
    use softdeletes;//also use here for soft delete
public $table='registrations';
public $guarded=['sid','created_at','updated_at','deleted_at'];

}
