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

    use src\entities\Secretaire as SecretaireEntity;

    use src\model\SecretaireDB;

    class Secretaire extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Secretaire
        //Ne Secretaireer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("secretaire/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("secretaire/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $sdb = new secretaireDB();

            $data['secretaire'] = $sdb->getSecretaire($id);
			
            return $this->view->load("secretaire/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $sdb = new SecretaireDB();
			
            $data['secretaires'] = $sdb->listeSecretaire();
			
            return $this->view->load("secretaire/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $sdb = new secretaireDB();
			//Récupération des données qui viennent du formulaire view/Secretaire/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($idservice) && !empty($iduser)) {
                    
                    $secretaireObject = new SecretaireEntity();
                    $secretaireObject->setIdservice($idservice);
                    $secretaireObject->setIduser($iduser);

                    $ok = $sdb->addSecretaire($secretaireObject);
                    $data['ok'] = $ok;
                }
                return $this->view->load("secretaire/add", $data);
            }else{
                return $this->view->load("secretaire/add");
            }
        }
		public function update(){
			//Instanciation du model
            $sdb = new SecretaireDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($idservice) && !empty($iduser)) {
                    $secretaireObject = new SecretaireEntity();
                    $secretaireObject->setId($id);
                    $secretaireObject->setIdservice($idservice);
                    $secretaireObject->setIduser($iduser);
                    $ok = $sdb->updateSecretaire($secretaireObject);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $sdb = new SecretaireDB();
			//Supression
			$sdb->deleteSecretaire($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $sdb = new SecretaireDB();
			//Supression
			$data['secretaire'] = $sdb->getSecretaire($id);
			//chargement de la vue edit.html
            return $this->view->load("secretaire/edit", $data);
        }
    }
?>