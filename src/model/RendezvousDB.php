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
	use src\entities\Rendezvous;
	  
    class RendezvousDB extends Model{
		
		//La base de données samane_Rendezvous est dans src/view/Rendezvous
		//Pour Rendezvouser importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getRendezvous($ID)
        {
            $sql = "SELECT *
                     FROM rendez_vous
                     WHERE rendez_vous.id = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addRendezvous($rendezvous){
            //$rendezvous = new Rendezvous();
			$sql = "INSERT INTO rendez_vous VALUES(null, 
            '".$rendezvous->getDater()."',
            '".$rendezvous->getHeure()."',
            '".$rendezvous->getMotif()."',
            '".$rendezvous->getIdpatient()."',
            '".$rendezvous->getIdmedecin()."',
            '".$rendezvous->getIdsecretaire()."'
            
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
		
		public function deleteRendezvous($id){
			$sql = "DELETE FROM rendez_vous WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateRendezvous($rendezvous){

			$sql = "UPDATE rendez_vous SET 
             dater = '".$rendezvous->getDater()."',
            heure = '".$rendezvous->getHeure()."',
            motif = '".$rendezvous->getMotif()."',
            idpatient = '".$rendezvous->getIdpatient()."',
            idmedecin = '".$rendezvous->getIdmedecin()."',
            idsecretaire = '".$rendezvous->getIdsecretaire()."'
			WHERE id = ".$rendezvous->getId();
			
			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}


		
		public function listeRendezvous(){
			$sql = "SELECT * FROM rendez_vous";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}