<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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


route::get('/',[EmployeeController::class,'create']);

route::post('/employeeread',[EmployeeController::class,'store']);

route::get('/viewallemployee',[EmployeeController::class,'index']);

route::post('/employeesearch',[EmployeeController::class,'search']);

route::get('/employee/{id}/edit',[EmployeeController::class,'edit']);

route::post('/editemployee/{id}',[EmployeeController::class,'update']);