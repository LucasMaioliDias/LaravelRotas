<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "Página Inicial";
})->name('home');

Route::get('/user/{id}', function ($id) {
    return "Perfil do Usuário com ID: $id";
})->name('user.profile');

Route::get('/post/{slug}', function ($slug) {
    return "Post do Blog com Slug: $slug";
})->name('blog.post');

Route::get('/category/{category}', function ($category) {
    return "Posts na Categoria: $category";
})->name('blog.category');

Route::get('/sum/{n1}/{n2}', function ($n1, $n2) {
    $sum = $n1 + $n2;
    echo $sum;
})->name('sum.numbers')->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

Route::get('/convert/{currency}', function ($currency) {
    $sum = $currency * 4.87;
    return "Valor em Reais: R$ $currency convertido para Dólar R$ $sum";
})->name('currency.converter')->where('currency', '[0-9]+\.[0-9]{2}');
