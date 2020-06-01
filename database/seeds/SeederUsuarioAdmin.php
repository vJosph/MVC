<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class SeederUsuarioAdmin extends Seeder
{
    public function run()
    {
        $user = User::create([ 'name' => 'Vinicius','email'=>'vini@josph.com','password' =>bcrypt('senha1234')]);
            $role = Role::create(['name' => 'Admin']);
            $permissions = Permission::pluck('id','id')->all();
            $role->syncPermissions($permissions);
            $user->assignRole([$role->id]);

    }
}
