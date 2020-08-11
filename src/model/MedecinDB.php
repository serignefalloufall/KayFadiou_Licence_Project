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
	use src\entities\Medecin;
	  
    class MedecinDB extends Model{
		
		//La base de données samane_Medecin est dans src/view/Medecin
		//Pour Medeciner importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getMedecin($id)
        {
            $sql = "SELECT *
                     FROM medecin
                     WHERE medecin.id = ".$id;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
   

        public function addMedecin($medecin){
           
			$sql = "INSERT INTO medecin VALUES(null, 
                '".$medecin->getNom()."',
                '".$medecin->getPrenom()."',
                 '".$medecin->getTel()."',
                  '".$medecin->getAddr()."',
                   '".$medecin->getIdser()."',
                    '".$medecin->getIduser()."'
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
		
		public function deleteMedecin($id){
			$sql = "DELETE FROM medecin WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function updateMedecin($medecin){

			$sql = "UPDATE medecin get 
                nom='".$medecin->getNom()."',
                prenom='".$medecin->getPrenom()."',
                tel='".$medecin->getTel()."',
                  addr='".$medecin->getAddr()."',
                   idser='".$medecin->getIdser()."',
                    iduser='".$medecin->getIduser()."'
						WHERE id = ".$medecin->getid();
			
			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}
		
		public function listeMedecin(){
			$sql = "SELECT * FROM medecin";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}