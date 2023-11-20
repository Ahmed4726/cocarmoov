<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $role = new Role(['title' => 'admin']);
        $role->save();
        $role = new Role(['title' => 'Particulier']);
        $role->save();
        $role = new Role(['title' => 'Professionnel']);
        $role->save();
        $role = new Role(['title' => 'Co-convoyeur']);
        $role->save();
        $role = new Role(['title' => 'Convoyeur']);
        $role->save();
        $role = new Role(['title' => 'Transporteur']);
        $role->save();
    }
}
