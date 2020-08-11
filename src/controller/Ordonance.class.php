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

    use src\entities\Ordonance as OrdonanceEntity;

    use src\model\OrdonanceDB;
    use src\model\ConsultationDB;

    class Ordonance extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Ordonance
        //Ne Ordonanceer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("ordonance/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("ordonance/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $odb = new OrdonanceDB();

            $data['ordonance'] = $odb->getOrdonance($id);
			
            return $this->view->load("ordonance/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $odb = new OrdonanceDB();
			
            $data['ordonances'] = $odb->listeOrdonance();
			
            return $this->view->load("ordonance/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $odb = new OrdonanceDB();

            $cdb = new ConsultationDB();
            $data['consultations'] = $cdb->listeConsultation();
			//Récupération des données qui viennent du formulaire view/Ordonance/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($titre) && !empty($dateo)) {

                    $ordonanceObject = new OrdonanceEntity();
                    $ordonanceObject->setTitre($titre);
                    $ordonanceObject->setDateo($dateo);
                    $ordonanceObject->setObservation($observation);
                    $ordonanceObject->setTraitement($traitement);
                    $ordonanceObject->setIdconsultation($idconsultation);

                    $ok = $odb->addOrdonance($ordonanceObject);
                    $data['ok'] = $ok;
                }
                return $this->view->load("ordonance/add", $data);
            }else{
                return $this->view->load("ordonance/add", $data);
            }
        }
		public function update(){
			//Instanciation du model
            $odb = new OrdonanceDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($titre) && !empty($dateo)) {
                    $ordonanceObject = new OrdonanceEntity();
                    $ordonanceObject->setId($id);
                    $ordonanceObject->setTitre($titre);
                    $ordonanceObject->setDateo($dateo);
                    $ordonanceObject->setObservation($observation);
                    $ordonanceObject->setTraitement($traitement);
                    $ordonanceObject->setIdconsultation($idconsultation);
                    $ok = $odb->updateOrdonance($ordonanceObject);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $odb = new OrdonanceDB();
			//Supression
			$odb->deleteOrdonance($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $odb = new OrdonanceDB();
			//Supression
			$data['ordonance'] = $odb->getOrdonance($id);
			//chargement de la vue edit.html
            return $this->view->load("ordonance/edit", $data);
        }
    }
?>