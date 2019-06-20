<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model {

    protected $fillable = ["usuario", "nombre", "password", "correo"];

    protected $dates = [];

    public static $rules = [
        "usuario" => "required",
        "nombre" => "required",
        "password" => "required",
        "correo" => "required",
    ];

    // Relationships

}
