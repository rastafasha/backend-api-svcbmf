<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
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
            [
                // "rolename" => User::DOCTOR,
                "name" => "Jane",
                'surname' => 'Johnson',
                "email" => "doctora@doctora.com",
                'gender' => 1,
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
           
            [
                // "rolename" => User::GUEST,
                "name" => "invitado",
                'surname' => 'Johnson',
                "email" => "invitado@invitado.com",
                'gender' => 1,
                'mobile' => '1234567893',
                "password" => bcrypt("password"),
                'roles' => [
                    [
                        "id"=> 9,
                        "name"=> "GUEST",
                        "guard_name"=> "api",
                        "created_at"=> "2025-02-16T06:49:18.000000Z",
                        "updated_at"=> "2025-02-16T06:49:18.000000Z",
                    ],
                    'pivot' => [
                        [
                            "model_id"=> 8,
                            "role_id"=> 9,   
                            "model_type"=> "App\\Models\\User"
                        ]
                    ],
                ],
                "email_verified_at" => now(),
                "created_at" => now(),
            ]
        ];

        foreach ($users as $user) {
            // Extract roles before creating user
            $roles = $user['roles'] ?? null;
            unset($user['roles']);
            
            // Create user
            //si no tiene asignado un rol, se le asigna el rol de invitado
            if (!$roles) {
                $createdUser->assignRole(User::GUEST);
                    } 
            $createdUser = User::create($user);
            
            // Attach roles if they exist
            if ($roles) {
                $roleIds = array_column($roles, 'id');
                $createdUser->roles()->sync($roleIds);
            }
        }
    }
}
