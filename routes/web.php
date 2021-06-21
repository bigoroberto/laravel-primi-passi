<?php

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
    $data=[
        'name' => 'Vera',
        'lastname' => 'Farmiga',
        'interpretes' => 'Lorraine Warren',
        'films' => [
            [
              'url' => '/film1',
              'titolo' => "The Conjuring - L'Evocazione",
            ],
            [
              'url' => '/film2',
              'titolo' => "The Conjuring - Il caso Enfield",
            ],
            [
              'url' => '/film3',
              'titolo' => "The Conjuring - Per ordine del Diavolo",
            ],
          ]
    ];
    return view('main', $data);
});

Route::get('/film1', function () {
    $data=[
        'titolo' => "The Conjuring - L'Evocazione",
        'copertina' => 'https://ilgeniodellostreaming.voto/wp-content/uploads/2019/03/The-Conjuring-Levocazione-1.jpg.webp',
        'casts' => ["Patrick Wilson,","Vera Farmiga"],
        'interpretes' => ["Ed Warren,","Lorraine Warren."],
        'author' => 'James Won',
        'trama' => "Nella nuova casa in cui si trasferisce la numerosa famiglia Perron si verificano strane apparizioni e rumori inquietanti fino a vere e proprie manifestazioni paranormali."

    ];
    return view('film1', $data);
});

Route::get('/film2', function () {
    $data=[
        'titolo' => "The Conjuring - Il caso Enfield",
        'copertina' => 'https://ilgeniodellostreaming.voto/wp-content/uploads/2016/10/The-Conjuring-2-Il-Caso-Enfield.jpg.webp',
        'casts' => ["Patrick Wilson,","Vera Farmiga"],
        'interpretes' => ["Ed Warren,","Lorraine Warren."],
        'author' => 'James Won',
        'trama' => "Lorraine e Ed Warren, in una delle loro indagini paranormali più terrificanti, si recano a nord di Londra per aiutare una madre che alleva quattro bambini da sola in una casa infestata da spiriti maligni."

    ];
    return view('film2', $data);
});

Route::get('/film3', function () {
    $data=[
        'titolo' => "The Conjuring - Per ordine del diavolo",
        'copertina' => 'https://ilgeniodellostreaming.voto/wp-content/uploads/2021/06/The-Conjuring-3-Per-ordine-del-diavolo.jpg.webp',
        'casts' => ["Patrick Wilson,","Vera Farmiga"],
        'interpretes' => ["Ed Warren,","Lorraine Warren."],
        'author' => 'James Won',
        'trama' => "Un terrificante caso di omicidio e una misteriosa presenza malvagia scuotono persino gli esperti investigatori del paranormale Ed e Lorraine Warren. In questo caso, iniziano combattendo per proteggere l'anima di un bambino."

    ];
    return view('film3', $data);
});



