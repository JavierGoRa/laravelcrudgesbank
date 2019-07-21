<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Account;
class Client extends Model
{
    protected $table="clients";
    protected $fillable = ['nombre', 'apellidos', 'telefono', 'ciudad', 'email', 'dni' ];

    public function accounts(){
        return $this->hasMany(`App\Account`);
    }
    
    public function scopeSearch($query, $search){
        return $query->where('nombre', 'like', "%$search%")
        ->orwhere('apellidos', 'like', "%$search%")
        ->orwhere('ciudad', 'like', "%$search%")
        ->orwhere('telefono', 'like', "%$search%")
        ->orwhere('dni', 'like', "%$search%")
        ->orwhere('email', 'like', "%$search%");
    }
}