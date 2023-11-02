<?php
class Song
{
    private $id, $title, $author, $duration, $img, $user_id, $file;

    public function __construct($datos)
    {
        $this->id = $datos['id'];
        $this->title = $datos['title'];
        $this->author = $datos['author'];
        $this->duration = $datos['duration'];
        $this->img = $datos['img'];
        $this->user_id = $datos['user_id'];
        $this->file = $datos['file'];
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getFile()
    {
        return $this->file;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }
}
