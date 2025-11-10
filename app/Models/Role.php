<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;
    protected $guarded = ["type"];

   # CONST SUPER_TYPE = 'super';
    public CONST ADMIN_TYPE = 'admin';
     CONST DEFAULT_TYPE = 'member';
    
    public function getId($Type)
    {
        return Role::where('type',$Type)->get();    
    }

    public function users():HasMany
    {
       return this->hasMany(User::class);
    }
}

