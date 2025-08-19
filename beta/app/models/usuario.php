<?php
class UsuarioModel extends Model
{
    private $id_usuario;
    private $nombre;
    private $usuario;
    private $correo;
    private $password;
    
    public function __construct()
    {
        parent::__construct();
        $this->id_usuario = null;
        $this->nombre = '';
        $this->usuario = '';
        $this->correo = '';
        $this->password = '';
    }

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT id_usuario, nombre, usuario, correo FROM usuario');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getById($id)
    {
        try {
            $query = $this->prepare('SELECT * FROM usuario WHERE id_usuario = :id');
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

    public function getByUsuario($usuario)
    {
        try {
            $query = $this->prepare('SELECT * FROM usuario WHERE usuario = :usuario');
            $query->execute(['usuario' => $usuario]);
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
            if ($this->id_usuario) {
                // Actualizar
                $query = $this->prepare('UPDATE usuario SET nombre = :nombre, usuario = :usuario, correo = :correo, password = :password WHERE id_usuario = :id_usuario');
                return $query->execute([
                    'nombre' => $this->nombre,
                    'usuario' => $this->usuario,
                    'correo' => $this->correo,
                    'password' => $this->password,
                    'id_usuario' => $this->id_usuario
                ]);
            } else {
                // Insertar
                $query = $this->prepare('INSERT INTO usuario (nombre, usuario, correo, password) VALUES (:nombre, :usuario, :correo, :password)');
                $result = $query->execute([
                    'nombre' => $this->nombre,
                    'usuario' => $this->usuario,
                    'correo' => $this->correo,
                    'password' => $this->password
                ]);
                if ($result) {
                    $this->id_usuario = $this->pdo->lastInsertId();
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
            $query = $this->prepare('DELETE FROM usuario WHERE id_usuario = :id');
            return $query->execute(['id' => $id]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function from($array)
    {
        $this->id_usuario = $array['id_usuario'];
        $this->nombre = $array['nombre'];
        $this->usuario = $array['usuario'];
        $this->correo = $array['correo'];
        $this->password = $array['password'];
    }

    public function toArray()
    {
        return [
            'id_usuario' => $this->id_usuario,
            'nombre' => $this->nombre,
            'usuario' => $this->usuario,
            'correo' => $this->correo,
            'password' => $this->password
        ];
    }
    // Getters y setters

    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getPassword()
    {
        return $this->password;
    }
    
    private function hashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function setPassword($password, $hash = true)
    {
        if ($hash) {
            $this->password = $this->hashPassword($password);
        } else {
            $this->password = $password;
        }
    }
}
?>