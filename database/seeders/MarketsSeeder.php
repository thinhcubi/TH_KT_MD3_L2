<?php

namespace Database\Seeders;

use App\Http\Controllers\Status;
use App\Models\Market;
use Illuminate\Database\Seeder;

class MarketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $market = new Market();
        $market->name = "Hoàng Nguyên";
        $market->phone = "0987333222";
        $market->email = "hoangnguyen@gmail.com";
        $market->address = "Cầu Giấy, Hà Nội";
        $market->customer_manager = "Lê Văn Hoàng";
        $market->status = Status::working;
        $market->save();


        $market = new Market();
        $market->name = "Phúc Hoàng";
        $market->phone = "0987333111";
        $market->email = "phuchoang@gmail.com";
        $market->address = "Long Biên, Hà Nội";
        $market->customer_manager = "Nguyễn Văn Phúc";
        $market->status = Status::notWork;
        $market->save();



        $market = new Market();
        $market->name = "Đại Nguyên";
        $market->phone = "0987333333";
        $market->email = "dainguyen@gmail.com";
        $market->address = "Từ Liêm, Hà Nội";
        $market->customer_manager = "Tống Hoàng Trường";
        $market->status = Status::working;
        $market->save();
    }
}
