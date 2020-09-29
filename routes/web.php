<?php

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
    return view('welcome');
});


route::get("/prueba", "paisesController@listadoPaises");

route::get("/festivales", "festivalesController@listadoFestivales");

route::get("/cargarFotosFestivales/{id}", "festivalesController@editarFestivales");

route::post("/cargarFotosFestivales/{id}","festivalesController@cargarFotosFestival");

route::get("/hospedaje", "hospedajeController@listadoHospedajes");

route::get("/cargarFotosHospedajes/{id}", "hospedajeController@editarHospedajes");

route::post("/cargarFotosHospedajes/{id}","hospedajeController@cargarFotosHospedajes");

route::get("/lugaresTuristicos", "lugaresTuristicosController@listadoLugaresTuristicos");

route::get("/cargarFotosLugaresTuristicos/{id}", "lugaresTuristicosController@editarLugaresTuristicos");

route::get("/tribus", "tribuController@listadoTribus");

route::get("/cargarFotosTribu/{id}", "tribuController@editarTribu");

route::post("/cargarFotosTribu/{id}", "tribuController@cargarFotos");



