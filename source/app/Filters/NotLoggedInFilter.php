<?php namespace App\Filters;
/**
* Danilo Lalić 0501/17
* Božo Labović 0563/17 
* 
* NotLoggedInFilter – filter klasa
*
* @version 1.0
*/

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class NotLoggedInFilter implements FilterInterface
{
/**
* before funkcija za filtriranje
*
* @param RequestInterface $request 
*
* @return void
*
*/

    public function before(RequestInterface $request)
    {
        if(!isset(session()->isLoggedIn)){
            return redirect()->to("/");
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}