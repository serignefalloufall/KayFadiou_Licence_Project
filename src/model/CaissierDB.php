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
	use src\entities\Caissier;

    class CaissierDB extends Model{

		//La base de données samane_Medecin est dans src/view/Medecin
		//Pour Medeciner importer la
        public function __construct(){
            parent::__construct();
        }

        public function getCaissier($id)
        {
            $sql = "SELECT *
                     FROM caissier
                     WHERE caissier.id = ".$id;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }


        public function addCaissier($caissier){

			$sql = "INSERT INTO caissier VALUES(null,
                '".$caissier->getIdSer()."',
                '".$caissier->getIdUser()."'
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

		public function deleteCaissier($id){
			$sql = "DELETE FROM caissier WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function updateCaissier($caissier){

			$sql = "UPDATE caissier get
                id_ser='".$caissier->getIdSer()."',
                id_user='".$caissier->getIdUser()."',
						WHERE id = ".$caissier->getid();

			if($this->db != null)
			{
				return $this->db->exec($sql);

			}else{
				return null;
			}
		}

		public function listeCaissier(){
			$sql = "SELECT * FROM caissier";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}