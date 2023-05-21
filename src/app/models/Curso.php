<?php

namespace Artaxerxes\Educaciona\app\models;

class Curso
{
    private $id;
    private $nome;
    private $descricao;

    private $nivel;

    private $capa;



    private $progresso;

    private $data_inicio;

    private $categoria_id;
    private $categoria_nome;

    /**
     * @var Aula[]
     */
    private $aulas = array();


    private $alunos = [];

    /**
     * @param $nome
     * @param $descricao
     */
    public function __construct($nome, $descricao)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getCategoriaNome()
    {
        return $this->categoria_nome;
    }

    /**
     * @param mixed $categoria_nome
     */
    public function setCategoriaNome($categoria_nome): void
    {
        $this->categoria_nome = $categoria_nome;
    }

    /**
     * @return mixed
     */
    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    /**
     * @param mixed $categoria_id
     */
    public function setCategoriaId($categoria_id): void
    {
        $this->categoria_id = $categoria_id;
    }

    /**
     * @return mixed
     */
    public function getProgresso()
    {
        return $this->progresso;
    }

    /**
     * @param mixed $progresso
     */
    public function setProgresso($progresso): void
    {
        $this->progresso = $progresso;
    }

    /**
     * @return mixed
     */
    public function getDataInicio()
    {
        return $this->data_inicio;
    }

    /**
     * @param mixed $data_inicio
     */
    public function setDataInicio($data_inicio): void
    {
        $this->data_inicio = $data_inicio;
    }


    /**
     * @return mixed
     */
    public function getCapa()
    {
        return $this->capa;
    }

    /**
     * @param mixed $capa
     */
    public function setCapa($capa): void
    {
        $this->capa = $capa;
    }



    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel): void
    {
        $this->nivel = $nivel;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return array
     */
    public function getAulas(): array
    {

        return $this->aulas;
    }

    /**
     * @param array $aulas
     */
    public function setAulas(array $aulas): void
    {
        $this->aulas = $aulas;
    }

    /**
     * @return array
     */
    public function getAlunos(): array
    {
        return $this->alunos;
    }

    /**
     * @param array $alunos
     */
    public function setAlunos(array $alunos): void
    {
        $this->alunos = $alunos;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function addAula($chave, Aula $aula)
    {
        $this->aulas [$chave] = $aula;
    }

    public function removeAula(Aula $aula)
    {

    }

    public function getFirstAula()
    {
        $array = array_values($this->aulas);
        return reset($array);
    }
public function getAulaById($id)
    {
      return  $this->aulas[$id];
    }


}