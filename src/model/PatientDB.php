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
//Ici Patient est une entite c'est a dire une classe
use src\entities\Patient;
	  
    class PatientDB extends Model{
		
		//La base de données samane_Patient est dans src/view/Patient
		//Pour Patienter importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getPatient($ID)
        {
            $sql = "SELECT *
                     FROM patient
                     WHERE patient.ID = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }

		public function addPatient($patient){
			
			 $sql = "INSERT INTO patient VALUES(null,
            '".$patient->getNom_pat()."', 
            '".$patient->getPrenom_pat()."',
			'".$patient->getAddr_pat()."',
			'".$patient->getTel_pat()."',
			'".$patient->getSexe_pat()."',
			'".$patient->getAge_pat()."',
			'".$patient->getProfession()."'
			)";
			//echo mysqli_errno($sql);
			
			if($this->db != null)
			{ 
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deletePatient($id){
			$sql = "DELETE FROM patient WHERE ID = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
        public function updatePatient($patient){
            $sql = "UPDATE patient SET 
                        nom_Pat = '".$patient->getNom_pat()."',
						prenom_pat = '".$patient->getPrenom_pat()."',
						addr_pat = '".$patient->getAddr_pat()."',
						tel_pat = '".$patient->getTel_pat()."',
						sexe_pat = '".$patient->getSexe_pat()."',
						age_pat = '".$patient->getAge_pat()."',
						profession = '".$patient->getProfession()."'
				
						WHERE id = ".$patient->getId();

            if($this->db != null)
            {
                return $this->db->exec($sql);

            }else{
                return null;
            }
        }

		
		public function listePatient(){
			$sql = "SELECT * FROM patient";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}

        //DANS LE MODEEL Methode getRecherchet
        /*------------------..............--------------------=*/
        public function getRecherchet($term){

            $sql = "SELECT * FROM patient WHERE nom_Pat LIKE '".$term."%' ";
            if($this->db != null)
            {
                return $this->db->query($sql)->fetch();
            }else{
                return null;
            }
        }


	}



