<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'usuario';

    public static function listar(int $limite){
        $sql = self::select([
            "id",
            "nome",
            "email",
            "senha",
            "data_cadastro"
        ])
        ->limite($limite);
        
        dd($sql->toSql());
        //dd debug do laravel
    }

    public static function cadastrar(Request $request){
        //DB::enableQueryLog();

        return $sql = self::insert([
            "nome" => $request->input("nome"),
            "email" => $request->input("email"),
            "senha" => Hash::make($request->input("senha")),
            "data_cadastro" => new Carbon()
        ]);

        //dd(DB::getQueryLog());
    }
}
