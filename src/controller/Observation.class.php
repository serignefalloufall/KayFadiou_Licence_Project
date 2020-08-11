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

    use src\entities\Observation as ObservationEntity;

    use src\model\ObservationDB;
    use src\model\FicheDB;

    class Observation extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Observation
        //Ne Observationer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("observation/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("observation/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $odb = new ObservationDB();

            $data['observation'] = $odb->getObservation($id);
			
            return $this->view->load("observation/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $odb = new ObservationDB();
			
            $data['observations'] = $odb->listeObservation();
			
            return $this->view->load("observation/liste", $data);
        }
	
	

public function add(){
    //Instanciation du model
    $odb = new ObservationDB();
    $fdb = new FicheDB();
    $data['fiches'] = $fdb->listeFiche();
    //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
    if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
    {
        extract($_POST);
        $data['ok'] = 0;
        if(!empty($poids) && !empty($taille)) {

            $observationObject = new ObservationEntity();
            $observationObject->setPoids($poids);
            $observationObject->setTaille($taille);
            $observationObject->setFrequence($frequence);
            $observationObject->setTemperature($temperature);
            $observationObject->setIdfiche($idfiche);
            $ok = $odb->addObservation($observationObject);
            $data['ok'] = $ok;
        }
        return $this->view->load("observation/add", $data);
    }else{
        return $this->view->load("observation/add",$data);
    }
}



    }
?>