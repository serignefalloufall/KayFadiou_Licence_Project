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

    use src\entities\Medecin as MedecinEntity;

    use src\model\MedecinDB;
    use src\model\UserDB;
    use src\model\ServiceDB;

    class Medecin extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Medecin
        //Ne Medeciner pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("medecin/index");
        }

        public function getid($id){
            $data['id'] = $id;

            return $this->view->load("medecin/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $mdb = new MedecinDB();

            $data['Medecin'] = $mdb->getMedecin($id);
			
            return $this->view->load("Medecin/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $mdb = new MedecinDB();
			
            $data['medecins'] = $mdb->listeMedecin();
			
            return $this->view->load("medecin/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $mdb = new MedecinDB();
            $udb = new UserDB();
            $data['users'] = $udb->listeUser();

            $sdb = new ServiceDB();
            $data['services'] = $sdb->listeService();
			//Récupération des données qui viennent du formulaire view/Medecin/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($nom_med) && !empty($prenom_med)) {

                    $medecinObject = new MedecinEntity();
                    $medecinObject->setNom($nom_med);
                    $medecinObject->setPrenom($prenom_med);
                    $medecinObject->setTel($tel_med);
                    $medecinObject->setAddr($addr_med);
                    $medecinObject->setIdser($id_ser);
                    $medecinObject->setIduser($id_user);


                    $ok = $mdb->addMedecin($medecinObject);
                    $data['ok'] = $ok;
                }
                return $this->view->load("medecin/add", $data);
            }else{
                return $this->view->load("medecin/add", $data);
            }
        }
		public function update(){
			//Instanciation du model
            $mdb = new MedecinDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($nom_med) && !empty($nom_med) && !empty($prenom_med)) {
                    $medecinObject = new MedecinEntity();
                    $medecinObject->setNom($nom_med);
                    $medecinObject->setPrenom($prenom_med);
                    $medecinObject->setTel($tel_med);
                    $medecinObject->setAddr($addr_med);
                    $medecinObject->setIdser($id_ser);
                    $medecinObject->setIduser($id_user);

                    $ok = $mdb->updateMedecin($medecinObject);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $mdb = new MedecinDB();
			//Supression
			$mdb->deleteMedecin($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $mdb = new MedecinDB();
			//Supression
			$data['medecin'] = $mdb->getMedecin($id);
			//chargement de la vue edit.html
            return $this->view->load("medecin/edit", $data);
        }
    }
?>