<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Assistant;
use App\Models\Request as ServiceRequest;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// /assistants returns all the assistants nearby
Route::get('/assistants', function (Request $request) {
    $assistants = Assistant::all();
    return response()->json($assistants);
});

// /assistant/{id} returns all the services for the assistant
Route::get('/assistant/{id}', function (Request $request, $id) {
    $assistant = Assistant::find($id);
    return response()->json($assistant->services);
});

// /notify/{assistance_id}/{service_id} creates a new service request
// for the service
Route::get('/notify/{assistance_id}/{service_id}', function (Request $request,
    $assistance_id, $service_id) {

    $serviceRequest = new ServiceRequest;
    $serviceRequest->assistance_id = $assistance_id;
    $serviceRequest->service_id = $service_id;
    $serviceRequest->save();

    return response()->json([
        'status' => 'ok',
        'request' => $serviceRequest
    ])
});

// /approve/{id} approves a service request
Route::get('/approve/{id}', function (Request $request) {
    $serviceRequest = ServiceRequest::find($id);
    $serviceRequest->status = 2;
    $serviceRequest->save();

    return response()->json([
        'status' => 'ok',
        'request' => $serviceRequest,
    ]);
});

// /decline/{id} declines a service request
Route::get('/decline/{id}', function (Request $request) {
    $serviceRequest = ServiceRequest::find($id);
    $serviceRequest->status = 1;
    $serviceRequest->save();

    return response()->json([
        'status' => 'ok',
        'request' => $serviceRequest,
    ]);
});
