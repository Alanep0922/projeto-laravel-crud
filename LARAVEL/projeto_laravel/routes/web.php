<?php

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});
// criação de produto
Route:: post('/cadastrar', function(Request $request){

    Produto::create([
        'name' => $request->name,
        'valor'=> $request->valor,
        'estoque'=> $request->estoque
    ]);
    echo "Produto criado com suceso!";
});

// leitura do produto
Route::get('/ver-produto/{id}', function($id){

$produto = Produto:: find ($id);
return view('ver', ['produto'=> $produto]);
});

// edição do produto 
Route::get('/editar-produto/{id}', function($id){
    $produto = Produto:: find ($id);
    return view('editar', ['produto'=> $produto]);
    });
    
    Route:: post('/editar-produto/{id}', function(Request $request, $id){

        $produto = Produto::find($id);
        $produto->update([
            'name' => $request->name,
            'valor'=> $request->valor,
            'estoque'=> $request->estoque
        ]);
        echo "Produto editado com suceso!";
    });

    Route:: get('/excluir-produto/{id}', function(Request $request, $id){

        $produto = Produto::find($id);
        $produto->delete();
        echo "Produto deletado com suceso!";
    });
    

