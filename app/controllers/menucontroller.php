<?php
class MenuController extends Controller
{
    function __construct() {
        parent::__construct();
    }
    public function index()
    {
        $this->view->render('menu/menu');
    }
}
