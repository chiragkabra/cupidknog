<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dummy1',
            'email' => 'Dummy1@gmail.com',
            'password' => bcrypt('dummy1'),
            'date_of_birth'=>'21/12/2021',
            'gender'=>'female',
            'occupation'=>'private_job',
            'family_type'=>'n_family',
            'annual_income'=>'100000',
            'manglik'=>'no',
            'partner_income'=>'200000',
            'partner_occupation'=>'private_job',
            'partner_family'=>'n_family',
            'partner_manglik'=>'no',
            'role_id'=>'1',
        ]);
    }
}
