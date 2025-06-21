<?php
require_once __DIR__ . '/../config.php';

class Product
{
    public static function all()
    {
        global $conn;
        $result = $conn->query("SELECT * FROM products");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function find($id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public static function create($name, $price)
    {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO products (name, precio) VALUES (?, ?)");
        $stmt->bind_param("sd", $name, $price);
        return $stmt->execute();
    }

    public static function update($id, $name, $price)
    {
        global $conn;
        $stmt = $conn->prepare("UPDATE products SET name=?, precio=? WHERE id=?");
        $stmt->bind_param("sdi", $name, $price, $id);
        return $stmt->execute();
    }

    public static function delete($id)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM products WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>