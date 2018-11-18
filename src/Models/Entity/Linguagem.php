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

public $nameLiguagem;
/**
 * @var string
 * @Column(type="string") 
 */

/**
     * @return int ide
     */
    public function getId(){
        return $this->id;
    }
    /**
     * @return string name
     */
    public function genameLiguageme(){
        return $this->nameLiguagem;
    }
 /**
     * @return Linguagem()
     */
    public function setName($name){
        $this->name = $name;
        return $this;  
    }
 

}