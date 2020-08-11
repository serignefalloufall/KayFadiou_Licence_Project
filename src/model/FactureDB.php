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
	use src\entities\Facture;

    class FactureDB extends Model{

		//La base de données samane_Medecin est dans src/view/Medecin
		//Pour Medeciner importer la
        public function __construct(){
            parent::__construct();
        }

        public function getFacture($id)
        {
            $sql = "SELECT *
                     FROM facture
                     WHERE facture.id = ".$id;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }


        public function addFacture($facture){

			$sql = "INSERT INTO facture VALUES(null,
                '".$facture->getLibelleFacture()."',
                '".$facture->getDateFacture()."',
                 '".$facture->getIdCons()."',
                   '".$facture->getIdFac()."'
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

		public function deleteFacture($id){
			$sql = "DELETE FROM facture WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function updateFacture($facture){

			$sql = "UPDATE facture get
                libelle_facture='".$facture->getLibelleFacture()."',
                date_facture='".$facture->getDateFacture()."',
                  id_cons='".$facture->getIdCons()."',
                    id_fac='".$facture->getIdFac()."',
						WHERE id = ".$facture->getid();

			if($this->db != null)
			{
				return $this->db->exec($sql);

			}else{
				return null;
			}
		}

		public function listeFacture(){
			$sql = "SELECT * FROM facture";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}