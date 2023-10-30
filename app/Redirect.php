<?php
class Redirect
{
    static public function to($page)
    {
        $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';
        $redirectUrl = $protocol . '://' . $page;



        if ($_SERVER['REQUEST_URI'] != $page) {
            // Xóa đường dẫn trước đó
            header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
            header('Cache-Control: post-check=0, pre-check=0', false);
            header('Pragma: no-cache');

            // Chuyển hướng đến đường dẫn mới
            header("Location: ".$redirectUrl);
            exit();
        }
    }
}

