<?php
/**
 * FrontController
 * 
 */

 namespace App\Controllers;

 class PageController extends BaseController {

     /* public function __construct($container) {
         parent::__construct($container);
     } */

     /* public function index($request, $response, $args) {
         $this->view->render($response, 'index.twig');
     } */

    public function aboutAction() {
        return $this->renderHTML('Page/about.html.twig');
    }

    public function contactAction()
    {
        return $this->renderHTML('Page/contact.html.twig');
    }

    public function contactActionSend($request) {
        $postdata = array();
        if ($request->getMethod()=='POST') {
            $postdata = $request->getParsedBody();
        }
        return $this->renderHTML('/Page/contactEmail.txt.twig',$postdata);
    }

 }