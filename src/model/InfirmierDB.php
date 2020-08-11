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
	//Ici Medecin est uneier entite c'est a dire une classe
	use src\entities\Infirmier;

    class InfirmierDB extends Model{

		//La base de données samane_Medecin est dans src/view/Medecin
		//Pour Medeciner importer la
        public function __construct(){
            parent::__construct();
        }

        public function getInfirmier($id)
        {
            $sql = "SELECT *
                     FROM infirmier
                     WHERE infirmier.id = ".$id;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }


        public function addInfirmier($infirmier){

			$sql = "INSERT INTO infirmier VALUES(null,
                '".$infirmier->getService()."',
                '".$infirmier->getUser()."'
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

		public function deleteInfirmier($id){
			$sql = "DELETE FROM infirmier WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function updateInfirmier($infirmier){

			$sql = "UPDATE infirmier get
                service='".$infirmier->getService()."',
                user='".$infirmier->getUser()."',
						WHERE id = ".$infirmier->getid();

			if($this->db != null)
			{
				return $this->db->exec($sql);

			}else{
				return null;
			}
		}

		public function listeInfirmier(){
			$sql = "SELECT * FROM infirmier";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}