<?php
class AuthModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($usuario, $password)
    {
        error_log("AuthModel::login()");

        try {
            $userModel = new UsuarioModel();

            $user = $userModel->getByUsuario($usuario);

            if ($user) {
                error_log('AuthModel::login(): user id => ' . $user->getIdUsuario());

                if (password_verify($password, $user->getPassword())) {
                    error_log('AuthModel::login(): success');
                    return $user->getIdUsuario();
                } else {
                    error_log('AuthModel::login(): password incorrect');
                    return false;
                }
            } else {
                error_log('AuthModel::login(): usuario no encontrado');
                return false;
            }
        } catch (PDOException $e) {
            error_log('AuthModel::login(): PDOException - ' . $e->getMessage());
            return false;
        }
    }
}
?>