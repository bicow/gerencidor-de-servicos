<?php

use App\Models\servicos;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
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
    $firstService = new Servicos();
    $firstService->Nome = 'Conserto de carro';
    $firstService->Telefone = '11999999999';
    $firstService->Origem = 'SP';
    $firstService->Observacao = '-';
    $firstService->save();
    return view('welcome');
});
