<?php

use App\Models\Permission;
use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    // $user = User::create(["name" => 'test2', 'email' => "test2@gmail.com", 'password' => "123456"]);

    // $owner = Role::create([
    //     'name' => 'owner',
    //     'display_name' => 'Project Owner', // optional
    //     'description' => 'User is the owner of a given project', // optional
    // ]);
    
    // $admin = Role::create([
    //     'name' => 'admin',
    //     'display_name' => 'User Administrator', // optional
    //     'description' => 'User is allowed to manage and edit other users', // optional
    // ]);

    // $createPost = Permission::create([
    //     'name' => 'create-post',
    //     'display_name' => 'Create Posts', // optional
    //     'description' => 'create new blog posts', // optional
    //     ]);
        
    //     $editUser = Permission::create([
    //     'name' => 'edit-user',
    //     'display_name' => 'Edit Users', // optional
    //     'description' => 'edit existing users', // optional
    //     ]);


        
    //     $admin->attachPermission($createPost); // parameter can be a Permission object, array or id
    //     // equivalent to $admin->permissions()->attach([$createPost->id]);
        
    //     $owner->attachPermissions([$createPost, $editUser]); // parameter can be a Permission object, array or id
    //     // equivalent to $owner->permissions()->attach([$createPost->id, $editUser->id]);
        
    //     $owner->syncPermissions([$createPost, $editUser]); // parameter can be a Permission object, array or id
    //     // equivalent to $owner->permissions()->sync([$createPost->id, $editUser->id]);


    //     $user->attachRole($admin); // parameter can be a Role object, array, id or the role string name
    //     // equivalent to $user->roles()->attach([$admin->id]);

    //     $user->attachRoles([$admin, $owner]); // parameter can be a Role object, array, id or the role string name
    //     // equivalent to $user->roles()->attach([$admin->id, $owner->id]);

        //$user = User::find(1);

        $user = User::create(["name" => 'test5', 'email' => "test5@gmail.com", 'password' => "123456"]);

        $team = Team::create( ["name" => "group-2"]);
        //$team = Team::where('name', 'group-1')->first();


        $admin = Role::where('name', 'admin')->first();
        $owner = Role::where('name', 'owner')->first();

        $user->attachRoles([$admin], $team); 



    return view('welcome');
});
