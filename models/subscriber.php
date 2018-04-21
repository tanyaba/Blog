<?php

function subscriberExistsAlert() {
    echo '<script type="text/javascript">alert("Whoop, you are already on the list!");document.location="index.php"</script>';
}

function subscriberAddedAlert() {
    echo '<script type="text/javascript">alert("Thank you for signing up!");document.location="index.php"</script>';
}

class Subscriber {

    public $name;
    public $email;

    function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public static function addSubscriber($name, $email) {

        $db = Db::getInstance();
        $req = $db->query("SELECT name,email FROM subscriber WHERE email = '$email'");
        $rows = $req->fetchAll();
        $num_rows = count($rows);
        if ($num_rows == 0) {
            $add = $db->prepare("INSERT INTO subscriber (name, email) VALUES ('$name', '$email')");
            $add->execute();
            return subscriberAddedAlert();
        } else {
            return subscriberExistsAlert();
        }
    }
    
    public static function removeSubscriber(){
        $db = Db::getInstance();
        $req = $db->prepare('DELETE FROM subscriber WHERE name=:name AND email=:email');
        $req->bindParam(':name', $name);
        $req->bindParam(':email', $email);
        
        if(isset ($_POST['name']) && isset($_POST['email']) && $_POST['name'] != '' && $_POST['email'] !=''){
            $fname = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            $femail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }
        $name=$fname;
        $email=$femail;
        $req->execute();                
    }

}
