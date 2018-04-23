<?php

function bloggerAdded() {
    echo '<script type="text/javascript">alert("New blogger created");document.location="index.php?controller=article&action=readAll"</script>';
}

function bloggerExists() {
    echo '<script type="text/javascript">alert("Username already exists")</script>';
}

class Blogger {

    private $blogger_id;
    private $username;
    private $f_name;
    private $l_name;
    private $email;

    public function __construct($blogger_id, $username, $f_name, $l_name, $email) {
        $this->blogger_id = $blogger_id;
        $this->username = $username;
        $this->f_name = $f_name;
        $this->l_name = $l_name;
        $this->email = $email;
    }

    public static function getBloggerIfValid($username, $password) {
        $db = Db::getInstance();
        $result = $db->query("SELECT blogger_id, f_name, l_name, email, password FROM blogger where username='$username'");
        $rows = $result->fetchAll();
        $num_rows = count($rows);
        if ($num_rows == 1) {
            $blogger_info = $rows[0];
            $salt = 'hRfjire5fmIer42';
            $saltedPassword = $password . $salt;
            if (password_verify($saltedPassword, $blogger_info['password'])) {
                return new Blogger($blogger_info['blogger_id'], $username, $blogger_info['f_name'], $blogger_info['l_name'], $blogger_info['email']);
            }
        }
        return NULL;
    }

    public static function registerBlogger($f_name, $l_name, $email, $username, $password) {
        $salt = 'hRfjire5fmIer42';
        $saltedPassword = $password . $salt;
        $hashedPassword = (password_hash($saltedPassword, PASSWORD_DEFAULT));
        $db = Db::getInstance();
        $result = $db->query("SELECT * from blogger WHERE email = '$email' OR username = '$username'");
        $rows = $result->fetchAll();
        $num_rows = count($rows);
        if ($num_rows == 0) {
            $add = $db->prepare("INSERT INTO blogger (f_name, l_name, email, username, password) VALUES ('$f_name', '$l_name', '$email', '$username', '$hashedPassword')");
            $add->execute();
            return bloggerAdded();
        } else {
            return bloggerExists();
        }
    }

    public function logoutBlogger() {
        $_SESSION['blogger_id'] = FALSE;
        session_destroy();
    }

    public static function getBloggerById($blogger_id) {
        $db = Db::getInstance();
        $result = $db->query("SELECT f_name, l_name, username, email FROM blogger where blogger_id='$blogger_id'");
        $rows = $result->fetchAll();
        $num_rows = count($rows);
        if ($num_rows == 1) {
            $blogger_info = $rows[0];
            return new Blogger($blogger_id, $blogger_info['username'], $blogger_info['f_name'], $blogger_info['l_name'], $blogger_info['email']);
        } else {
            return NULL;
        }
    }

    public function getFname() {
        return $this->f_name;
    }

    public function getLname() {
        return $this->l_name;
    }

    public function getBloggerId() {
        return $this->blogger_id;
    }

}
