<?php
class AdminController extends SecureController
{
    public function __construct()
    {
        parent::__construct();
        // Aquí podrías verificar sesión o rol admin si quieres
        $this->requireModel(['categoria', 'producto']);
    }

    public function index()
    {
        $producto = new ProductoModel();
        $categoria = new CategoriaModel();
        $this->view->render('admin/index', [
            'productos' => $this->getLastProducts(),
            'n_productos' => $producto->countProducts(),
            'n_prod_inactivos' => $producto->countInactiveProducts(),
            'n_categorias' => $categoria->countCategories(),
        ]);
    }
    public function menu()
    {
        $categoria = new CategoriaModel();
        $this->view->render('admin/menu', [
            'productos' => $this->getLastProducts(),
            'categorias' => $categoria->getAll()
        ]);
    }
    public function prevMenu()
    {
        $this->view->render('admin/prevmenu', [
            'productos' => $this->getLastProducts()
        ]);
    }

    public function about()
    {
        $this->view->render('admin/acercade');
    }

    // Productos

    public function createProduct()
    {
        $categoria = new CategoriaModel();
        $categorias = $categoria->getAll();
        $this->view->render('admin/formproducto', ['categorias' => $categorias]);
    }

    public function storeProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            // Asume que el modelo tiene este método para guardar
            $producto = new ProductoModel();
            $producto->setNombre($data['nombre']);
            $producto->setDescripcion($data['descripcion']);
            $producto->setPrecio($data['precio']);
            $producto->setCategoriaId($data['categoria']);

            $imagen = $_FILES['imagen'];
            $target_dir = "uploads/";

            // Obtener extensión del archivo de forma más eficiente
            $file_info = pathinfo($imagen['name']);
            $ext = strtolower($file_info['extension']);

            // Generar un nombre único para el archivo
            $hash = md5(uniqid($imagen['name'], true)) . '.' . $ext;
            $target_file = $target_dir . $hash;
            // Intentar mover el archivo al directorio de destino
            if (!move_uploaded_file($imagen['tmp_name'], $target_file)) {
                return $this->redirect('admin/menu', ['error' => Errors::ERROR_PRODUCT_STORE]);
            }
            $producto->setImagen($hash);
            if ($producto->save()) {
                $this->redirect('admin/menu', ['success' => Success::SUCCESS_PRODUCT_STORE]);
            }
            // manejar error aquí
        }
    }

    public function editProduct($id)
    {
        $producto = new ProductoModel();
        $product = $producto->getById($id)->toArray();
        $categoria = new CategoriaModel();
        $product['categoria'] = $categoria->getById($product['categoria_id'])->toArray();
        if ($product) {
            $this->view->render('admin/formproducto', [
                'producto' => $product,
                'categorias' => $categoria->getAll(),
                'accion' => 'Editar'
            ]);
        } else {
            header('Location: /admin/menu');
            exit;
        }
    }

    public function updateProduct($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            $producto = new ProductoModel();
            $producto->getById($id);
            $producto->setNombre($data['nombre']);
            $producto->setDescripcion($data['descripcion']);
            $producto->setPrecio($data['precio']);
            $producto->setCategoriaId($data['categoria']);

            if (isset($_FILES['imagen']) && !empty($_FILES['imagen']['name'])) {
                $imagen = $_FILES['imagen'];
                $target_dir = "uploads/";
                // Obtener extensión del archivo de forma más eficiente
                $file_info = pathinfo($imagen['name']);
                $ext = strtolower($file_info['extension']);

                // Generar un nombre único para el archivo
                $hash = md5(uniqid($imagen['name'], true)) . '.' . $ext;
                $target_file = $target_dir . $hash;
                // Intentar mover el archivo al directorio de destino
                if (!move_uploaded_file($imagen['tmp_name'], $target_file)) {
                    return $this->redirect('admin/menu', ['error' => Errors::ERROR_PRODUCT_UPDATE]);
                }
                $producto->setImagen($hash);
            };

            if ($producto->save()) {
                return $this->redirect('admin/menu', [
                    'success' => Success::SUCCESS_PRODUCT_UPDATE
                ]);
            }
            return $this->redirect('admin/menu', [
                'error' => Errors::ERROR_PRODUCT_UPDATE
            ]);
        }
    }

    public function deleteProduct($id)
    {
        // Puede ser POST , según tu diseño
        $producto = new ProductoModel();
        if ($producto->delete($id)) {
            return $this->redirect('admin/menu', [
                'success' => Success::SUCCESS_PRODUCT_DELETE
            ]);
        }
        return $this->redirect('admin/menu', [
            'error' => Errors::ERROR_PRODUCT_DELETE
        ]);
    }

    public function createCategory()
    {
        $this->view->render('admin/formcategoria');
    }

    public function storeCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            $categoria = new CategoriaModel;
            $categoria->setNombre($data['nombre']);
            $categoria->setDescripcion($data['descripcion']);
            if ($categoria->save($data)) {
                return $this->redirect('admin/menu', ['success' => Success::SUCCESS_CATEGORY_STORE]);
            }
            return $this->redirect('admin/menu', ['error' => Errors::ERROR_CATEGORY_STORE]);
        }
    }

    public function editCategory($id)
    {
        $categoria = new CategoriaModel();
        $category = $categoria->getById($id)->toArray();
        if ($category) {
            $this->view->render('admin/formcategoria', [
                'categoria' => $category,
                'accion' => 'Editar'
            ]);
        } else {
            header('Location: /admin/categories');
            exit;
        }
    }

    public function updateCategory($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;

            $categoria = new CategoriaModel();
            $categoria->getById($id);

            if (!$categoria->getById($id)) {
                return $this->redirect('admin/menu', [
                    'error' => Errors::ERROR_CATEGORY_NOT_EXIST
                ]);
            }
            $categoria->setNombre($data['nombre']);
            $categoria->setDescripcion($data['descripcion']);

            if ($categoria->save()) {
                return $this->redirect('admin/menu', [
                    'success' => Success::SUCCESS_CATEGORY_UPDATE
                ]);
            }
            return $this->redirect('admin/menu', [
                'error' => Errors::ERROR_CATEGORY_UPDATE
            ]);
        }
    }

    public function deleteCategory($id)
    {
        $categoria = new CategoriaModel();

        if ($categoria->delete($id)) {
            return $this->redirect('admin/menu', [
                'success' => Success::SUCCESS_CATEGORY_DELETE
            ]);
        }
        return $this->redirect('admin/menu', [
            'error' => Errors::ERROR_CATEGORY_DELETE
        ]);
    }

    private function getLastProducts($n = 10, $page = 0, $order = 'DESC')
    {
        $product = new ProductoModel();
        $category = new CategoriaModel();
        $productos = $product->getProducts($n, $page, $order);
        $productosConCategoria = [];

        foreach ($productos as $producto) {
            $categoria = $category->getById($producto['categoria_id']);
            $producto['categoria'] = $categoria->getNombre();
            $productosConCategoria[] = $producto; // agregar al nuevo array
        }

        return $productosConCategoria;
    }
}
