<?php 

namespace App\Controllers;
use App\Models\Superheroe;
require_once('..\app\Config\constantes.php');
require_once('..\vendor\autoload.php');

class DefaultController extends BaseController 
{
    public function holaMundo()
    {
        include('../app/view/holamundo_view.html');
    }

    public function duplica($request)
    {
        $pattern = '/\d+/';
        $matches = preg_grep($pattern, $request);
        $numero = end($matches);
        $this->renderHTML('../app/view/duplica_view.php', $numero);
        

    }


}



?>