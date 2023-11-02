<?php
class User
{
    private $id, $name, $pass, $rol;

    public function __construct($datos)
    {
        $this->id = $datos['id'];
        $this->name = $datos['name'];
        $this->pass = $datos['pass'];
        $this->rol = $datos['rol'];
    }
    public function getName()
    {
        return $this->name;
    }
    public function getRol()
    {
        return $this->rol;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($newId)
    {
        $this->id = $newId;
    }
    public function getPass()
    {
        return $this->pass;
    }
    public function setPass($newPass)
    {
        $this->pass = $newPass;
    }
}
