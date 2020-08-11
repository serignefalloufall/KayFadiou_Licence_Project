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
	//Ici User est une entite c'est a dire une classe
	use src\entities\User;
	  
    class UserDB extends Model{
		
		//La base de données samane_User est dans src/view/User
		//Pour Userer importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getUser($ID)
        {
            $sql = "SELECT *
                     FROM user
                     WHERE User.ID = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
        public function getUserByUserName($username)
        {
            $sql = "SELECT *
                     FROM user
                     WHERE user.username = '$username'";
            if($this->db != null)
			{
                return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }

        public function getConnexion($login,$password)
        {
            $sql = "SELECT *
                     FROM user
                     WHERE user.username ='$login' and user.password ='$password' ";
            if($this->db != null)
            {
                return $this->db->query($sql)->fetch();
                //return $sql;
            }else{
                return null;
            }
        }
        public function listeUser(){
            $sql = "SELECT * FROM user";

            if($this->db != null)
                return $this->db->query($sql)->fetchAll();
            else
                return null;
        }

	}