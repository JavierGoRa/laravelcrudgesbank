<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Account extends Model
{
    protected $table="accounts";
    protected $fillable = ['numCuenta', 'client_id', 'fechaAlta', 'saldo', 'fechaUMov', 'numMvtos'];
    
    /* public function clients(){
        return $this->hasMany('App\Client');
    } */

    public function transactions(){
        return $this->hasMany(`App\Transactions`);
    }

    public function client(){
        return $this->belongsTo(`App\Client`);
    }

    public function scopeSearch($query, $search){
        return $query->where('numCuenta', 'like', "%$search%")
        ->orwhere('client_id', 'like', "%$search%")
        ->orwhere('fechaAlta', 'like', "%$search%")
        ->orwhere('saldo', 'like', "%$search%")
        ->orwhere('fechaUMov', 'like', "%$search%")
        ->orwhere('numMvtos', 'like', "%$search%");
    }

}
