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

class DossierDB extends Model{

    //La base de données samane_Medecin est dans src/view/Medecin
    //Pour Medeciner importer la
    public function __construct(){
        parent::__construct();
    }

    public function getDossier($id)
    {
        $sql = "SELECT *
                     FROM dossier
                     WHERE Dossier.id = ".$id;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }


    public function addDossier($dossier){

        $sql = "INSERT INTO dossier VALUES(null,
                '".$dossier->getDateDos()."',
                '".$dossier->getRemarqueDos()."',
                 '".$dossier->getIdPat()."'

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
        $sql = "DELETE FROM dossier WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateDossier($dossier){

        $sql = "UPDATE dossier SET
                nom='".$dossier->getDateDos()."',
                prenom='".$dossier->getRemarqueDos()."',
                tel='".$dossier->getIdPat()."',
						WHERE id = ".$dossier->getid();

        if($this->db != null)
        {
            return $this->db->exec($sql);

        }else{
            return null;
        }
    }

    public function listeDossier(){
        $sql = "SELECT * FROM dossier";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}