<?php

session_start();
require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
        case 'user':
            showUser();
            break;
        case 'register':
            register($_POST);
            break;
        case 'login':
            login($_POST);
            break;
        case 'logout':
            logout();
            break;
        case 'addOffer':
            addOffer($_POST);
            break;
        case 'showProduct':
            showProduct($_GET['id']);
            break;
        case 'contactAnnouncer':
            contactAnnouncer($_POST, $_GET['offerId']);
            break;
        default:
            home();
    }
} else {
    home();
}

