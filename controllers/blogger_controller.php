<?php

include_once __DIR__ . '/../models/blogger.php';

class bloggerController {

    public function register() {

        try {
            if (isset($_POST['register'])) {
                $blogger = blogger::registerBlogger($_POST['f_name'], $_POST['l_name'], $_POST['email'], $_POST['username'], $_POST['password']);
            }
            require_once(__DIR__ . '/../views/blogger/register.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function login() {
        try {
            $showLoginWarning = FALSE;
            if (isset($_POST['submit'])) {
                $blogger = blogger::getBloggerIfValid($_POST['username'], $_POST['password']);
                if ($blogger !== NULL) {
                    $_SESSION['blogger_id'] = $blogger->getBloggerId();
                    echo '<script> location.replace("?controller=article&action=readAll"); </script>';
                } else {
                    $showLoginWarning = TRUE;
                }
            }
            require_once(__DIR__ . '/../views/blogger/login.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function error() {
        require_once(__DIR__ . '/../views/pages/error.php');
    }

    public function logout() {
        session_destroy();
        require_once(__DIR__ . '/../views/blogger/logout.php');
    }

}
