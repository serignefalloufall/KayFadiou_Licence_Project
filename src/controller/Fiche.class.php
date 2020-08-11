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

use src\entities\Fiche as FicheEntity;

use src\model\FicheDB;



class Fiche extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model grace au systeme autoloading
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/Dossier
    //Ne Dossierer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){

        return $this->view->load("fiche/index");
    }

    public function getid($id){
        $data['id'] = $id;

        return $this->view->load("fiche/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $fdb = new FicheDB();

        $data['Fiche'] = $fdb->getFiche($id);

        return $this->view->load("fiche/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $fdb = new FicheDB();

        $data['fiches'] = $fdb->listeFiche();

        return $this->view->load("fiche/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $fdb = new FicheDB();
        //Récupération des données qui viennent du formulaire view/Dossier/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            $data['ok'] = 0;
            if(!empty($date_fiche)) {
                $ficheObject = new FicheEntity();
                $ficheObject->setDateFiche($date_fiche);

                $ok = $fdb->addFiche($ficheObject);
                $data['ok'] = $ok;
            }
            return $this->view->load("fiche/add", $data);
        }else{
            return $this->view->load("fiche/add");
        }
    }
    public function update(){
        //Instanciation du model
        $fdb = new FicheDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($date_fiche)) {
                $ficheObject = new FicheEntity();
                $ficheObject->setDateFiche($date_fiche);

                $ok = $fdb->updateFiche($ficheObject);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $fdb = new FicheDB();
        //Supression
        $fdb->deleteFiche($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $fdb = new FicheDB();
        //Supression
        $data['fiche'] = $fdb->getFiche($id);
        //chargement de la vue edit.html
        return $this->view->load("fiche/edit", $data);
    }
}
?>