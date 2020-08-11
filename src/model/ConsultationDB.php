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
	//Ici Consultation est une entite c'est a dire une classe
	use src\entities\Consultation;
	  
    class ConsultationDB extends Model{
		
		//La base de données samane_Consultation est dans src/view/Consultation
		//Pour Consultationer importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getConsultation($ID)
        {
            $sql = "SELECT *
                     FROM consultation
                     WHERE consultation.id = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addConsultation($consultation){

			$sql = "INSERT INTO consultation VALUES(null,
                '".$consultation->getLibelle()."', 
                '".$consultation->getDatec()."', 
                '".$consultation->getIdmedecin()."',
                 '".$consultation->getIdpatient()."',
                  '".$consultation->getIdrv()."',
                   '".$consultation->getIddossier()."',
                    '".$consultation->getIdcharge()."'
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
		
		public function deleteConsultation($id){
			$sql = "DELETE FROM consultation WHERE ID = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateConsultation($consultation){
			$sql = "UPDATE consultation SET 
                 libelle='".$consultation->getLibelle()."', 
                datec='".$consultation->getDatec()."', 
                idmedecin='".$consultation->getIdmedecin()."',
                 idpatient='".$consultation->getIdpatient()."',
                  idrv='".$consultation->getIdrv()."',
                  iddossier='".$consultation->getIddossier()."',
                    idcharge='".$consultation->getIdcharge()."'
        
        
						WHERE ID = ".$consultation->getId();

			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}
		
		public function listeConsultation(){
			$sql = "SELECT * FROM consultation";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}