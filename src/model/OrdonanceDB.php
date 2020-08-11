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
	//Ici Ordonance est une entite c'est a dire une classe
	use src\entities\Ordonance;
	  
    class OrdonanceDB extends Model{
		
		//La base de données samane_Ordonance est dans src/view/Ordonance
		//Pour Ordonanceer importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getOrdonance($ID)
        {
            $sql = "SELECT *
                     FROM ordonance
                     WHERE ordonance.id = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addOrdonance($ordonance){

			$sql = "INSERT INTO ordonance VALUES(null, 
            '".$ordonance->getTitre()."', 
            '".$ordonance->getDateo()."',
            '".$ordonance->getObservation()."',
            '".$ordonance->getTraitement()."',
            '".$ordonance->getIdconsultation()."'
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
		
		public function deleteOrdonance($id){
			$sql = "DELETE FROM ordonance WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateOrdonance($ordonance){

			$sql = "UPDATE ordonance SET 
            titre='".$ordonance->getTitre()."', 
            dateo='".$ordonance->getDateo()."',
            observation='".$ordonance->getObservation()."',
            traitement='".$ordonance->getTraitement()."',
            idconsultation='".$ordonance->getIdconsultation()."'
						WHERE id = ".$ordonance->getId();
			
			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}
		
		public function listeOrdonance(){
			$sql = "SELECT * FROM ordonance";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}