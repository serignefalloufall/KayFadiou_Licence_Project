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
    use libs\system\Controller;
use src\model\ConsultationDB;
use src\model\DossierDB;
use src\model\MedecinDB;
use src\model\PriseEnChargeDB;
use src\model\RendezvousDB;
use src\model\UserDB;
    use src\model\PatientDB;
    class Welcome extends Controller{

        public function __construct(){
            parent::__construct();
        }
        //methode ou url
        public function index(){
			//view
            return $this->view->load("welcome/login");
			
        }

        public function login(){

            if(isset($_SESSION)){
                session_unset();
                session_destroy();
                session_start();
            }
            $data['erreur']="";
            $userdb=new UserDB();
            $pdb=new PatientDB();
            $cdb = new ConsultationDB();
            $mdb = new MedecinDB();
            $data['medecins'] = $mdb->listeMedecin();

            $pdb = new PatientDB();
            $data['patients'] = $pdb->listePatient();

            $rdb = new RendezvousDB();
            $data['rendezvouss'] = $rdb->listeRendezvous();

            $ddb = new DossierDB();
            $data['dossiers'] = $ddb->listeDossier();

            $pcdb = new PriseEnChargeDB();
            $data['priseencharges'] = $pcdb->listePriseEnCharge();




            if(isset($_POST['connexion'])){
                $udb=new UserDB();
                if(!empty($_POST['username'])&& !empty($_POST['password'])){
                    extract($_POST);
                    $ok=$userdb->getConnexion($username,$password);
                    //$data['user']=$username;

                    if($ok!=null){
                        if($username === "secretaire"){
                            //print_r($ok);

                            session_start();
                            $donee=$_SESSION['username']=$ok[1];
                            $data['username'] = $donee;
                            $_SESSION['id']=$ok[0];
                            //print_r($_SESSION);
                            $data['patients'] = $pdb->listePatient();
                            return $this->view->load("welcome/secretaireinterface",$data);

                        }else if($username === "medecin"){
                            session_start();
                            $_SESSION['username']=$ok['username'];
                            $_SESSION['id']=$ok['id'];

                            $data['idmedecin']= $udb->getUserByUserName($username);
                            $data['consultations'] = $cdb->listeConsultation();
                            return $this->view->load("welcome/medecininterface",$data);

                        }else if($username === "admin"){

                            return $this->view->load("welcome/admininterface",$data);
                        }
                    }else{
                        $data['erreur']="username ou password incorrect";
                    }







                }
            }
          return $this->view->load("welcome/login", $data);

        }


        public function deconnecter(){
            //view
            session_start();
            session_unset();
            session_destroy();

            return $this->view->load("welcome/login");

        }





    }
?>