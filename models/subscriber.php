<?php
function subscriberExistsAlert() {
    echo '<script type="text/javascript">alert("Whoop, you are already on the list!");document.location="index.php"</script>';
}

function subscriberAddedAlert() {
    echo '<script type="text/javascript">alert("Thank you for signing up!");document.location="index.php"</script>';
}
function subscriberNotExistsAlert() {
    echo '<script type="text/javascript">alert("Subscriber does not exist");document.location="?controller=pages&action=unsubscribe"</script>';
}
function unsubscribedAlert() {
   echo '<script type="text/javascript">alert("You are successfully unsubscribed."); document.location="index.php"</script>';
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
        if(isset ($_POST['name']) && isset($_POST['email']) && $_POST['name'] != '' && $_POST['email'] !=''){
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }
        $db = Db::getInstance();
        $req1 = $db->prepare("SELECT name, email FROM subscriber WHERE email = :email");
        $req1->execute(array('email'=>$email));
        $data=$req1->fetch();
        if($data){     
        $req = $db->prepare('DELETE FROM subscriber WHERE email=:email');
        $req->execute(array('email'=>$email));
        return unsubscribedAlert();
        } else {
            return subscriberNotExistsAlert();
        }
       
                 
    }

}
?>


