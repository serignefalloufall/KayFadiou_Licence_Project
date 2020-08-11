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
	//Ici PriseEnCharge est une entite c'est a dire une classe
	use src\entities\PriseEnCharge;
	  
    class PriseEnChargeDB extends Model{
		
		//La base de données samane_PriseEnCharge est dans src/view/PriseEnCharge
		//Pour PriseEnChargeer importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getPriseEnCharge($ID)
        {
            $sql = "SELECT *
                     FROM prise_en_charge
                     WHERE prise_en_charge.id = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addPriseEnCharge($priseencharge){

			$sql = "INSERT INTO prise_en_charge VALUES(null, 
                 '".$priseencharge->getNomentreprise()."',
                 '".$priseencharge->getPourcentage()."')";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deletePriseEnCharge($id){
			$sql = "DELETE FROM prise_en_charge WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updatePriseEnCharge($priseencharge){
			$sql = "UPDATE prise_en_charge SET 
                        nomentreprise = '".$priseencharge->getNomentreprise()."',
						pourcentage = '".$priseencharge->getPourcentage()."'
						WHERE ID = ".$priseencharge->getId();
			
			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}
		
		public function listePriseEnCharge(){
			$sql = "SELECT * FROM prise_en_charge";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}