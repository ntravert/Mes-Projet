<?php

require_once __DIR__ . '/../entity/Post.php';

class PostModel {
     private $conn;

     public function __construct($conn) {
        $this->conn = $conn;
     }

     public function createPost(Post $post) {
        // Inserer un nouveau post dans la base de donnée
        $stmt = $this->conn->prepare("INSERT INTO post(title, abstract,image,content,createdAt) VALUES(?,?,?,?)");
        $stmt->execute([$post->getTitle(), $post->getAbstract(), $post->getImage(), $post->getContent(), $post->getCreatedAt()]);
        return $this->conn->lastInsertID();
     }

     public function getLastestPost(){
        //Récuperer le dernier post
        $stmt = $this->conn->query("SELECT * FROM post ORDER BY createdAt DESC LIMIT 1");
        $lastestPost = $stmt->fetch(PDO::FETCH_ASSOC);
        return $lastestPost;
     }

     public function getPostById($postId) {
     // Récuperer un post par son ID
     $stmt = $this->conn->prepare("SELECT * FROM post WHERE id = ?");
     $stmt->execute([$postId]);
     return $stmt->fetch(PDO::FETCH_ASSOC);
     }

     public function getAllPosts(){
        //Récuperer tous les post
        $stmt = $this->conn->query("SELECT * FROM post ORDER BY createdAt DESC");
        $allposts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $allposts;
     }

     
     
    
}