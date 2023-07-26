<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Service\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $usuarioService;

    public function __construct(UsuarioService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        return $this->usuarioService->create($data);
    }

    public function get(int $id)
    {
        return $this->usuarioService->get($id);
    }
}
