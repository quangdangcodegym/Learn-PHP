<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customer();
        $customer->id = 1;
        $customer->name = "customer 1";
        $customer->dob = "2018-09-26";
        $customer->email = "customer1@codegym.vn";
        $customer->city_id = 1;
        $customer->save();

        

    }
}
