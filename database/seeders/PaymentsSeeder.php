<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Payment;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-07-27 15:21:57';
        $payment->updated_at = '2021-07-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-06-27 15:21:57';
        $payment->updated_at = '2021-06-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-06-27 15:21:57';
        $payment->updated_at = '2021-06-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-06-27 15:21:57';
        $payment->updated_at = '2021-06-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-05-27 15:21:57';
        $payment->updated_at = '2021-05-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-05-27 15:21:57';
        $payment->updated_at = '2021-05-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-05-27 15:21:57';
        $payment->updated_at = '2021-05-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-05-27 15:21:57';
        $payment->updated_at = '2021-05-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-04-27 15:21:57';
        $payment->updated_at = '2021-04-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-03-27 15:21:57';
        $payment->updated_at = '2021-03-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-03-27 15:21:57';
        $payment->updated_at = '2021-03-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-03-27 15:21:57';
        $payment->updated_at = '2021-03-27 15:21:57';
        $payment->save();

        $payment = new Payment();
        $payment->product_id = 1;
        $payment->user_id  = 1;
        $payment->amount = 105.12;
        $payment->seller_part = 32.19;
        $payment->pokebay_part = 13.80;
        $payment->email = 'sacha@gmail.com';
        $payment->created_at = '2021-03-27 15:21:57';
        $payment->updated_at = '2021-03-27 15:21:57';
        $payment->save();
    }
}
