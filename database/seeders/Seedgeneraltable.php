<?php

namespace Database\Seeders;

use App\Models\designation;
use App\Models\PersonType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Seedgeneraltable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonType::create([
            'name' => 'staff'
        ]);
        PersonType::create([
            'name' => 'Shop Owner'
        ]);

        designation::create([
            'name' => 'Controller'
        ]);
        designation::create([
            'name' => 'Deputy Controller'
        ]);
        designation::create([
            'name' => 'Manager'
        ]);
        designation::create([
            'name' => 'Project Manager cum Principal'
        ]);
        designation::create([
            'name' => 'Assistant Controller'
        ]);
        designation::create([
            'name' => 'Assistant Manager'
        ]);
        designation::create([
            'name' => 'Superintendent'
        ]);
        designation::create([
            'name' => 'Finance & Account Officer'
        ]);
        designation::create([
            'name' => 'Technical Officer'
        ]);
        designation::create([
            'name' => 'Editor'
        ]);
        designation::create([
            'name' => 'Depot Manager'
        ]);
        designation::create([
            'name' => 'General Store Keeper'
        ]);
        designation::create([
            'name' => 'Assistant Technical Officer'
        ]);
        designation::create([
            'name' => 'Section Supervisor'
        ]);
        designation::create([
            'name' => 'Operator-I'
        ]);
        designation::create([
            'name' => 'Binder-I'
        ]);
        designation::create([
            'name' => 'Compositor-I'
        ]);
        designation::create([
            'name' => 'Operator-II'
        ]);
        designation::create([
            'name' => 'Binder-II'
        ]);
        designation::create([
            'name' => 'Compositor-II'
        ]);
        designation::create([
            'name' => 'Operator-III'
        ]);
        designation::create([
            'name' => 'Binder-III'
        ]);
        designation::create([
            'name' => 'Compositor-III'
        ]);
        designation::create([
            'name' => 'Operator-IV'
        ]);
        designation::create([
            'name' => 'Binder-IV'
        ]);
        designation::create([
            'name' => 'Compositor-IV'
        ]);
        designation::create([
            'name' => 'Head Reader'
        ]);
        designation::create([
            'name' => 'Proof Reader'
        ]);
        designation::create([
            'name' => 'Copy Holder'
        ]);
        designation::create([
            'name' => 'Junior Engineer (Elec.)'
        ]);
        designation::create([
            'name' => 'Electrician II'
        ]);
        designation::create([
            'name' => 'Electrician III'
        ]);
        designation::create([
            'name' => 'Superintendent (Watch & Ward)'
        ]);
        designation::create([
            'name' => 'Watch & Ward Staff'
        ]);
        designation::create([
            'name' => 'Carpenter'
        ]);
        designation::create([
            'name' => 'General Operator'
        ]);
        designation::create([
            'name' => 'Driver'
        ]);
        designation::create([
            'name' => 'Assistant'
        ]);
        designation::create([
            'name' => 'U.D.C'
        ]);
        designation::create([
            'name' => 'L.D.C'
        ]);
        designation::create([
            'name' => 'Peon'
        ]);
        designation::create([
            'name' => 'Chawkidar'
        ]);
        designation::create([
            'name' => 'Sweeper'
        ]);
    }
}