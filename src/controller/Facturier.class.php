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

    use src\entities\Facturier as FacturierEntity;

    use src\model\FacturierDB;
    use src\model\UserDB;
    use src\model\ServiceDB;

    class Facturier extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Medecin
        //Ne Medeciner pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("facturier/index");
        }

        public function getid($id){
            $data['id'] = $id;

            return $this->view->load("facturier/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $mdb = new FacturierDB();

            $data['Facturier'] = $mdb->getFacturier($id);
			
            return $this->view->load("facturier/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $mdb = new FacturierDB();
			
            $data['facturiers'] = $mdb->listeFacturier();
			
            return $this->view->load("facturier/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $mdb = new FacturierDB();
            $udb = new UserDB();
            $data['users'] = $udb->listeUser();

            $sdb = new ServiceDB();
            $data['services'] = $sdb->listeService();
			//Récupération des données qui viennent du formulaire view/Medecin/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($id_ser) && !empty($id_user)) {

                    $facturierObject = new FacturierEntity();
                    $facturierObject->setIdSer($id_ser);
                    $facturierObject->setIdUser($id_user);
                    $ok = $mdb->addFacturier($facturierObject);
                    $data['ok'] = $ok;
                }
                return $this->view->load("Facturier/add", $data);
            }else{
                return $this->view->load("Facturier/add", $data);
            }
        }
		public function update(){
			//Instanciation du model
            $mdb = new FacturierDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id_ser) && !empty($id_user)) {

                    $facturierObject = new FacturierEntity();
                    $facturierObject->setIdSer($id_ser);
                    $facturierObject->setIdUser($id_user);


                    $ok = $mdb->updateFacturier($facturierObject);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $mdb = new FacturierDB();
			//Supression
			$mdb->deleteFacturier($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $mdb = new FacturierDB();
			//Supression
			$data['facturier'] = $mdb->getFacturier($id);
			//chargement de la vue edit.html
            return $this->view->load("Facturier/edit", $data);
        }
    }
?>