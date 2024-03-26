<?php

namespace App\Http\Controllers;

use App\Models\ProdutoFornecedor;
use Illuminate\Http\Request;

class ProdutoFornecedorController extends Controller
{
    public function index()
    {
        return ProdutoFornecedor::all();
    }

    public function store(Request $request)
    {
        return ProdutoFornecedor::create($request->all());
    }

    public function show($id)
    {
        return ProdutoFornecedor::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $ProdutoFornecedor = ProdutoFornecedor::findOrFail($id);
        $ProdutoFornecedor->update($request->all());
        return $ProdutoFornecedor;
    }

    public function destroy($id)
    {
        $ProdutoFornecedor = ProdutoFornecedor::findOrFail($id);
        $ProdutoFornecedor->delete();
        return 204;
    }
}