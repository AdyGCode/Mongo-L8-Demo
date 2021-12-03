<?php

namespace Database\Seeders;

use App\Models\User;
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
        $seedAdminUsers = [
            [
                'name' => 'Ad Ministrator',
                'email' => 'ad.ministrator@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Australia/Perth',
            ],
            [
                'name' => 'Lee Da',
                'email' => 'administrator@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'USA/San Francisco',
            ],
        ];

        // $role = Role::create('Admin'); already added by RolesSeeder
//        $role = Role::findByName('admin');
//        $permissions = Permission::pluck('_id', '_id')->all();
//        $role->syncPermissions($permissions);

        foreach ($seedAdminUsers as $seedAdminUser) {
            $user = User::create($seedAdminUser);
//            $user->assignRole($role);
        }

        $seedManagerUsers = [
            [
                'name' => 'YOUR NAME',
                'email' => 'GIVEN@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Australia/Perth',
            ],
            [
                'name' => 'Andy Manager',
                'email' => 'andy.manager@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Australia/Perth',
            ],
        ];

//        $role = Role::findByName('manager');
//        $managerPermissionList = [
//            'user-list',
//            'user-create',
//            'role-list',
//            'permission-list',
//            'post-list',
//            'post-create',
//            'post-edit',
//            'post-delete',
//        ];
//        $permissions = Permission::all()
//            ->whereIn('name', $managerPermissionList)
//            ->pluck('id', 'id');
//        $role->syncPermissions($permissions);

        foreach ($seedManagerUsers as $managerUser) {
            $user = User::create($managerUser);
//            $user->assignRole($role);
        }

        $seedUsers = [
            [
                'name' => 'Eileen Dover',
                'email' => 'eileen@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Australia/Perth',
            ],
            [
                'name' => 'Jacques d\'Carre',
                'email' => 'jacques@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Europe/Paris',
            ],
            [
                'name' => 'Russell Leaves',
                'email' => 'russell@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Pacific/Pitcairn',
            ],
            [
                'name' => 'Ivana Vinn',
                'email' => 'ivanna@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Europe/Moscow',
            ],
            [
                'name' => 'Win Doh',
                'email' => 'win@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Europe/Sofia',
            ],
            [
                'name' => 'Sally Mander',
                'email' => 'Sally.Mander@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Reba Dirtchee',
                'email' => 'Reba.Dirtchee@example
                .com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Carl Breakdown',
                'email' => 'Carl.Breakdown@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Al Luminum',
                'email' => 'Al.Luminum@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Phil Graves',
                'email' => 'Phil.Graves@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Cy Yonarra',
                'email' => 'Cy.Yonarra@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Buddy System',
                'email' => 'Buddy.System@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Owen Moore',
                'email' => 'Owen.Moore@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Dwayne Pipe',
                'email' => 'Dwayne.Pipe@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Summer Dey',
                'email' => 'Summer.Dey@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Stan Dup',
                'email' => 'Stan.Dup@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Miles Tugo',
                'email' => 'Miles.Tugo@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Rusty Pipes',
                'email' => 'Rusty.Pipes@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Rusty Nails',
                'email' => 'Rusty.Nails@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Preston Cleaned',
                'email' => 'Preston.Cleaned@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Norma Lee',
                'email' => 'Norma.Lee@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Crystal Stemwear',
                'email' => 'Crystal.Stemwear@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Alf A. Romeo',
                'email' => 'Alf.A.Romeo@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Myles Long',
                'email' => 'Myles.Long@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Faye Kinnitt',
                'email' => 'Faye.Kinnitt@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Dee Zaster',
                'email' => 'Dee.Zaster@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Doug Graves',
                'email' => 'Doug.Graves@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Ada Lott',
                'email' => 'Ada.Lott@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Ginger Rayl',
                'email' => 'Ginger.Rayl@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Jim Shorts',
                'email' => 'Jim.Shorts@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Pacific/Port_Moresby',
            ],
            [
                'name' => 'Terry Achey',
                'email' => 'Terry.Achey@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Ed Abul',
                'email' => 'Ed.Abul@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Terry Kloth',
                'email' => 'Terry.Kloth@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Jasmine Rice',
                'email' => 'Jasmine.Rice@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Asia/Tokyo',
            ],
            [
                'name' => 'Ruda Wakening',
                'email' => 'Ruda.Wakening@example
                .com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Ann Chovie',
                'email' => 'Ann.Chovie@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Telly Vision',
                'email' => 'Telly.Vision@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Europe/Dublin',
            ],
            [
                'name' => 'Al Gore-Rythim',
                'email' => 'Al.Gore-Rythim@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'America/Boise',
            ],
            [
                'name' => 'Steve Adore',
                'email' => 'Steve.Adore@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'name' => 'Lois Point',
                'email' => 'Lois.Point@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'America/Boise',
            ],
        ];

//        $role = Role::findByName('user');
//        $userPermissionList = [
//            'user-list',
//            'role-list',
//            'post-list',
//        ];
//        $permissions = Permission::all()
//            ->whereIn('name', $userPermissionList)
//            ->pluck('id', 'id');
//        $role->syncPermissions($permissions);

        foreach ($seedUsers as $seed) {
            $user = User::create($seed);
//            $user->assignRole($role);
        }

    }
}
