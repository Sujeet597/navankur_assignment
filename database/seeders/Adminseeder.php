<?php

namespace Database\Seeders;
use App\Models\order;
use App\Models\Payment_invoice;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        // for($i = 0; $i<=100; $i++){
        //     $order = new order;
        //     $order->order_id =  $faker->unique()->randomNumber();
        //     $order->product_name = $faker->unique()->word;
        //     $order->quantity = $faker->randomFloat(2, 10, 1000);
        //     $order->price_per_unit = $faker->randomFloat(2, 10, 1000);
        //     $order->state = $faker->state;
        //     $order->status = $faker->randomElement(['active', 'inactive', 'draft']);
        //     $order->action = 'dev';
        //     $order->save();
        // }
            for($i = 0; $i<= 100; $i++){
              $payment = new Payment_invoice;
             $payment->order_id = $faker->unique()->randomNumber();
             $payment->product_name = $faker->unique()->word;
             $payment->amount_payable = $faker->randomFloat(500, 600);
             $payment->mode_of_payment = $faker->randomElement(['CASH', 'CHEQUE', 'ONLINE', 'CARD']);
             $payment->payment_status = $faker->randomElement(['initial payment pending', 'initial Payment Received', 'final payment Received']);
             $payment->invoice = $faker->word;
             $payment->save();

            }

    }
}
