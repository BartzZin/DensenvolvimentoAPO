<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return Fornecedor::all();
    }

    public function store(Request $request)
    {
        return Fornecedor::create($request->all());
    }

    public function show($id)
    {
        return Fornecedor::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());
        return $fornecedor;
    }

    public function destroy($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();
        return 204;
    }
}
