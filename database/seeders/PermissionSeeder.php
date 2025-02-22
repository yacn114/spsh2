<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::query()->insert(
            [
                ["name"=>"create-category"],
                ["name"=>"update-category"],
                ["name"=>"delete-category"],
                ["name"=>"read-category"],
                ["name"=>"update-post"],
                ["name"=>"delete-post"],
                ["name"=>"read-post"],
                ["name"=>"create-post"],
                ["name"=>"update-user"],
                ["name"=>"delete-user"],
                ["name"=>"read-user"],
                ["name"=>"create-user"],
                ["name"=>"update-role"],
                ["name"=>"delete-role"],
                ["name"=>"read-role"],
                ["name"=>"create-role"],
            ]);
        
        $b = Role::query()->create([
            "name"=> "user",
        ]);
        $permission = Permission::where('title', 'read-post')->first();
        
        if ($permission) {
        $b->permissions()->sync([$permission->id]);
    }
    }
}
