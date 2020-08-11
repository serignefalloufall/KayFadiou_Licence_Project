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
	//Ici Examen est une entite c'est a dire une classe
	use src\entities\Examen;
	  
    class ExamenDB extends Model{
		
		//La base de données samane_Examen est dans src/view/Examen
		//Pour Examener importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getExamen($id)
        {
            $sql = "SELECT *
                     FROM examen
                     WHERE examen.id = ".$id;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
   

        public function addExamen($examen){
           
			$sql = "INSERT INTO Examen VALUES(null, 
                '".$examen->getNomExamen()."'

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
		
		public function deleteExamen($id){
			$sql = "DELETE FROM examen WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}


		
		public function listeExamen(){
			$sql = "SELECT * FROM examen";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}