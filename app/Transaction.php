<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table="transactions";
    protected $fillable = ['numMovimiento', 'account_id', 'fechaHora', 'tipo','concepto', 'cantidad', 'saldo'];

    public function account(){
        return $this->belongsTo(`App\Account`);
    }

    public function scopeSearch($query, $search){
        return $query->where('account_id', 'like', "%$search%")
        ->orwhere('fechaHora', 'like', "%$search%")
        ->orwhere('tipo', 'like', "%$search%")
        ->orwhere('cantidad', 'like', "%$search%");
    }
}
