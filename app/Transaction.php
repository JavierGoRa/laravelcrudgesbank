<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table="transactions";
    protected $fillable = ['account_id', 'fechaHora', 'tipo', 'cantidad'];

    public function account(){
        return $this->belongsTo(`App\Account`);
    }
}
