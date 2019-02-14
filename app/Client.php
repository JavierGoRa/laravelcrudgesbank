<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table="clients";
    protected $fillable = ['Nombre', 'apellidos', 'telefono', 'ciudad', 'email', 'dni' ];

    public function account(){
        return $this->hasMany(`App\Account`);
    }

}
