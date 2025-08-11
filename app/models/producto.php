<?php
class ProductoModel extends Model
{
    private $id_producto;
    private $descripcion;
    private $precio;
    private $imagen;
    private $categoria_id;
    private $activo;

    public function __construct()
    {
        parent::__construct();
        $this->id_producto = null;
        $this->descripcion = '';
        $this->precio = 0.0;
        $this->imagen = '';
        $this->categoria_id = null;
        $this->activo = 1;
    }

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM producto');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getActive()
    {
        try {
            $query = $this->prepare('SELECT * FROM producto WHERE activo = 1');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getById($id)
    {
        try {
            $query = $this->prepare('SELECT * FROM producto WHERE id_producto = :id');
            $query->execute(['id' => $id]);
            if ($query->rowCount() > 0) {
                $this->from($query->fetch(PDO::FETCH_ASSOC));
                return $this;
            }
            return false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function save()
    {
        try {
            if ($this->id_producto) {
                $query = $this->prepare('UPDATE producto SET descripcion = :descripcion, precio = :precio, imagen = :imagen, categoria_id = :categoria_id, activo = :activo WHERE id_producto = :id_producto');
                return $query->execute([
                    'descripcion' => $this->descripcion,
                    'precio' => $this->precio,
                    'imagen' => $this->imagen,
                    'categoria_id' => $this->categoria_id,
                    'activo' => $this->activo,
                    'id_producto' => $this->id_producto
                ]);
            } else {
                $query = $this->prepare('INSERT INTO producto (descripcion, precio, imagen, categoria_id, activo) VALUES (:descripcion, :precio, :imagen, :categoria_id, :activo)');
                $result = $query->execute([
                    'descripcion' => $this->descripcion,
                    'precio' => $this->precio,
                    'imagen' => $this->imagen,
                    'categoria_id' => $this->categoria_id,
                    'activo' => $this->activo
                ]);
                if ($result) {
                    $this->id_producto = $this->pdo->lastInsertId();
                }
                return $result;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $query = $this->prepare('DELETE FROM producto WHERE id_producto = :id');
            return $query->execute(['id' => $id]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function from($array)
    {
        $this->id_producto = $array['id_producto'];
        $this->descripcion = $array['descripcion'];
        $this->precio = $array['precio'];
        $this->imagen = $array['imagen'];
        $this->categoria_id = $array['categoria_id'];
        $this->activo = $array['activo'];
    }

    public function toArray()
    {
        return [
            'id_producto' => $this->id_producto,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'imagen' => $this->imagen,
            'categoria_id' => $this->categoria_id,
            'activo' => $this->activo
        ];
    }

    // Getters y setters

    public function getIdProducto()
    {
        return $this->id_producto;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;
    }

    public function getActivo()
    {
        return $this->activo;
    }

    public function setActivo($activo)
    {
        $this->activo = $activo;
    }
}
?>
