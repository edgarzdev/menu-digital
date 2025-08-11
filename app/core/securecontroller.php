<?php
// /app/core/SecureController.php
class SecureController extends Controller
{
    protected Session $session;
    protected $user;

    public function __construct()
    {
        parent::__construct();

        $this->loadModel('usuario');

        $this->session = new Session();

        // Middleware sencillo manual para proteger controlador
        if (!$this->session->get('usuario_id')) {
            $this->redirect('auth');
            exit;
        } else {
            $userIdofSession = $this->session->get('usuario_id');
            $usuario = new UsuarioModel();
            $usuario->getById($userIdofSession);
            $this->user = $usuario;
        }
    }
}
