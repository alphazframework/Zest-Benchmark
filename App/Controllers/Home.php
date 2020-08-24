<?php

namespace App\Controllers;
use Zest\http\Response;

class Home extends \Zest\Controller\Controller
{
    /**
     * Show the index page.
     *
     * @return void
     */
    public function index()
    {
        view('Home/index');
    }
    public function hello()
    {

        $response = new Response(['code'    => 200,'body'    => "Hello World !"]);
        $response->send();
    }
}
