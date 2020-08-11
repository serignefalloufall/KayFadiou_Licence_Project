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
	//Ici Secretaire est une entite c'est a dire une classe
	use src\entities\Secretaire;
	  
    class SecretaireDB extends Model{
		
		//La base de données samane_Secretaire est dans src/view/Secretaire
		//Pour Secretaireer importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getSecretaire($ID)
        {
            $sql = "SELECT *
                     FROM secretaire
                     WHERE secretaire.id = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addSecretaire($secretaire){

			$sql = "INSERT INTO secretaire VALUES(null,
                     '".$secretaire->getIdservice()."', 
                     '".$secretaire->getIduser()."')";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deleteSecretaire($id){
			$sql = "DELETE FROM secretaire WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateSecretaire($secretaire){
			$sql = "UPDATE Secretaire SET 
                        idservice = '".$secretaire->getIdservice()."',
						iduser = '".$secretaire->getIduser()."'
						WHERE ID = ".$secretaire->getId();
			
			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}
		
		public function listeSecretaire(){
			$sql = "SELECT * FROM secretaire";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}