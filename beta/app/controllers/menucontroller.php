<?php
class MenuController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->requireModel(['categoria', 'producto']);
    }
    public function index()
    {
        $filter = $_GET['filter'] ?? null;
        $order = $_GET['order'] ?? '';
        $categoriaId = $_GET['categoria'] ?? null;

        $categoriaModel = new CategoriaModel();

        // Obtener productos filtrados, si $categoriaId está definido, se usa para filtrar
        if (!empty($categoriaId)) {
            $productos = $this->getProductsFilterByCat($categoriaId, $order);
        } else {
            $productos = $this->getAllProducts();
        }

        $this->view->render('menu/menu', [
            'filter' => $filter,
            'order' => $order,
            'productos' => $productos,
            'categorias' => $categoriaModel->getAll(),
            'categoriaSeleccionada' => $categoriaId // para marcar la categoría seleccionada en la vista
        ]);
    }

    public function category($id)
    {
        // Lógica para obtener productos de la categoría $id
        $this->view->render('menu/category', ['categoryId' => $id]);
    }

    public function product($id)
    {
        // Lógica para obtener detalles del producto $id
        $this->view->render('menu/product', ['productId' => $id]);
    }
    private function getAllProducts($n = 10, $page = 0, $order = 'DESC')
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
    private function getProductsFilterByCat($categoriaId, $order)
    {
        $product = new ProductoModel();
        $category = new CategoriaModel();
        $productos = $product->getProductsFilterByCategory($categoriaId, $order);
        $productosConCategoria = [];
        foreach ($productos as $producto) {
            $categoria = $category->getById($producto['categoria_id']);
            $producto['categoria'] = $categoria->getNombre();
            $productosConCategoria[] = $producto; // agregar al nuevo array
        }

        return $productosConCategoria;
    }
}
