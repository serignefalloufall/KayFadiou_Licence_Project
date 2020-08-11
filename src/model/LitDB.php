<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
namespace src\model;

use libs\system\Model;
//Ici Medecin est une entite c'est a dire une classe
use src\entities\Dossier;
use src\entities\Lit;

class LitDB extends Model{

    //La base de données samane_Medecin est dans src/view/Medecin
    //Pour Medeciner importer la
    public function __construct(){
        parent::__construct();
    }

    public function getLit($id)
    {
        $sql = "SELECT *
                     FROM lit
                     WHERE Lit.id = ".$id;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }


    public function addLit($lit){

        $sql = "INSERT INTO lit VALUES(null,
                '".$lit->getPrixLit()."',
                '".$lit->getIdCham()."'


                )";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteDossier($id){
        $sql = "DELETE FROM lit WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateLit($lit){
        $lit=new Lit();
        $sql = "UPDATE lit SET
               prix_lit='".$lit->getPrixLit()."',
                id_cham='".$lit->getIdCham()."'

						WHERE id = ".$lit->getid();

        if($this->db != null)
        {
            return $this->db->exec($sql);

        }else{
            return null;
        }
    }

    public function listeLit(){
        $sql = "SELECT * FROM lit";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}