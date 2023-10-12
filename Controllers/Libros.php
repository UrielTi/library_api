<?php
require_once("autoload.php");
// funciones poo con pdo
class Libros extends Conexion{
    private $strTitulo;
    private $strAutor;
    private $intAño;
    private $strGenero;
    private $conn;
    // generamos conexion
    public function __construct(){
        $this->conn = new Conexion();
        $this->conn = $this->conn->connect();
    }

    // registro de dato
    public function insertLibro(string $titulo, string $autor, int $año, string $genero)
    {
        $this->strTitulo = $titulo;
        $this->strAutor = $autor;
        $this->intAño = $año;
        $this->strGenero = $genero;

        $sql = "INSERT INTO library(title,author,yearA,gender) VALUES(?,?,?,?)";
        $insert = $this->conn->prepare($sql);
        $arrData = array($this->strTitulo,$this->strAutor,$this->intAño,$this->strGenero);
        $resInsert = $insert->execute($arrData);
        return $resInsert;
    }
    // obtener libros
    public function getLibros()
    {
        $sql = "SELECT * FROM library";
        $execute = $this->conn->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
    // actualizar un libro
    public function updateLibros(int $id, string $titulo, string $autor, int $año, string $genero)
    {
        $this->strTitulo = $titulo;
        $this->strAutor = $autor;
        $this->intAño = $año;
        $this->strGenero = $genero;
        $sql = "UPDATE library SET title=?, author=?, yearA=?, gender=? WHERE id=$id";
        $update = $this->conn->prepare($sql);
        $arrData = array($this->strTitulo,$this->strAutor,$this->intAño,$this->strGenero);
        $resExecute = $update->execute($arrData);
        return $resExecute;
    }
    // obtener un libro
    public function getLibro(int $id)
    {
        $sql = "SELECT * FROM library WHERE id = ?";
        $arrWhere = array($id);
        $query = $this->conn->prepare($sql);
        $query->execute($arrWhere);
        $request = $query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }
    // eliminar un registro
    public function deleteLibro(int $id)
    {
        $sql = "DELETE FROM library WHERE id = ?";
        $arrWhere = array($id);
        $delete = $this->conn->prepare($sql);
        $del = $delete->execute($arrWhere);
        return $del;
    }
}
?>