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

use src\entities\Dossier as DossierEntity;

use src\model\DossierDB;
use src\model\PatientDB;


class Dossier extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model grace au systeme autoloading
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/Dossier
    //Ne Dossierer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){

        return $this->view->load("dossier/index");
    }

    public function getid($id){
        $data['id'] = $id;

        return $this->view->load("dossier/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $mdb = new DossierDB();

        $data['Dossier'] = $mdb->getDossier($id);

        return $this->view->load("Dossier/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $mdb = new DossierDB();

        $data['dossiers'] = $mdb->listeDossier();

        return $this->view->load("dossier/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $ddb = new DossierDB();
        $pdb = new PatientDB();
        $data['patients'] = $pdb->listePatient();
        //Récupération des données qui viennent du formulaire view/Dossier/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            $data['ok'] = 0;
            if(!empty($date_dos)) {

                $dossierObject = new DossierEntity();
                $dossierObject->setDateDos($date_dos);
                $dossierObject->setRemarqueDos($remarque_dos);
                $dossierObject->setIdPat($id_pat);


                $ok = $ddb->addDossier($dossierObject);
                $data['ok'] = $ok;
            }
            return $this->view->load("dossier/add", $data);
        }else{
            return $this->view->load("dossier/add", $data);
        }
    }
    public function update(){
        //Instanciation du model
        $ddb = new DossierDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($date_dos)) {

                $dossierObject = new DossierEntity();
                $dossierObject->setDateDos($date_dos);
                $dossierObject->setRemarqueDos($remarque_dos);
                $dossierObject->setIdPat($id_pat);


                $ok = $ddb->updateDossier($dossierObject);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $ddb = new DossierDB();
        //Supression
        $ddb->deleteDossier($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $ddb = new DossierDB();
        //Supression
        $data['dossier'] = $ddb->getDossier($id);
        //chargement de la vue edit.html
        return $this->view->load("dossier/edit", $data);
    }
}
?>