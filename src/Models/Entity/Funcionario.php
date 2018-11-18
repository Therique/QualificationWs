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
     * @var date
     * @Column(type="date") 
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
     * @var string
     * @Column(type="string") 
     */
    public $ceular;


 

   




    
}