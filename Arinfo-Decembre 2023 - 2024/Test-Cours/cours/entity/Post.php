<?php

class Post{
    //1.Mise en place des attributs constitutif de la class post
    private $id;
    private $title;
    private $abstract;
    private $image; 
    private $content;
    private $createdAt;

    //2.Mise en place du constructor
    public function __construct($title, $abstract, $image, $content, $createdAt){
        $this->title = $title;
        $this->abstract = $abstract;
        $this->image = $image;
        $this->content = $content;
        $this->createdAt = $createdAt;
    }

    //3. Mise en place des Getters et Setters
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        return $this->title;
    }
    public function getAbstract(){
        return $this->abstract;
    }
    public function setAbstract($abstract){
        return $this->abstract;
    }
    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        return $this->image;
    }
    public function getContent(){
        return $this->content;
    }
    public function setContent($content){
        return $this->content;
    }

    public function getCreatedAt(){
        return $this->createdAt;
    }
    public function setCreatedAt($createdAt){
        return $this->createdAt;
    }
}

