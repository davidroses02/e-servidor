<?php

namespace app\Controller;

class DefaultController extends BaseController
{

    function showAction()
    {
        $this->renderHTML('..\views\holamundo_view.php', $data);
    }
}

?>