<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BookController extends Controller
{

    /**
    * Display a list of all books
    * (Responds to GET /books)
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('index');
        //TO-DO: Create this view!
    }

    /**
    * Show a form to add a book
    * (Responds to GET /books/create)
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('create');
        // TO-DO: Create this view!
    }

    /**
    * Save an added book
    * (Responds to POST /books)
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        // Not sure what this will do...
    }

    /**
    * View a specified book
    * (Responds to GET /books/{title})
    * @param \Illuminate\Http\Request $title
    * @return \Illuminate\Http\Response
    */
    public function show($title)
    {
        return view('book.show')->with('title', $title);
        //TO-DO: Create this view!
    }

    /**
    * Show a form to edit a book
    * (Reponds to /books/{title}/edit)
    * @param string $title
    * @return \Illuminate\Http\Response
    */
    public function edit($title)
    {
        return view('edit');
        //TO-DO: Create a view to edit book
    }

    /**
    * Save an edited book
    * (Responds to PUT /books/{title})
    * @param \Illuminate\Http\Request $request
    * @param string $title
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $title)
    {
        return('This would update an edited book')
        // Not sure what to do here
    }

    /**
    * Delete a book
    * (Responds to DELETE /books/{title})
    * @param string $title
    * @return \Illuminate\Http\Response
    */
    public function destroy($title)
    {
        return('This would delete the book '.$title)
        // Not sure what to do here
    }


} # end of class
