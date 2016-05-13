<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => ['web']],function(){

    Route::get('/', function () {
        return view('newItem');
    });

    Route::post('/addNewItem',[                 //to add the new item to the table
        'uses' => 'ItemController@addNewItem',
        'as' => 'addNewItem'
    ]);

    
    Route::get('/newItem',[                     //to show the newItem page
        'uses' => 'ItemController@getnewItem',
        'as' => 'newItem'
    ]);

    Route::get('/updateItems',[                   //to show the Item table page
        'uses' => 'ItemController@getUpdateItems',
        'as' => 'updateItems'
    ]);
    

    Route::get('/item-delete/{itemID}',[        //to delete a item
        'uses' => 'ItemController@deleteItem',
        'as' => 'item.delete'
    ]);

    Route::get('/item-edit/{itemID}',[          //to edit a item
        'uses' => 'ItemController@editItem',
        'as' => 'item.edit'
    ]);

    Route::post('/addEditItem/{item}',[            //to add the edited item to the table
        'uses' => 'ItemController@addEditItem',
        'as' => 'addEditItem'
    ]);
    
    //open signup form
    Route::get('/signup', function () {
        return view('signup');
    });
    //signup form filled
    Route::post('/signup',[
        'uses'=>'CustomerController@postSignUp',
        'as'=> 'signup'
      ]);

});
