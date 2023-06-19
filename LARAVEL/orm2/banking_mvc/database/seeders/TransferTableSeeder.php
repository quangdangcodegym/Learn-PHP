<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transfer;

class TransferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t1 = new Transfer();
        $t1->fees = 5;
        $t1->fees_amount = 5000;
        $t1->transaction_amount = 55000;
        $t1->transfer_amount = 50000;
        $t1->recipient_id = 1;
        $t1->sender_id  = 2;

        $t1->save();
    }
}
