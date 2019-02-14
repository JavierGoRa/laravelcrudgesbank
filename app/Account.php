<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table="accounts";

    protected $fillable = ['numCuenta', 'client_id', 'fechaAlta', 'saldo', 'fechaUMov', 'numMvtos'];
    public function clients(){
        return $this->hasMany('App\Client');
    }

    public function transactions(){
        return $this->hasMany(`App\Transactions`);
    }

    public function client(){
        return $this->belongsto(`App\Client`);
    }

}
