<?php

// class ModelProduct
// {
//     private $data = array();

//     public function __construct(
//         $IDCate,
//         $name,
//         $price,
//         $price_sale,
//         $image,
//         $qty,
//         $status,
//         $trend
//     ) {
//         $this->data["IDCate"] = $IDCate;
//         $this->data["name"] = $name;
//         $this->data["price"] = $price;
//         $this->data["price_sale"] = $price_sale;
//         $this->data["image"] = $image;
//         $this->data["qty"] = $qty;
//         $this->data["status"] = $status;
//         $this->data["trend"] = $trend;
//     }


//     public function __get($attr)
//     {
//         if (!isset($this->data[$attr])) {
//             return "erreur";
//         } else {
//             return ($this->data[$attr]);
//         }
//     }
//     public function __set($attr, $value)
//     {
//         $this->data[$attr] = $value;
//     }

//     public static function getAllCategory($conn)
//     {
//         $stmt = $conn->query("SELECT * FROM categoryProduct");
//         $resultat = $stmt->fetchall(PDO::FETCH_ASSOC);
//         return $resultat;
//     }



//     public static function getall($conn)
//     {
//         $stmt = $conn->query("SELECT * FROM products");
//         $res = $stmt->fetchall(PDO::FETCH_ASSOC);
//         return $res;
//     }
//     public function addProduct($conn)
//     {
//         $stmt = $conn->prepare("INSERT INTO products(
//             IDCategory,NameProd,Price,SalePrice,ImageProd,QuantityProd,status,trending
//         ) VALUES (
//         :IDCate,
//         :name,
//         :price,
//         :price_sale,
//         :image,
//         :qty,
//         :status,
//         :trend)");
//         $stmt->execute(array(
//             ':IDCate' => $this->data['IDCate'],
//             ':name' => $this->data['name'],
//             ':price' => $this->data['price'],
//             ':price_sale' => $this->data['price_sale'],
//             ':image' => $this->data['image'],
//             ':qty' => $this->data['qty'],
//             ':status' => $this->data['status'],
//             ':trend' => $this->data['trend'],
//         ));
//     }

//     public static function deleteProduct($conn, $product_id)
//     {
//         $stmt = $conn->prepare("DELETE FROM products WHERE IDproduct=:product_id");
//         $stmt->execute(array(
//             ':product_id' => $product_id
//         ));
//     }

//     public static function updateProduct($conn, $prod_id)
//     {
//         $stmt = $conn->prepare("UPDATE products SET cat_id=:cat_id,brand_id=:brand_id,date=:date,
//         product_title=:product_title,product_img1=:product_img1,price=:price,product_desc=:product_desc
//         where cat_id = :cat_id");
//         $stmt->execute(array(
//             ':cat_id' => $cat_id,
//             ':brand_id' => $brand_id,
//             ':date' => $date,
//             ':product_title' => $product_title,
//             ':product_img1' => $product_img1,
//             ':price' => $price,
//             ':product_desc' => $product_desc
//         ));
//     }
// }
