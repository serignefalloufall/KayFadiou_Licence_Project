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
	//Ici Rendezvous est une entite c'est a dire une classe
	use src\entities\Hospitalisation;
	  
    class HospitalisationDB extends Model{
		
		//La base de données samane_Rendezvous est dans src/view/Rendezvous
		//Pour Rendezvouser importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getHospitalisation($ID)
        {
            $sql = "SELECT *
                     FROM hospitalisation
                     WHERE hospitalisation.id = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }

        public function addHospitalisation($hospitalisation){
            //$rendezvous = new Rendezvous();
			$sql = "INSERT INTO hospitalisation VALUES(null,
            '".$hospitalisation->getPoids()."',
            '".$hospitalisation->getTaille()."',
            '".$hospitalisation->getPoul()."',
            '".$hospitalisation->getFrequence()."',
            '".$hospitalisation->getTemperature()."',
            '".$hospitalisation->getObservation()."',
            '".$hospitalisation->getMotif()."',
            '".$hospitalisation->getCaution()."',
            '".$hospitalisation->getIdLit()."',
            '".$hospitalisation->getIdFiche()."',
           '".$hospitalisation->getInfirmier()."'

            
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
		
		public function deleteHospitalisation($id){
			$sql = "DELETE FROM hospitalisation WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}

        public function updateHospitalisation($hospitalisation){
			$sql = "UPDATE hospitalisation SET
             poids = '".$hospitalisation->getPoids()."',
            taille = '".$hospitalisation->getTaille()."',
            poul = '".$hospitalisation->getPoul()."',
            frequence = '".$hospitalisation->getFrequence()."',
            temperature = '".$hospitalisation->getTemperature()."',
            observation = '".$hospitalisation->getObservation()."'
             motif = '".$hospitalisation->getMotif()."',
              caution = '".$hospitalisation->getCaution()."',
               id_lit = '".$hospitalisation->getIdLit()."',
                id_fiche = '".$hospitalisation->getIdFiche()."',
                 infirmier = '".$hospitalisation->getInfirmier()."'
			WHERE id = ".$hospitalisation->getId();
			
			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}
		
		public function listeHospitalisation(){
			$sql = "SELECT * FROM hospitalisation";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}