/* Auto-generated {{$modelRouteName}} api routes */
Route::group(["middleware"=>['auth:sanctum', 'verified']], function () {
    Route::apiResource('/{{$modelRouteName}}', \App\Http\Controllers\API\{{$controllerClassName}}::class)->parameters(["{{$modelRouteName}}" => "{{$modelVariableName}}"]);
});
