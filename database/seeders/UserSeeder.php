<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [

             [
                // "rolename" => User::SUPERADMIN,
                "name" => "super",
                'surname' => 'Johnson',
                "email" => "superadmin@superadmin.com",
                'gender' => 1,
                'mobile' => '1234567893',
                "password" => bcrypt("superadmin"),
                'roles' => [
                    [
                        "id"=> 1,
                        "name"=> "SUPERADMIN",
                        "guard_name"=> "api",
                        "created_at"=> "2025-02-16T06:49:18.000000Z",
                        "updated_at"=> "2025-02-16T06:49:18.000000Z",
                    ],
                    'pivot' => [
                        [
                            "model_id"=> 1,
                            "role_id"=> 1,  
                            "model_type"=> "App\\Models\\User"
                        ]
                    ],
                ],
                "email_verified_at" => now(),
                "created_at" => now(),
            ],
            [
                // "rolename" => User::ADMIN,
                "name" => "admin",
                'surname' => 'Johnson',
                "email" => "admin@admin.com",
                'gender' => 1,
                'mobile' => '1234567893',
                "password" => bcrypt("password"),
                'roles' => [
                    [
                        "id"=> 1,
                        "name"=> "ADMIN",
                        "guard_name"=> "api",
                        "created_at"=> "2025-02-16T06:49:18.000000Z",
                        "updated_at"=> "2025-02-16T06:49:18.000000Z",
                    ],
                    'pivot' => [
                        [
                            "model_id"=> 2,
                            "role_id"=> 2,  
                            "model_type"=> "App\\Models\\User"
                        ]
                    ],
                ],
                "email_verified_at" => now(),
                "created_at" => now(),
            ],
            [
                // "rolename" => User::DOCTOR,
                "name" => "Jhon",
                'surname' => 'Johnson',
                "email" => "doctor@doctor.com",
                'gender' => 1,
                'speciality_id' => 1,
                'mobile' => '1234567893',
                'roles' => [
                    [
                        "id"=> 3,
                        "name"=> "DOCTOR",
                        "guard_name"=> "api",
                        "created_at"=> "2025-02-16T06:49:18.000000Z",
                        "updated_at"=> "2025-02-16T06:49:18.000000Z",
                    ],
                    'pivot' => [
                        [
                            "model_id"=> 2,
                            "role_id"=> 3,
                            "model_type"=> "App\\Models\\User"
                        ]
                    ],
                ],
                "password" => bcrypt("password"),
                "email_verified_at" => now(),
                "created_at" => now(),
            ],
        ];

        foreach ($users as $userData) {
            $roles = $userData['roles'] ?? [];
            unset($userData['roles']);

            $user = User::create($userData);

            if (!empty($roles)) {
                // Filter roles to only those with 'id' key to avoid errors
                $filteredRoles = array_filter($roles, function($role) {
                    return is_array($role) && array_key_exists('id', $role);
                });
                $roleIds = array_map(function($role) {
                    return $role['id'];
                }, $filteredRoles);
                $user->roles()->sync($roleIds);
            }
        }
    }
}
