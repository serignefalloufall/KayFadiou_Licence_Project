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

use src\entities\Patient as PatientEntity;

use src\model\PatientDB;

    class Patient extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Patient
        //Ne Patienter pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("patient/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("patient/get_id", $data);
        }

        public function get($id){
            //Instanciation du model
            $pdb = new PatientDB();

            $data['patient'] = $pdb->getPatient($id);

            return $this->view->load("patient/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $pdb = new PatientDB();

            $data['patients'] = $pdb->listePatient();

            return $this->view->load("welcome/secretaireinterface", $data);
        }


		public function add(){
			//Instanciation du model
            $pdb = new PatientDB();
            $data["patients"] = $pdb->listePatient();
			//Récupération des données qui viennent du formulaire view/Patient/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($nom_Pat) && !empty($prenom_pat)) {

                   $patientObject = new PatientEntity();
                    $patientObject->setNom_pat($nom_Pat);
                    $patientObject->setPrenom_pat($prenom_pat);
                    $patientObject->setAddr_pat($addr_pat);
                    $patientObject->setTel_pat($tel_pat);
                    $patientObject->setSexe_pat($sexe_pat);
                    $patientObject->setAge_pat($age_pat);
                    $patientObject->setProfession($profession);


                  $ok = $pdb->addPatient($patientObject);
                   // $ok = $tdb->addTest($testObject);
                    $data['ok'] = $ok;

                }
              return $this->view->load("patient/add", $data);
            }else{
                return $this->view->load("patient/add", $data);
            }
        }


        /*------------------Methode recherche POUR AJA DANS LE CONTROLLER--------------------=*/
        public function recherche(){
            $reponse=" # # # #  ";
            //Instanciation du model
            if(isset($_REQUEST["term"]))//"valider" est le name du champs submit du formulaire add.html
            {

                $tdb = new PatientDB();
                $reponse = $tdb->getRecherchet($_REQUEST["term"]);
            }
            echo $reponse;
        }




        //pour charger la photo
      /*  public function upload(){
            if(isset($_FILES['photo'])){


                $ok=0;
                $name=$_FILES['photo']['name'];
                $tmpname=$_FILES['photo']['tmp_name'];
                $size=intval($_FILES['photo']['size']);
                $destination = "public/image/patient";
                $extentionvalide= array('.JPG','.PNG','.jpg','.png');
                 $photoext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
                if($size<7000){
                    //print_r($_FILES);
                    move_uploaded_file($tmpname,"$destination/$name");
                    $ok=1;


                }

            }
            return $ok;
        }*/
		public function update(){
			//Instanciation du model
            $pdb = new PatientDB();
            $data["patients"] = $pdb->listePatient();
            if(isset($_POST['modifier'])){
               //print_r($_POST);
                extract($_POST);

                if(!empty($id) && !empty($nom_Pat) && !empty($prenom_pat)) {
                    $patientObject = new PatientEntity();
                    $patientObject->setId($id);
                    $patientObject->setNom_pat($nom_Pat);
                    $patientObject->setPrenom_pat($prenom_pat);
                    $patientObject->setAddr_pat($addr_pat);
                    $patientObject->setTel_pat($tel_pat);
                    $patientObject->setSexe_pat($sexe_pat);
                    $patientObject->setAge_pat($age_pat);
                    $patientObject->setProfession($profession);


                    $ok = $pdb->updatePatient($patientObject);


                   /* if($ok !=0){
                        if($this->upload()== 1){
                            $data['ok'] = $ok;

                        }
                    }*/

                }
            }
            //return $this->liste();//appel de la methode liste du controller
            return $this->view->load("welcome/secretaireinterface",$data);

        }
        public function delete($id){
            //Instanciation du model
            $pdb = new PatientDB();
			//Supression
			$pdb->deletePatient($id);
			//Retour vers la liste
            return $this->liste();
        }

		public function edit($id){

            //Instanciation du model
            $pdb = new PatientDB();
			//Supression
			$data['patient'] = $pdb->getPatient($id);
			//chargement de la vue edit.html
            return $this->view->load("patient/edit", $data);
        }
    }
?>