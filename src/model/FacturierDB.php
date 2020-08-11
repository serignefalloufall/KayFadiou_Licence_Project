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
	use src\entities\Facturier;

    class FacturierDB extends Model{

		//La base de données samane_Medecin est dans src/view/Medecin
		//Pour Medeciner importer la
        public function __construct(){
            parent::__construct();
        }

        public function getFacturier($id)
        {
            $sql = "SELECT *
                     FROM facturier
                     WHERE facturier.id = ".$id;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }


        public function addFacturier($facturier){

			$sql = "INSERT INTO facturier VALUES(null,
                '".$facturier->getIdSer()."',
                '".$facturier->getIdUser()."'
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

		public function deleteFacturier($id){
			$sql = "DELETE FROM facturier WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function updateFacturier($facturier){

			$sql = "UPDATE facturier get
                id_ser='".$facturier->getIdSer()."',
                id_user='".$facturier->getIdUser()."',
						WHERE id = ".$facturier->getid();

			if($this->db != null)
			{
				return $this->db->exec($sql);

			}else{
				return null;
			}
		}

		public function listeFacturier(){
			$sql = "SELECT * FROM facturier";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}