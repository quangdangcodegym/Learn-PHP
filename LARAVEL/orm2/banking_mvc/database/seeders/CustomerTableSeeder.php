<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c1 = new Customer();
        $c1->full_name = 'Quang Dang';
        $c1->balance = 0;
        $c1->email = 'quang.dang@codeygym.vn';
        $c1->address = '28 NTP';
        $c1->save();

        $c2 = new Customer();
        $c2->full_name = 'Mình Minh';
        $c2->balance = 0;
        $c2->email = 'binh.minh@codeygym.vn';
        $c2->address = '28 NTP';
        $c2->save();

        $c3 = new Customer();
        $c3->full_name = 'Văn Cử';
        $c3->balance = 0;
        $c3->email = 'tran.cu@codeygym.vn';
        $c3->address = '28 NTP';
        $c3->save();

    }
}
