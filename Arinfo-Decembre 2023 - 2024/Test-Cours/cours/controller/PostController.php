<?php

require_once 'model/PostModel.php';

class PostController{
    private $postModel;

    //Metre en place le constructeur
    public function __construct($conn){
        $this->postModel = new PostModel($conn);
    }

    public function index() {
        //Récuperer le dernier post
        $lastestPost = $this->postModel->getLastestPost();

        $allPosts = $this->postModel->getAllPosts();

        //Afficher la vue des posts

        include './view/postview.php';
    }

    public function show($postId) {
        
            //Afficher un post spécifique
            $post = $this->postModel->getPostById($postId);
            if($post){
                //Aficher la vue du post
                include './view/readPost.php';
            }else {
                // le post n'a pas été trouver
                echo "Post Not Found.";
            }
    }
}