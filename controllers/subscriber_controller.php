<?php

include_once __DIR__ . '/../models/subscriber.php';

class subscriberController {

    public $subscriber;

    public function addSubscriber() {
        try {
            if (isset($_POST['subscribe'])) {
                $subscriber = subscriber::addSubscriber($_POST['subscriber_name'], $_POST['subscriber_email']);
            }
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function removeSubscriber() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            return call('pages', 'unsubscribe');
        } else {
            try {
                Subscriber::removeSubscriber();
                //header("Location: " . $_SERVER['REQUEST_URI']);
                //exit();
            } catch (Exception $ex) {
                return call('pages', 'error');
            }
        }
    }

}

?>
