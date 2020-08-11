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
	//Ici Service est une entite c'est a dire une classe
	use src\entities\Service;
	  
    class ServiceDB extends Model{
		
		//La base de données samane_Service est dans src/view/Service
		//Pour Serviceer importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getService($ID)
        {
            $sql = "SELECT *
                     FROM service
                     WHERE service.id_ser = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addService($service){

			$sql = "INSERT INTO service VALUES(null,
                    '".$service->getNomSer()."'
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
		
		public function deleteService($id){
			$sql = "DELETE FROM service WHERE id_ser = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateService($service){
			$sql = "UPDATE Service SET 
						nom_ser = '".$service->getNomSer()."'
						WHERE id_ser = ".$service->getIdSer();
			
			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}
		
		public function listeService(){
			$sql = "SELECT * FROM service";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}