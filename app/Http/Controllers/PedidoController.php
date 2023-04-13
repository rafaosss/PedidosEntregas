<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return response()->json($pedidos);
    }

    public function show($id)
    {
        $pedido = Pedido::find($id);
        return response()->json($pedido);
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        $pedido = new Pedido();
        $pedido->id_cliente = $dados['id_cliente'];
        $pedido->data_entrega = $dados['data_entrega'];
        $pedido->valor_frete = $dados['valor_frete'];
        $pedido->save();
        return response()->json(['mensagem' => 'Pedido salvo com sucesso']);
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        $dados = $request->all();
        $pedido->id_cliente = $dados['id_cliente'];
        $pedido->data_entrega = $dados['data_entrega'];
        $pedido->valor_frete = $dados['valor_frete'];
        $pedido->save();
        return response()->json(['mensagem' => 'Pedido atualizado com sucesso']);
    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();
        return response()->json(['mensagem' => 'Pedido removido com sucesso']);
    }
}
