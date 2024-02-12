<?php

require_once 'controller/PostController.php';

class Router {
    private $conn; //Déclarer la variable de connexion

    public function __construct($conn) {
        $this->conn = $conn;

    }

    public function routeRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] :'index';

        switch( $action ) {
            case 'index':
                $postController = new PostController($this->conn);// Utiliser $this->conn pour accéder a la connexion 
                $postController->index();
                break;
            case 'show':
                $postId = isset($_GET['post_id']) ? $_GET['post_id'] : null;
                $postController = new PostController($this->conn);// Utiliser $this->conn pour accéder a la connexion 
                $postController->show($postId);
                break;
            
           // case 'create':
            //     $postController = new PostController($this->conn);// Utiliser $this->conn pour accéder a la connexion 
             //    $postController->create();
              //   break;
 //
          //   case 'store': 
          //       $postController = new PostController($this->conn);// Utiliser $this->conn pour accéder a la connexion 
            //     $postController->store($_POST);
            //     break;

              //   default:

               //  break;
            
        }
    }
}


