<?php
class AdminController extends SecureController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->view->render('admin/index', ['user' => $this->user]);
    }
    public function menu()
    {
        $this->view->render('admin/menu');
    }
    public function newProduct() {
        $this->view->render('admin/formproducto');
    }
    public function newCategory() {
        $this->view->render('admin/formcategoria');
    }
    public function prevMenu()
    {
        $this->view->render('admin/prevmenu');
    }
    public function about()
    {
        $this->view->render('admin/acercade');
    }
}
