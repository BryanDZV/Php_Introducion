<?php
class UsuarioDao
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findbyId($id)
    {
        $sql = "SELECT * FROM libros WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);

        $usuario = $stmt->fetch();

        if ($usuario === false) {
            return null;
        }

        return $usuario;
    }
}
