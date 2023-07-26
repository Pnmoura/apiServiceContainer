<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\Usuario;

class UsuarioService
{
    public function create(array $request) : Usuario
    {
        $usuario = new Usuario();
        $usuario->nome = $request['nome'];
        $usuario->endereco = $request['endereco'];
        $usuario->cpf = $request['cpf'];
        $usuario->save();

        return $usuario;
    }

    public function get(int $id): ?Usuario
    {
        $usuario = Usuario::find($id);

        return $usuario;
    }
}
