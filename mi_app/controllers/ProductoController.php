<?php
require_once __DIR__ . '/../models/Product.php';

class ProductController
{
    public function index()
    {
        $products = Product::all();
        require __DIR__ . '/../views/list.php';
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $price = $_POST['price'];
            Product::create($name, $price);
            header("Location: index.php");
            exit;
        }
        require __DIR__ . '/../views/create.php';
    }

    public function edit()
    {
        $id = $_GET['id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $price = $_POST['price'];
            Product::update($id, $name, $price);
            header("Location: index.php");
            exit;
        }
        $product = Product::find($id);
        require __DIR__ . '/../views/edit.php';
    }

    public function delete()
    {
        $id = $_GET['id'];
        Product::delete($id);
        header("Location: index.php");
        exit;
    }
}
?>