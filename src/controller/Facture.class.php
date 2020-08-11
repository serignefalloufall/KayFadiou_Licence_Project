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

    use src\entities\Facture as FactureEntity;

    use src\model\FactureDB;
    use src\model\ConsultationDB;
    use src\model\FacturierDB;

    class Facture extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Medecin
        //Ne Medeciner pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("facture/index");
        }

        public function getid($id){
            $data['id'] = $id;

            return $this->view->load("facture/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $mdb = new FactureDB();

            $data['Facture'] = $mdb->getFacture($id);
			
            return $this->view->load("facture/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $mdb = new FactureDB();
			
            $data['factures'] = $mdb->listeFacture();
			
            return $this->view->load("facture/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $mdb = new FactureDB();
            $udb = new ConsultationDB();
            $data['consultations'] = $udb->listeConsultation();

            $sdb = new FacturierDB();
            $data['facturiers'] = $sdb->listeFacturier();
			//Récupération des données qui viennent du formulaire view/Medecin/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($libelle_facture) && !empty($date_facture)) {

                    $factureObject = new FactureEntity();
                    $factureObject->setLibelleFacture($libelle_facture);
                    $factureObject->setDateFacturer($date_facture);
                     $factureObject->setIdCons($id_cons);
                     $factureObject->setIdFac($id_fac);
                    $ok = $mdb->addFacture($factureObject);
                    $data['ok'] = $ok;
                }
                return $this->view->load("Facture/add", $data);
            }else{
                return $this->view->load("Facture/add", $data);
            }
        }

		public function update(){
			//Instanciation du model
            $mdb = new FactureDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($libelle_facture) && !empty($date_facture)) {

                    $factureObject = new FactureEntity();
                    $factureObject->setLibelleFacture($libelle_facture);
                    $factureObject->setDateFacturer($date_facture);
                    $factureObject->setIdCons($id_cons);
                    $factureObject->setIdFac($id_fac);


                    $ok = $mdb->updateFacture($factureObject);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $mdb = new FactureDB();
			//Supression
			$mdb->deleteFacture($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $mdb = new FactureDB();
			//Supression
			$data['facture'] = $mdb->getFacture($id);
			//chargement de la vue edit.html
            return $this->view->load("Facture/edit", $data);
        }
    }
?>