<?php
/* Route response practice */
Route::get('/users', function (){
    return ['life',"day","get","well soon"];
});

Route::get('/user', function(){
    return [
        "life" => "day",
        "get" => "dsoon",
    ];
});


Route::get('/users',function(){
    return response()->json([
        "Name" => "Umair",
        "Roll no" => "192002",
        "Class" => "Life"
    ]);
});

Route::get('/users', function(){
    return redirect('/');
});

/* ====================================================================== */


/* Returning variables to view */

// compact method
return view("products.index", compact('title', "title2"));


// With method
return view("products.index")->with("title",$title);


// directly 
return view("products.index",['data' => $data,'title' => $title]);

/* ====================================================================== */
/* Route Creation process */
Route::get("product/{name}/{id}/{life}",
 [ProductsController::class, "show"])->where(
     [
         "name" => "[a-z A-Z]+",
         "id" => "[0-9]+",
         "life" => "[a-z A-Z]+",
         ]
    );
