<?php
// /app/controllers/AuthController.php
class AuthController extends Controller
{
    protected Session $session;

    public function __construct()
    {
        parent::__construct();
        //importa los modelos requeridos
        $this->requireModel(['usuario']);
        //carga el modelo principal
        $this->loadModel('auth');

        $this->session = new Session();
    }

    public function index()
    {
        $this->view->render('auth');
    }

    public function login()
    {
        if (!$this->existPOST(['username', 'password'])) {
            $this->redirect('auth', ['error' => Errors::ERROR_LOGIN_AUTHENTICATE]);
            exit;
        }
        $username = $this->getPost('username');
        $password = $this->getPost('password');

        // logica de inicio de session
        $id = $this->model->login($username, $password);
        if ($id) {
            $user = new UsuarioModel();
            $user->getById($id);
            $userData = $user->toArray();

            // colocando datos importantes en sesion
            $this->session->set('usuario_id', $userData['id_usuario']);
            $this->redirect('admin');
            return;
        } else {
            $this->redirect('auth', ['error' => Errors::ERROR_LOGIN_AUTHENTICATE_DATA]);
            return;
        }
    }

    public function logout()
    {
        $this->session->destroy();
        $this->redirect('auth');
    }
}
