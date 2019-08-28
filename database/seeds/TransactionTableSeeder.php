<?php

use Illuminate\Database\Seeder;
use App\Transaction;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Transaction::class, 20)->create();
    }
}
