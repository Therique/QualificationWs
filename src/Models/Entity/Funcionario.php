<?php
namespace App\Models\Entity;
/**
 * @Entity @Table(name="Funcionario")
 **/
class Funcionario {
    /**
     * @var int
     * @Id @Column(type="integer") 
     * @GeneratedValue
     */
    public $id;
    /**
     * @var string
     * @Column(type="string") 
     */
    public $name;
    /**
     * @var string
     * @Column(type="string") 
     */
    public $cpf;

    /**
     * @var string
     * @Column(type="string") 
     */
    public $rg;

    /**
     * @var string
     * @Column(type="string") 
     */
    public $orgaoExpeditor;

       /**
     * @var string
     * @Column(type="string") 
     */
    public $DataNascimento;


    /**
     * @var string
     * @Column(type="string") 
     */
    public $sexo;

    /**
     * @var string
     * @Column(type="string") 
     */
    public $nomeMae;

     /**
     * @var string
     * @Column(type="string") 
     */
    public $nomePai;

      /**
     * @var string
     * @Column(type="string") 
     */
    public $endereco;


      /**
     * @var string
     * @Column(type="string") 
     */
    public $cep;

      /**
     * @var string
     * @Column(type="string") 
     */
    public $estado;

      /**
     * @var string
     * @Column(type="string") 
     */
    public $cidade;

      /**
     * @var string
     * @Column(type="string") 
     */
    public $bairro;

      /**
     * @var string
     * @Column(type="string") 
     */
    public $email;

      /**
     * @var string
     * @Column(type="string") 
     */
    public $telefone;

      /**
     * @var string
     * @Column(type="string") 
     */
    public $celular;
    


    /**
     * Get the value of telefone
     *
     * @return  string
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @return  Funcionario()
     */ 
    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

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
     * @return  Funcionario()
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
       * @return  Funcionario()
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
    
    /**
     * Get the value of cpf
     *
     * @return  string
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return  Funcionario()
     */ 
    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of rg
     *
     * @return  string
     */ 
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @return  Funcionario()
     */ 
    public function setRg(string $rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get the value of orgaoExpeditor
     *
     * @return  string
     */ 
    public function getOrgaoExpeditor()
    {
        return $this->orgaoExpeditor;
    }

      /**
     * @return  Funcionario()
     */ 
    public function setOrgaoExpeditor(string $orgaoExpeditor)
    {
        $this->orgaoExpeditor = $orgaoExpeditor;

        return $this;
    }

    /**
     * Get the value of DataNascimento
     *
     * @return  string
     */ 
    public function getDataNascimento()
    {
        return $this->DataNascimento;
    }

    /**
     * @return  Funcionario()
     */ 
    public function setDataNascimento(string $DataNascimento)
    {
        $this->DataNascimento = $DataNascimento;

        return $this;
    }

    /**
     * Get the value of sexo
     *
     * @return  string
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @return  Funcionario()
     */ 
    public function setSexo(string $sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of nomeMae
     *
     * @return  string
     */ 
    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    /**
     * @return  Funcionario()
     */ 
    public function setNomeMae(string $nomeMae)
    {
        $this->nomeMae = $nomeMae;

        return $this;
    }

    /**
     * Get the value of nomePai
     *
     * @return  string
     */ 
    public function getNomePai()
    {
        return $this->nomePai;
    }

    /**
     * @return  Funcionario()
     */ 
    public function setNomePai(string $nomePai)
    {
        $this->nomePai = $nomePai;

        return $this;
    }

    /**
     * Get the value of endereco
     *
     * @return  string
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

     /**
     * @return  Funcionario()
     */ 
    public function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cep
     *
     * @return  string
     */ 
    public function getCep()
    {
        return $this->cep;
    }

     /**
     * @return  Funcionario()
     */ 
    public function setCep(string $cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of estado
     *
     * @return  string
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

     /**
     * @return  Funcionario()
     */ 
    public function setEstado(string $estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of cidade
     *
     * @return  string
     */ 
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @return  Funcionario()
     */ 
    public function setCidade(string $cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * @return  Funcionario()
     */ 
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @return  Funcionario()
     */ 
    public function setBairro(string $bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * @return  string Email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return  Funcionario()
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of celular
     *
     * @return  string
     */ 
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set the value of celular
     *
     * @param  string  $celular
     *
     * @return  self
     */ 
    public function setCelular(string $celular)
    {
        $this->celular = $celular;

        return $this;
    }
}