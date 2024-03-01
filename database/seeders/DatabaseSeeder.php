<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Role_user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->name="Humberto";
        $user1->email="beto@mail.com";
        $user1->password=bcrypt("123");
        $user1->save();
        
        $user2 = new User();
        $user2->name="Daniela";
        $user2->email="dan@mail.com";
        $user2->password=bcrypt("123");
        $user2->save();
       
        $user3 = new User();
        $user3->name="Darío";
        $user3->email="dar@mail.com";
        $user3->password=bcrypt("123");
        $user3->save();

        $user4 = new User();
        $user4->name="Abraham";
        $user4->email="bra@mail.com";
        $user4->password=bcrypt("123");
        $user4->save();

        $user5 = new User();
        $user5->name="Roberto";
        $user5->email="rob@mail.com";
        $user5->password=bcrypt("123");
        $user5->save();

        $user6 = new User();
        $user6->name="Andres";
        $user6->email="ady@mail.com";
        $user6->password=bcrypt("123");
        $user6->save();

        $user7 = new User();
        $user7->name="Braulio";
        $user7->email="brau@mail.com";
        $user7->password=bcrypt("123");
        $user7->save();

        $user8 = new User();
        $user8->name="Samantha";
        $user8->email="sam@mail.com";
        $user8->password=bcrypt("123");
        $user8->save();

        $role1 = new Role();
        $role1->name="edit";
        $role1->slug="/edit";
        $role1->description="Edit.";
        $role1->save();

        $role2 = new Role();
        $role2->name="delete";
        $role2->slug="/delete";
        $role2->description="Delete.";
        $role2->save();

        $role3 = new Role();
        $role3->name="create";
        $role3->slug="/create";
        $role3->description="Create.";
        $role3->save();

        $roleUser1 = new Role_user();
        $roleUser1->user_id="1";
        $roleUser1->role_id="1";
        $roleUser1->save();

        $roleUser2 = new Role_user();
        $roleUser2->user_id="1";
        $roleUser2->role_id="2";
        $roleUser2->save();

        $roleUser3 = new Role_user();
        $roleUser3->user_id="1";
        $roleUser3->role_id="3";
        $roleUser3->save();
    }
}
