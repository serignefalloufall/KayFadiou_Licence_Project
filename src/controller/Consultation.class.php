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

    use src\entities\Consultation as ConsultationEntity;

    use src\model\ConsultationDB;
    use src\model\MedecinDB;
    use src\model\PatientDB;
    use src\model\RendezvousDB;
    use src\model\DossierDB;
    use src\model\PriseEnChargeDB;

    class Consultation extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Consultation
        //Ne Consultationer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("consultation/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("consultation/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $cdb = new ConsultationDB();

            $data['consultation'] = $cdb->getConsultation($id);
			
            return $this->view->load("consultation/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $cdb = new ConsultationDB();
			
            $data['consultations'] = $cdb->listeConsultation();
			
            return $this->view->load("consultation/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
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

			//Récupération des données qui viennent du formulaire view/Consultation/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                //print_r($_POST);
                extract($_POST);
                $data['ok'] = 0;

                if(!empty($libelle) && !empty($datec)) {
                    
                    $consultationObject = new ConsultationEntity();
                    $consultationObject->setLibelle($libelle);
                    $consultationObject->setDatec($datec);
                    $consultationObject->setIdmedecin($idmedecin);
                    $consultationObject->setIdpatient($idpatient);
                    $consultationObject->setIdrv($idrv);
                    $consultationObject->setIddossier($iddossier);
                    $consultationObject->setIdcharge($idcharge);

                    $ok = $cdb->addConsultation($consultationObject);
                    $data['ok'] = $ok;
                }
                return $this->view->load("consultation/add", $data);
            }else{
                return $this->view->load("consultation/add", $data);
            }
        }
		public function update(){
			//Instanciation du model
            $cdb = new ConsultationDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($valeur1) && !empty($valeur2)) {
                    $consultationObject = new ConsultationEntity();
                    $consultationObject->setId($id);
                    $consultationObject->setLibelle($libelle);
                    $consultationObject->setDatec($datec);
                    $consultationObject->setIdmedecin($idmedecin);
                    $consultationObject->setIdpatient($idpatient);
                    $consultationObject->setIdrv($idrv);
                    $consultationObject->setIddossier($iddossier);
                    $consultationObject->setIdcharge($idcharge);
                    $ok = $cdb->updateConsultation($consultationObject);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $cdb = new ConsultationDB();
			//Supression
			$cdb->deleteConsultation($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $cdb = new ConsultationDB();
			//Supression
			$data['Consultation'] = $cdb->getConsultation($id);
			//chargement de la vue edit.html
            return $this->view->load("Consultation/edit", $data);
        }
    }
?>