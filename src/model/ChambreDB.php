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
//Ici chambre est une entite c'est a dire une classe
use src\entities\Chambre;
	  
    class ChambreDB extends Model{
		
		//La base de données samane_chambre est dans src/view/chambre
		//Pour chambreer importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getchambre($ID)
        {
            $sql = "SELECT *
                     FROM chambre
                     WHERE chambre.ID = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }

		public function addChambre($chambre){
		 $sql = "INSERT INTO chambre VALUES(null, '".$chambre->getBatiment()."', '".$chambre->getEtage()."'
			, '".$chambre->getNbLit()."'
			, '".$chambre->getTypeCham()."'
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
		
		public function deleteChambre($id){
			$sql = "DELETE FROM chambre WHERE ID = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateChambre($chambre){


			$sql = "UPDATE chambre SET batiment = '".$chambre->getBatiment."',
						etage = '".$chambre->getEtage()."',
						nb_lit = '".$chambre->getNbLit()."',
						type_cham = '".$chambre->getTypeCham()."',
						WHERE ID = ".$chambre->getId();
			
			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}
		
		public function listechambre(){
			$sql = "SELECT * FROM chambre";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}