<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller
{

    /**
    * Responds to requests to GET /help
    */
    public function help()
    {
        return 'Display the help page';
    }

    /**
    * Responds to requests to GET /faq
    */
    public function faq()
    {
        return 'Display the FAQs';
    }

} # end of class
