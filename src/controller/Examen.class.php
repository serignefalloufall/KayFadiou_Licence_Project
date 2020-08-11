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

    use src\entities\Examen as ExamenEntity;

    use src\model\ExamenDB;


    class Examen extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/Examen
        //Ne Examener pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("examen/index");
        }

        public function getid($id){
            $data['id'] = $id;

            return $this->view->load("examen/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $mdb = new ExamenDB();

            $data['examen'] = $mdb->getExamen($id);
			
            return $this->view->load("examen/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $mdb = new ExamenDB();
			
            $data['examens'] = $mdb->listeExamen();
			
            return $this->view->load("examen/liste", $data);
        }
	
	
		public function add(){
            $mdb = new ExamenDB();
			//Instanciation du model
			//Récupération des données qui viennent du formulaire view/Examen/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($nom_examen )) {

                    $examenObject = new ExamenEntity();
                    $examenObject->getNomExamen($nom_examen);
                    $ok = $mdb->addExamen($examenObject);
                    $data['ok'] = $ok;
                }
                return $this->view->load("examen/add", $data);
            }else{
                return $this->view->load("examen/add");
            }
        }

        public function delete($id){
            //Instanciation du model
            $mdb = new ExamenDB();
			//Supression
			$mdb->deleteExamen($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $mdb = new ExamenDB();
			//Supression
			$data['examen'] = $mdb->getExamen($id);
			//chargement de la vue edit.html
            return $this->view->load("examen/edit", $data);
        }
    }
?>