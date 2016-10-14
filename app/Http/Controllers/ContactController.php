<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    /**
    * Responds to requests to GET /contact
    */
    public function __invoke()
    {
        return 'Display the Contact Us page';
    }

} # end of class
