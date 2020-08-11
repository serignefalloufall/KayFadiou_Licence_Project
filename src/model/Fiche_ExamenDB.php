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
use src\entities\Fiche_Examen;

class Fiche_ExamenDB extends Model{

    //La base de données samane_Medecin est dans src/view/Medecin
    //Pour Medeciner importer la
    public function __construct(){
        parent::__construct();
    }

    public function getFich_Examen($id)
    {
        $sql = "SELECT *
                     FROM fiche_examen
                     WHERE Fiche_Examen.id = ".$id;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }


    public function addFich_Examen($fiche_examen){

        $sql = "INSERT INTO fiche_examen VALUES(null,
                '".$fiche_examen->getDateFiche()."'
                 ".$fiche_examen->getRemarque()."'
                  ''".$fiche_examen->getIdExam()."'
                  ".$fiche_examen->getIdfiche()."

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

    public function deleteFich_Examen($id){
        $sql = "DELETE FROM fiche_examen WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
//`remarque`, `id_exam`, `id_fiche`
    public function updateFich_Examen($fiche_examen){
        $sql = "UPDATE fiche_examen SET
               remarque='".$fiche_examen->getRemarque()."'
                 id_exam='".$fiche_examen->getIdExam()."'
                   id_fiche='".$fiche_examen->getIdFiche()."

						WHERE id = ".$fiche_examen->getid();

        if($this->db != null)
        {
            return $this->db->exec($sql);

        }else{
            return null;
        }
    }

    public function listeFiche_Examen(){
        $sql = "SELECT * FROM fiche_examen";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}