Route::get('/test', function () {
    return response()->json([
        'message' => 'API working'
    ]);
});