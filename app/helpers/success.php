<?php
class Success
{
    const SUCCESS_USER_REGISTERED = "2f4f7c3790e9f9d0e3c8f45bd345d7a5";

    const SUCCESS_CATEGORY_STORE = "z9y8x7w6v5u4t3s2r1q0p9o8n7m6l5k4"; // 'SUCCESS_CATEGORY_STORE'
    const SUCCESS_CATEGORY_UPDATE   = "7f2c4a8d9e5b13a0c6d8f7b2a4e9c3d1"; // 'CATEGORY_UPDATE'
    const SUCCESS_CATEGORY_DELETE   = "9a3f6d2b8e1c47f0b5d2e8a9c1f3d7e4"; // 'CATEGORY_DELETE'

    const SUCCESS_PRODUCT_STORE = "2f80b386dfc1ce0aca9dce9cb2ee8b3a";
    const SUCCESS_PRODUCT_UPDATE = "8a7e5d3c1f9b4d62e0f3a7b8c9d2e1f4";
    const SUCCESS_PRODUCT_DELETE = "1e6d4879c8f71db0a5f6e2a14b37f2ce"; // 'PRODUCT_DELETE'

    private $successList = [];

    public function __construct()
    {
        $this->successList = [
            self::SUCCESS_USER_REGISTERED => 'Registro completado correctamente',

            self::SUCCESS_CATEGORY_STORE => 'Categoría creada correctamente',
            self::SUCCESS_CATEGORY_UPDATE => 'Categoría actualizada correctamente',
            self::SUCCESS_CATEGORY_DELETE => 'Categoria eliminada correctamente',

            self::SUCCESS_PRODUCT_STORE => 'Producto registrado correctamente',
            self::SUCCESS_PRODUCT_UPDATE => 'Producto actualizado correctamente',
        ];
    }

    public function get(string $key): ?string
    {
        return $this->successList[$key] ?? null;
    }

    public function existsKey(string $key): bool
    {
        return array_key_exists($key, $this->successList);
    }
}
