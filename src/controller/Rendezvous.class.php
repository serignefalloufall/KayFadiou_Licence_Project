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

    use src\entities\Rendezvous as RendezvousEntity;

    use src\model\RendezvousDB;
    use src\model\PatientDB;
    use src\model\MedecinDB;
    use src\model\SecretaireDB;

    class Rendezvous extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Rendezvous
        //Ne Rendezvouser pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("rendezvous/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("rendezvous/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $rdb = new RendezvousDB();

            $data['rendezvous'] = $rdb->getRendezvous($id);
			
            return $this->view->load("rendezvous/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $rdb = new RendezvousDB();
			
            $data['rendezvouss'] = $rdb->listeRendezvous();
			
            return $this->view->load("rendezvous/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $rdb = new RendezvousDB();

            $pdb = new PatientDB();
            $data['patients'] = $pdb->listePatient();

            $mdb = new MedecinDB();
            $data['medecins'] = $mdb->listeMedecin();

            $sdb = new SecretaireDB();
            $data['secretaires'] = $sdb->listeSecretaire();

			//Récupération des données qui viennent du formulaire view/Rendezvous/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
//print_r($_POST);
                if(!empty($dater) && !empty($heure)) {

                    $rendezvousObject = new RendezvousEntity();
                    $rendezvousObject->setDater($dater);
                    $rendezvousObject->setHeure($heure);
                     $rendezvousObject->setMotif($motif);
                      $rendezvousObject->setIdpatient($idpatient);
                       $rendezvousObject->setIdmedecin($idmedecin);
                        $rendezvousObject->setIdsecretaire($idsecretaire);

                   $ok = $rdb->addRendezvous($rendezvousObject);
                    $data['ok'] = $ok;
                }
              return $this->view->load("rendezvous/add", $data);
            }else{
               return $this->view->load("rendezvous/add", $data);
            }
        }
		public function update(){
			//Instanciation du model
            $rdb = new RendezvousDB();

            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($dater) && !empty($heure)) {
                    $rendezvousObject = new RendezvousEntity();
                    $rendezvousObject->setId($id);

                    $rendezvousObject->setDater($dater);
                    $rendezvousObject->setHeure($heure);
                    $rendezvousObject->setMotif($motif);
                    $rendezvousObject->setIdpatient($idpatient);
                    $rendezvousObject->setIdmedecin($idmedecin);
                    $rendezvousObject->setIdsecretaire($idsecretaire);

                    $ok = $rdb->updateRendezvous($rendezvousObject);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $rdb = new RendezvousDB();
			//Supression
			$rdb->deleteRendezvous($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $rdb = new RendezvousDB();
            $pdb = new PatientDB();
            $data['patients'] = $pdb->listePatient();

            $mdb = new MedecinDB();
            $data['medecins'] = $mdb->listeMedecin();

            $sdb = new SecretaireDB();
            $data['secretaires'] = $sdb->listeSecretaire();
			//Supression
			$data['rendezvous'] = $rdb->getRendezvous($id);
			//chargement de la vue edit.html
            return $this->view->load("rendezvous/edit", $data);
        }
    }
?>