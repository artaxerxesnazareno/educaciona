<?php

namespace Artaxerxes\Educaciona\app\models;

class User
{
    private $id;
    private $name;
    private $email;
    private $password;
    /**
     * @param $name
     * @param $email
     * @param $password
     */
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    private $cursos = [];

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function getCursos(): array
    {
        return $this->cursos;
    }

    /**
     * @param array $cursos
     */
    public function setCursos(array $cursos): void
    {
        $this->cursos = $cursos;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

public function addCurso(Curso $curso){

}
public function removeCurso(Curso $curso){

}
}