<?php

include_once __DIR__ . '/../models/subscriber.php';

class subscriberController {
    
    public $subscriber; 
    
    public function addSubscriber() {
        if(isset($_POST['subscribe'])) {
       $subscriber = subscriber::addSubscriber($_POST['subscriber_name'], $_POST['subscriber_email']);
        }
    }
    
    public function removeSubscriber(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            return call('pages', 'unsubscribe');
        } else {
            Subscriber::removeSubscriber();
            call('pages', 'Homepage');
            
        }        
    }
}
?>
