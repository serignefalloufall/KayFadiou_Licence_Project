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

use src\entities\Chambre as ChambreEntity;

use src\model\ChambreDB;

    class Chambre extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/chambre
        //Ne chambreer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){

            return $this->view->load("chambre/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("chambre/get_id", $data);
        }

        public function get($id){
            //Instanciation du model
            $pdb = new ChambreDB();

            $data['chambre'] = $pdb->getChambre($id);

            return $this->view->load("chambre/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $pdb = new ChambreDB();

            $data['chambres'] = $pdb->listeChambre();

            return $this->view->load("chambre/liste", $data);
        }


		public function add(){
			//Instanciation du model
            $pdb = new ChambreDB();
			//Récupération des données qui viennent du formulaire view/chambre/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($batiment) && !empty($etage)) {
                   $chambreObject = new chambreEntity();
                    $chambreObject->setBatiment($batiment);
                    $chambreObject->setEtage($etage);
                    $chambreObject->setNbLit($nb_lit);
                    $chambreObject->setTypeCham($type_cham);



                  $ok = $pdb->addChambre($chambreObject);
                       $data['ok'] = $ok;

                        }
              return $this->view->load("chambre/add", $data);
            }else{
                return $this->view->load("chambre/add");
            }
        }
        //pour charger la photo

		public function update(){
			//Instanciation du model
            $pdb = new ChambreDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($batiment) && !empty($etage)) {
                    $chambreObject = new chambreEntity();
                    $chambreObject->setBatiment($batiment);
                    $chambreObject->setEtage($etage);
                    $chambreObject->setNbLit($nb_lit);
                    $chambreObject->setTypeCham($type_cham);
                    $ok = $pdb->updateChambre($chambreObject);
                }
            }

            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $pdb = new ChambreDB();
			//Supression
			$pdb->deleteChambre($id);
			//Retour vers la liste
            return $this->liste();
        }

		public function edit($id){

            //Instanciation du model
            $pdb = new ChambreDB();
			//Supression
			$data['chambre'] = $pdb->getChambre($id);
			//chargement de la vue edit.html
            return $this->view->load("chambre/edit", $data);
        }
    }
?>