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
	//Ici Observation est une entite c'est a dire une classe
	use src\entities\Observation;
	  
    class ObservationDB extends Model{
		
		//La base de données samane_Observation est dans src/view/Observation
		//Pour Observationer importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getObservation($ID)
        {
            $sql = "SELECT *
                     FROM observation
                     WHERE observation.id = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }

        public function addObservation($observation){
           // $observation = new Observation();
			$sql = "INSERT INTO observation VALUES(null, 
            '".$observation->getPoids()."',
            '".$observation->getTaille()."',
            '".$observation->getPouls()."',
            '".$observation->getFrequence()."',
            '".$observation->getTemperature()."',
            '".$observation->getIdfiche()."'
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
		

		public function listeObservation(){
			$sql = "SELECT * FROM observation";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}