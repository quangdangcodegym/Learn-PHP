<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Deposit;

class DepositTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $d1 = new Deposit();
        $d1->transaction_amount = 1000000;
        $d1->customer_id = 1;
        $d1->save();


        $d2 = new Deposit();
        $d2->transaction_amount = 2000000;
        $d2->customer_id = 1;
        $d2->save();

    }
}
