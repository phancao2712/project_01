<?php

// class ModelCategory
// {
//     private $data = array();

//     public function __construct($title, $image)
//     {
//         $this->data['name_cate'] = $title;
//         $this->data['image_cate'] = $image;
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

//     public function addCategorie($conn)
//     {
//         $stmt = $conn->prepare("INSERT INTO categoryproduct(NameCategory, ImageCategory) VALUES (:name_cate, :image_cate)");
//         $stmt->execute(array(
//             ':name_cate' => $this->data['name_cate'],
//             ':image_cate' => $this->data['image_cate']
//         ));
//     }

//     public static function getAllCategory($conn)
//     {
//         $stmt = $conn->query("SELECT * FROM categoryProduct");
//         $resultat = $stmt->fetchall(PDO::FETCH_ASSOC);
//         return $resultat;
//     }

//     public static function deleteCategory($conn, $cat_id)
//     {
//         $stmt = $conn->prepare("DELETE FROM categoryproduct WHERE IDCategory=:cat_id");
//         $stmt->execute(array(
//             ':cat_id' => $cat_id
//         ));
//     }

//     public static function updateCategory($conn, $cat_id, $cat_title, $cat_image)
//     {
//         $stmt = $conn->prepare("UPDATE categoryproduct SET NameCategory=:cat_title, ImageCategory=:cat_image  where IDCategory = :cat_id");
//         $stmt->execute(array(
//             ':cat_id' => $cat_id,
//             ':cat_title' => $cat_title,
//             ':cat_image' => $cat_image
//         ));
        
//     }
// }
