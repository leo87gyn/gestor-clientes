<?php

namespace App\Http\Middleware;

use Closure;

class Autenticar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $resposta = $this->validarToken($request);
        if($resposta['codigo']==200){
            return $next($request);
        }
        return response()->json($resposta,203);
      
    }
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return usuario
     */
    public static function validarToken ($request){
        $token = $request->input('token');
        $usuario = \DB::table('users')->where('remember_token', $token)->first();
        if(!empty($usuario)){
            $sucesso = array(
                'mensagem' => 'OK' ,
                'codigo' => 200 ,
                'codigo_mensagem' => 'The request has succeeded'
                );
            return $sucesso;

        }
        else{
            $erro = array(
                'mensagem' => 'Token errado !' ,
                'codigo' => 203 ,
                'codigo_mensagem' => 'Non-Authoritative Information'
                );
            return $erro;
        }
    }
}
