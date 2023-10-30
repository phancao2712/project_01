<?php
// require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/ModelLogin.php';

// class controllerLogin
// {
//     public static function login($user_email, $user_pass)
//     {
//         //appele a la fonction dans le modele 
//         $stmt = ModelLogin::verifyLogin(Model::$pdo);
//         $stmt->execute(array(
//             ':user_email' => $user_email,
//             ':user_pass' => $user_pass,
//         ));
//         $row =  $stmt->fetch(PDO::FETCH_ASSOC);
//         session_start();
//         if ($row == FALSE) {
//             $_SESSION['error'] = "Email hoặc tài khoản không đúng";
//             header('Location: ../view/login/login.php');
//         } else {
//             if ($row['type'] != 1) {
//                 $_SESSION['error'] = "Không có quyền truy cập";
//                 header('Location: ../view/login/login.php');
//             } else {
//                 $_SESSION["message"] = "Đăng nhập thành công";
//                 unset($_SESSION['error']);
//                 $_SESSION['username'] = $user_email;
//                 $_SESSION['page'] = "dashboard";
//                 header('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
//             }
//         }
//     }
// }
