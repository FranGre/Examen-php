<?php
class Sales
{
    const CONNECTION_PATH = "./includes/connection.php";
    function getUserById(int $id)
    {
        require(self::CONNECTION_PATH);
        $query = $db->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    function getBook(int $id)
    {
        require(self::CONNECTION_PATH);
        $query = $db->prepare("SELECT * FROM books WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    function save(int $idBook, int $idUser)
    {
        require(self::CONNECTION_PATH);
        $statement = $db->prepare('INSERT INTO sales (id, idBook, idUser, date, status)
    VALUES (?, ?, ?, ?, ?)');
        if (!$statement) {
            echo ('Error en la preparación del statement: ' . $db->errorInfo()[2]);
        }

        $result = $statement->execute([null, $idBook, $idUser, null, null]);
        if (!$result) {
            echo ('Error al ejecutar el statement: ' . $statement->errorInfo()[2]);
        }
    }

    function delete(int $idBook, int $idUser)
    {
        require(self::CONNECTION_PATH);
        $statement = $db->prepare('DELETE FROM sales WHERE idBook = :idBook AND idUser = :idUser');
        if (!$statement) {
            echo ('Error en la preparación del statement: ' . $db->errorInfo()[2]);
        }
        $statement->bindValue(':idBook', $idBook);
        $statement->bindValue(':idUser', $idUser);
        $statement->execute();

    }
}