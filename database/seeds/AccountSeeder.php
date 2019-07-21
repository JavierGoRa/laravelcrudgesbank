<?php

use Illuminate\Database\Seeder;
use App\Account;

use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'numCuenta' => '968574859685748596857485',
            'client_id' => '2',
            'fechaAlta' => '2018-04-22',
            'saldo' => '658475',
            'fechaUMov' => '2018-04-22',
            'numMvtos' => '6',
        ]);

        DB::table('accounts')->insert([
            'numCuenta' => '968859689685748596857485',
            'client_id' => '1',
            'fechaAlta' => '2018-04-12',
            'saldo' => '8',
            'fechaUMov' => '2018-04-28',
            'numMvtos' => '1',
        ]);
        //factory(Account::class)->times(20)->create();

    }
}