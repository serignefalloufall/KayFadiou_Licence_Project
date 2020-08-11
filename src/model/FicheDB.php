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
use src\entities\Fiche;

class FicheDB extends Model{

    //La base de données samane_Medecin est dans src/view/Medecin
    //Pour Medeciner importer la
    public function __construct(){
        parent::__construct();
    }

    public function getFiche($id)
    {
        $sql = "SELECT *
                     FROM fiche
                     WHERE Fiche.id = ".$id;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }


    public function addFiche($fiche){

        $sql = "INSERT INTO fiche VALUES(null,
                '".$fiche->getDateFiche()."'



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

    public function deleteFiche($id){
        $sql = "DELETE FROM fiche WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateFiche($fiche){
        $sql = "UPDATE fiche SET
               prix_Fiche='".$fiche->getDateFiche()."'
						WHERE id = ".$fiche->getid();

        if($this->db != null)
        {
            return $this->db->exec($sql);

        }else{
            return null;
        }
    }

    public function listeFiche(){
        $sql = "SELECT * FROM fiche";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}