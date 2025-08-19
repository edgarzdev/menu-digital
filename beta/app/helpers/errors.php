<?php
class Errors
{
    const ERROR_LOGIN_AUTHENTICATE = "44d54e16f2bb9bfaf690aa67b2e83c61"; // 'LOGIN_AUTHENTICATE'
    const ERROR_LOGIN_AUTHENTICATE_EMPTY = "de9b94913f37ed0200b2f8996a7a5baf"; // 'LOGIN_AUTHENTICATE_EMPTY'
    const ERROR_LOGIN_AUTHENTICATE_DATA = "824d5ddf8a4cc76db8d9829ca47b9a1e"; // 'LOGIN_AUTHENTICATE_DATA'

    const ERROR_SIGNUP_INCOMPLETE = "f3c8b1d2e4a5b6c7d8e9f0a1b2c3d4e5"; // 'SIGNUP_INCOMPLETE'
    const ERROR_SIGNUP_EMPTY_FIELDS = "a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6"; // 'SIGNUP_EMPTY_FIELDS'
    const ERROR_SIGNUP_INVALID_EMAIL = "b1c2d3e4f5g6h7i8j9k0l1m2n3o4p5q6"; // 'SIGNUP_INVALID_EMAIL'
    const ERROR_SIGNUP_USER_EXISTS = "c1d2e3f4g5h6i7j8k9l0m1n2o3p4q5r6"; // 'SIGNUP_USER_EXISTS'

    const ERROR_CATEGORY_STORE = "a7b8c9d0e1f2g3h4i5j6k7l8m9n0o1p2"; // 'ERROR_CATEGORY_STORE'
    const ERROR_CATEGORY_UPDATE     = "p3q4r5s6t7u8v9w0x1y2z3a4b5c6d7e8"; // 'ERROR_CATEGORY_UPDATE'
    const ERROR_CATEGORY_NOT_EXIST  = "f9g8h7i6j5k4l3m2n1o0p9q8r7s6t5u4"; // 'ERROR_CATEGORY_NOT_EXIST'
    const ERROR_CATEGORY_DELETE = "5e8a2c7d9b1f43e0c6d4a8f2b3e7d9c1"; // 'ERROR_CATEGORY_DELETE'

    const ERROR_PRODUCT_STORE = "p1r2o3d4u5c6t7s8t9o0r1e2e3r4r5o6r7"; // 'PRODUCT_STORE'
    const ERROR_PRODUCT_UPDATE = "u1p2d3a4t5e6p7r8o9d0u1c2t3e4r5r6o7"; // 'PRODUCT_UPDATE'
    const ERROR_PRODUCT_DELETE = "9c3a41b6f0d42d7ebecf2d18e43a7a19"; // 'PRODUCT_DELETE'

    private $errorsList = [];

    public function __construct()
    {
        $this->errorsList = [
            self::ERROR_LOGIN_AUTHENTICATE        => 'Hubo un problema al autenticarse',
            self::ERROR_LOGIN_AUTHENTICATE_EMPTY  => 'Los parámetros para autenticar no pueden estar vacíos',
            self::ERROR_LOGIN_AUTHENTICATE_DATA   => 'Usuario y/o clave incorrectos',

            self::ERROR_SIGNUP_INCOMPLETE         => 'Faltan datos para completar el registro',
            self::ERROR_SIGNUP_EMPTY_FIELDS       => 'Los campos de registro no pueden estar vacios',
            self::ERROR_SIGNUP_INVALID_EMAIL      => 'El correo electrónico proporcionado no es válido',
            self::ERROR_SIGNUP_USER_EXISTS        => 'El usuario ya existe, intenta con otro nombre de usuario o correo electrónico',

            self::ERROR_CATEGORY_STORE            => 'Error al guardar la categoría, por favor inténtalo nuevamente',
            self::ERROR_CATEGORY_UPDATE            => 'Error al actualizar la categoria, inténtalo nuevamente',
            self::ERROR_CATEGORY_NOT_EXIST            => 'Error, la categoria que estás intentando actualizar no existe',
            self::ERROR_CATEGORY_DELETE => 'Error al eliminar la categoria, inténtalo nuevamente',

            self::ERROR_PRODUCT_STORE             => 'No se pudo guardar el producto, verifica los datos e inténtalo nuevamente',
            self::ERROR_PRODUCT_UPDATE            => 'Error al actualizar el producto, inténtalo nuevamente',
            self::ERROR_PRODUCT_DELETE => 'Error al eliminar el producto, inténtalo nuevamente',
        ];
    }

    function get($hash)
    {
        return $this->errorsList[$hash];
    }

    function existsKey($key)
    {
        if (array_key_exists($key, $this->errorsList)) {
            return true;
        } else {
            return false;
        }
    }
}
