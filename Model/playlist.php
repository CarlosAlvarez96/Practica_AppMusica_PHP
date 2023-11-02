<?php
class Playlist
{
    private $id, $name, $id_user, $songs;

    public function __construct($datos)
    {
        $this->id = $datos['id'];
        $this->name = $datos['name'];
        $this->id_user = $datos['id_user'];
        $this->songs = SongRepository::getSongsByPlId($datos['id']);
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUserId()
    {
        return $this->id_user;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setUserId($id_user)
    {
        $this->id_user = $id_user;
    }
    public function getSongs()
    {
        return $this->songs;
    }
}
