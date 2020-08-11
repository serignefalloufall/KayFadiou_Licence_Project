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

    use src\entities\Hospitalisation as HospitalisationEntity;

    use src\model\HospitalisationDB;
    use src\model\LitDB;
    use src\model\FicheDB;
    use src\model\InfirmierDB;

    class Hospitalisation extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Hospitalisation
        //Ne Hospitalisationer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("hospitalisation/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("hospitalisation/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $hdb = new HospitalisationDB();

            $data['hospitalisation'] = $hdb->getHospitalisation($id);
			
            return $this->view->load("hospitalisation/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $hdb = new HospitalisationDB();
			
            $data['hospitalisations'] = $hdb->listeHospitalisation();
			
            return $this->view->load("hospitalisation/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $hdb = new HospitalisationDB();

            $ldb = new LitDB();
            $data['lits'] = $ldb->listeLit();

            $fdb = new FicheDB();
            $data['fiches'] = $fdb->listeFiche ();

            $idb = new InfirmierDB();
            $data['infirmiers'] = $idb->listeInfirmier();

			//Récupération des données qui viennent du formulaire view/Hospitalisation/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
//print_r($_POST);
                if(!empty($poids) && !empty($taille)) {
                    //`id`, `poids`, `taille`, `poul`, `frequence`, `temperature`, `observation`, `motif`, `caution`, `id_lit`, `id_fiche`, `infirmier`

                    $hospitalisationObject = new HospitalisationEntity();
                    $hospitalisationObject->setPoids($poids);
                    $hospitalisationObject->setTaille($taille);
                    $hospitalisationObject->setPoul($poul);
                    $hospitalisationObject->setFrequence($frequence);
                    $hospitalisationObject->setTemperature($temperature);
                    $hospitalisationObject->setObservation($observation);
                    $hospitalisationObject->setMotif($motif);
                    $hospitalisationObject->setCaution($caution);
                    $hospitalisationObject->setIdLit($id_lit);
                    $hospitalisationObject->setIdFiche($id_fiche);
                    $hospitalisationObject->setInfirmier($infirmier);

                   $ok = $hdb->addHospitalisation($hospitalisationObject);
                    $data['ok'] = $ok;
                }
              return $this->view->load("hospitalisation/add", $data);
            }else{
               return $this->view->load("hospitalisation/add", $data);
            }
        }
		public function update(){
			//Instanciation du model
            $hdb = new HospitalisationDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($poids) && !empty($taille)) {
                        $hospitalisationObject = new HospitalisationEntity();
                        $hospitalisationObject->setId($id);
                        $hospitalisationObject->setPoids($poids);
                        $hospitalisationObject->setTaille($taille);
                        $hospitalisationObject->setPoul($poul);
                        $hospitalisationObject->setFrequencet($frequence);
                        $hospitalisationObject->setTemperature($temperature);
                        $hospitalisationObject->setObservation($observation);
                        $hospitalisationObject->setMotif($motif);
                        $hospitalisationObject->setCaution($caution);
                        $hospitalisationObject->setIdLit($id_lit);
                        $hospitalisationObject->setIdFiche($id_fiche);
                        $hospitalisationObject->setInfirmier($infirmier);
                    $ok = $hdb->updateHospitalisation($hospitalisationObject);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $hdb = new HospitalisationDB();
			//Supression
			$hdb->deleteHospitalisation($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $hdb = new HospitalisationDB();
			//Supression
			$data['hospitalisation'] = $hdb->getHospitalisation($id);
			//chargement de la vue edit.html
            return $this->view->load("hospitalisation/edit", $data);
        }
    }
?>