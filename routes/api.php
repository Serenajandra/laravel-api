<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/test', function () {
//     return response()->json([
//         'success' => true,
//         'result' => [
//             'name' => 'Serena',
//             'state' => 'Italia'
//         ]
//     ]);
// });

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('projects/{slug}', [ProjectController::class, 'show']);
