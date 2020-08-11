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

use src\entities\FicheExamen as FicheExamenEntity;

use src\model\FicheExamenDB;
use src\model\FicheDB;
use src\model\ExamenDB;

class FicheExamen extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model grace au systeme autoloading
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/FicheExamen
    //Ne FicheExamener pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){

        return $this->view->load("FicheExamen/index");
    }

    public function getid($id){
        $data['id'] = $id;

        return $this->view->load("FicheExamen/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $mdb = new FicheExamenDB();

        $data['FicheExamen'] = $mdb->getFich_Examen($id);

        return $this->view->load("FicheExamen/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $mdb = new FicheExamenDB();

        $data['FicheExamens'] = $mdb->listeFicheExamen();

        return $this->view->load("FicheExamen/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $mdb = new FicheExamenDB();
        $udb = new FicheDB();
        $data['fiches'] = $udb->listeFiche();

        $sdb = new ExamenDB();
        $data['examens'] = $sdb->listeExamen();
        //Récupération des données qui viennent du formulaire view/FicheExamen/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            $data['ok'] = 0;
            if(!empty($remarque)) {
//`remarque`, `id_exam`, `id_fiche`
                $FicheExamenObject = new FicheExamenEntity();
                $FicheExamenObject->setRemarque($remarque);
                $FicheExamenObject->setIdExam($id_exam);
                $FicheExamenObject->setIdFiche($id_fiche);



                $ok = $mdb->addFicheExamen($FicheExamenObject);
                $data['ok'] = $ok;
            }
            return $this->view->load("FicheExamen/add", $data);
        }else{
            return $this->view->load("FicheExamen/add", $data);
        }
    }
    public function update(){
        //Instanciation du model
        $mdb = new FicheExamenDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($remarque)) {
//`remarque`, `id_exam`, `id_fiche`
                $FicheExamenObject = new FicheExamenEntity();
                $FicheExamenObject->setRemarque($remarque);
                $FicheExamenObject->setIdExam($id_exam);
                $FicheExamenObject->setIdFiche($id_fiche);


                $ok = $mdb->updateFicheExamen($FicheExamenObject);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $mdb = new FicheExamenDB();
        //Supression
        $mdb->deleteFicheExamen($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $mdb = new FicheExamenDB();
        //Supression
        $data['FicheExamen'] = $mdb->getFicheExamen($id);
        //chargement de la vue edit.html
        return $this->view->load("FicheExamen/edit", $data);
    }
}
?>