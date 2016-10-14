<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
| View the homepage
*/

Route::get('/', function () {
    return view('welcome');
    //TO-DO: Customize the welcome page, or redirect to /books
});

/*  Routes for the Book resource
|   (An alternative to the below is to call the Route facade's resource method)
*/

# View a list of all books
Route::get('/books', 'BookController@index')->name('books.index');

# Show form to add a book
Route::get('/books/create', 'BookController@create')->name('books.create');

# Save an added book
Route::post('books', 'BookController@store')->name('books.store');

# View a single book
Route::get('/books/{title}', 'BookController@show')->name('books.show');

# Show form to edit a book
Route::get('/books/{title}/edit', 'BookController@edit')->name('books.edit');

# Save an edited book
Route::put('/books/{title}', 'BookController@update')->name('books.update');

# Delete a book
Route::delete('/books/{title}', 'BookController@destroy')->name('books.destroy');

/*
| Routes for static pages
*/

Route::get('help', 'PageController@help')->name('page.help');
Route::get('faq', 'PageController@faq')->name('page.faq');

/*
| Route for contact page
| Note to self: Need to understand this controller better
| See __invoke method? Seems to mean you don't need an action?
*/

Route::get('/contact', 'ContactController')->name('contact');

/*
| Route for viewing Laravel Log Viewer (package by rap2hpoutre)
| For local use only
*/
if(App::environment() == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
