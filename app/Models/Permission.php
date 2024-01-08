<?php

namespace App\Models;

// use Laratrust\Models\Permission as PermissionModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    
    public $guarded = [];

    protected $table = 'permissions';
}
