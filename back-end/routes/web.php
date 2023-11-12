<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicketController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TicketStatusController;
use App\Http\Controllers\TicketPriorityController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IssueTypeController;
use App\Http\Controllers\IssueStatusController;
use App\Http\Controllers\IssuePriorityController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\SupportArticleController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TemplateTypeController;
use App\Http\Controllers\TemplateController;

/*
|--------------------------------------------------------------------------https://github.com/eberger42/TicketSystem/tree/main/back-end
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::apiResource('tickets' , TicketController::class);
Route::apiResource('clients' , ClientController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('ticket-statuses', TicketStatusController::class);
Route::apiResource('ticket-priorities', TicketPriorityController::class);
Route::apiResource('issue-types', IssueTypeController::class);
Route::apiResource('issue-statuses', IssueStatusController::class);
Route::apiResource('issue-priorities', IssuePriorityController::class);
Route::apiResource('issues', IssueController::class);
Route::apiResource('support-articles', SupportArticleController::class);
Route::apiResource('files', FileController::class);
Route::apiResource('template-types', TemplateTypeController::class);
Route::apiResource('templates', TemplateController::class);
Route::apiResource('comments', CommentController::class)
->middleware('auth');

require __DIR__.'/auth.php';
