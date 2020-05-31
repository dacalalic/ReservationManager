<?php namespace App\Filters;

/**
* Danilo Lalić 0501/17
* Božo Labović 0563/17 
* 
* BussinesFilter – filter klasa za korisnika
*
* @version 1.0
*/


use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class BussinesFilter implements FilterInterface
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
        if(!session()->type){
            return redirect()->to("/user");
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}