<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;
    protected $guarded = [];
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
    public function HasPermission(string $permission){
        $permissions = Permission::query()->where('name','=',$permission)->first();
        dd($permissions);
        return $this->permissions()->where("permission_id",$permissions->id)->exists();
        
    }
}
