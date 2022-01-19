<?php

namespace app\Controller;

class BaseController
{
    public function renderHTML($fileName, $data = [])
    {
        include($fileName);
    }
}

?>