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

    use src\entities\Infirmier as InfirmierEntity;

    use src\model\InfirmierDB;
    use src\model\UserDB;
    use src\model\ServiceDB;

    class Infirmier extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Medecin
        //Ne Medeciner pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("infirmier/index");
        }

        public function getid($id){
            $data['id'] = $id;

            return $this->view->load("infirmier/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $idb = new InfirmierDB();

            $data['Medecin'] = $idb->getInfirmier($id);
			
            return $this->view->load("infirmier/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $idb = new InfirmierDB();
			
            $data['infirmiers'] = $idb->listeInfirmier();
			
            return $this->view->load("infirmier/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $idb = new InfirmierDB();
            $udb = new UserDB();
            $data['users'] = $udb->listeUser();

            $sdb = new ServiceDB();
            $data['services'] = $sdb->listeService();
			//Récupération des données qui viennent du formulaire view/Medecin/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($service) && !empty($user)) {

                    $infirmierObject = new InfirmierEntity();
                    $infirmierObject->setService($service);
                    $infirmierObject->setUser($user);
                    $ok = $idb->addInfirmier($infirmierObject);
                    $data['ok'] = $ok;
                }
                return $this->view->load("infirmier/add", $data);
            }else{
                return $this->view->load("infirmier/add", $data);
            }
        }
		public function update(){
			//Instanciation du model
            $idb = new InfirmierDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($service) && !empty($user)) {
                    $infirmierObject = new InfirmierEntity();
                    $infirmierObject->setService($service);
                    $infirmierObject->setUser($user);


                    $ok = $idb->updateInfirmier($infirmierObject);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $idb = new InfirmierDB();
			//Supression
			$idb->deleteInfirmier($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $idb = new InfirmierDB();
			//Supression
			$data['infirmier'] = $idb->getInfirmier($id);
			//chargement de la vue edit.html
            return $this->view->load("infirmier/edit", $data);
        }
    }
?>