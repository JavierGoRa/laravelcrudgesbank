<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GesbankSeeders::class);
        $this->call(ClientSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(TransactionSeeder::class);

    }
}
