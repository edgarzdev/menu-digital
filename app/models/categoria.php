<?php
class CategoriaModel extends Model
{
    private $id_categoria;
    private $nombre;

    public function __construct()
    {
        parent::__construct();
        $this->id_categoria = null;
        $this->nombre = '';
    }

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM categoria');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getById($id)
    {
        try {
            $query = $this->prepare('SELECT * FROM categoria WHERE id_categoria = :id');
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
            if ($this->id_categoria) {
                $query = $this->prepare('UPDATE categoria SET nombre = :nombre WHERE id_categoria = :id_categoria');
                return $query->execute([
                    'nombre' => $this->nombre,
                    'id_categoria' => $this->id_categoria
                ]);
            } else {
                $query = $this->prepare('INSERT INTO categoria (nombre) VALUES (:nombre)');
                $result = $query->execute(['nombre' => $this->nombre]);
                if ($result) {
                    $this->id_categoria = $this->pdo->lastInsertId();
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
            $query = $this->prepare('DELETE FROM categoria WHERE id_categoria = :id');
            return $query->execute(['id' => $id]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function from($array)
    {
        $this->id_categoria = $array['id_categoria'];
        $this->nombre = $array['nombre'];
    }

    public function toArray()
    {
        return [
            'id_categoria' => $this->id_categoria,
            'nombre' => $this->nombre
        ];
    }

    // Getters y setters

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}
?>
