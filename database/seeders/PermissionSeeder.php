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
            [
            "name"=>"create-category",
            "nameF"=>"ساخت دسته بندی"
            ],
                ["name"=>"update-category",
            "nameF"=>"اپدیت دسته بندی"
        ],
                ["name"=>"delete-category",
            "nameF"=>"حذف دسته بندی"
        ],
                ["name"=>"update-product",
            "nameF"=>"اپدیت محصول"
        ],
                ["name"=>"delete-product",
            "nameF"=>"حذف محصول"
        ],
                ["name"=>"create-product",
            "nameF"=>"ساخت محصول"
        ],
                ["name"=>"update-user",
            "nameF"=>"اپدیت یوزر"
        ],
                ["name"=>"delete-user",
            "nameF"=>"حذف یوزر"
        ],
                ["name"=>"read-user",
            "nameF"=>"خواندن یوزر"
        ],
                ["name"=>"create-user",
            "nameF"=>"ساخت یوزر"
        ],
                ["name"=>"update-role",
            "nameF"=>"اپدیت نقش"
        ],
                ["name"=>"delete-role",
            "nameF"=>"حذف نقش"
        ],
                ["name"=>"read-role",
            "nameF"=>"خواندن نقش"
        ],
                ["name"=>"create-role",
            "nameF"=>"ساخت نقش"
        ],
        ["name"=>"update-siteData",
        "nameF"=>"اپدیت اطلاعات سایت"
    ],
            ["name"=>"delete-siteData",
        "nameF"=>"حذف اطلاعات سایت"
    ],
            ["name"=>"read-siteData",
        "nameF"=>"خواندن اطلاعات سایت"
    ],
            ["name"=>"create-siteData",
        "nameF"=>"ساخت اطلاعات سایت"
    ],
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
