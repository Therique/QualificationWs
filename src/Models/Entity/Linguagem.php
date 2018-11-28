<?php
namespace App\Models\Entity;
/**
 * @Entity @Table(name="Linguagem")
 **/
class Linguagem {

      /**
     * @var int
     * @Id @Column(type="integer") 
     * @GeneratedValue
     */
public $id;
   /**s
     * @var string
     * @Column(type="string") 
     */
    public $name;
     /**
     * @var string
     * @Column(type="string") 
     */
public $descricao;
   /**
     * @var string
     * @Column(type="string") 
     */
    public $CaminhoImagem;

/**
 * Get the value of id
 *
 * @return  int
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @param  int  $id
 *
 * @return  self
 */ 
public function setId(int $id)
{
$this->id = $id;

return $this;
}

    /**
     * Get the value of name
     *
     * @return  int
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  int  $name
     *
     * @return  self
     */ 
    public function setName(int $name)
    {
        $this->name = $name;

        return $this;
    }

/**
 * Get the value of descricao
 *
 * @return  int
 */ 
public function getDescricao()
{
return $this->descricao;
}

/**
 * Set the value of descricao
 *
 * @param  int  $descricao
 *
 * @return  self
 */ 
public function setDescricao(int $descricao)
{
$this->descricao = $descricao;

return $this;
}

    /**
     * Get the value of CaminhoImagem
     *
     * @return  int
     */ 
    public function getCaminhoImagem()
    {
        return $this->CaminhoImagem;
    }

    /**
     * Set the value of CaminhoImagem
     *
     * @param  int  $CaminhoImagem
     *
     * @return  self
     */ 
    public function setCaminhoImagem(int $CaminhoImagem)
    {
        $this->CaminhoImagem = $CaminhoImagem;

        return $this;
    }
}