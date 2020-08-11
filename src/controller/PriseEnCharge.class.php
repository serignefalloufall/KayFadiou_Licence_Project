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

    use src\entities\PriseEnCharge as PriseEnChargeEntity;

    use src\model\PriseEnChargeDB;

    class PriseEnCharge extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/PriseEnCharge
        //Ne PriseEnChargeer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("PriseEnCharge/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("priseencharge/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $pdb = new PriseEnChargeDB();

            $data['priseencharge'] = $pdb->getPriseEnCharge($id);
			
            return $this->view->load("priseencharge/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $pdb = new PriseEnChargeDB();
			
            $data['priseencharges'] = $pdb->listePriseEnCharge();
			
            return $this->view->load("priseencharge/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $pdb = new PriseEnChargeDB();
			//Récupération des données qui viennent du formulaire view/PriseEnCharge/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($nomentreprise) && !empty($pourcentage)) {
                    
                    $priseenchargeObject = new PriseEnChargeEntity();
                    $priseenchargeObject->setNomentreprise($nomentreprise);
                    $priseenchargeObject->setPourcentage($pourcentage);

                    $ok = $pdb->addPriseEnCharge($priseenchargeObject);
                    $data['ok'] = $ok;
                }
                return $this->view->load("priseencharge/add", $data);
            }else{
                return $this->view->load("priseencharge/add");
            }
        }
		public function update(){
			//Instanciation du model
            $pdb = new PriseEnChargeDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($nomentreprise) && !empty($pourcentage)) {
                    $priseenchargeObject = new PriseEnChargeEntity();
                    $priseenchargeObject->setNomentreprise($nomentreprise);
                    $priseenchargeObject->setPourcentage($pourcentage);
                    $ok = $pdb->updatePriseEnCharge($priseenchargeObject);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $pdb = new PriseEnChargeDB();
			//Supression
			$pdb->deletePriseEnCharge($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $pdb = new PriseEnChargeDB();
			//Supression
			$data['priseencharge'] = $pdb->getPriseEnCharge($id);
			//chargement de la vue edit.html
            return $this->view->load("priseencharge/edit", $data);
        }
    }
?>