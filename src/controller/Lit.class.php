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

use src\entities\Lit as LitEntity;

use src\model\LitDB;
use src\model\ChambreDB;


class Lit extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model grace au systeme autoloading
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/Dossier
    //Ne Dossierer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){

        return $this->view->load("lit/index");
    }

    public function getid($id){
        $data['id'] = $id;

        return $this->view->load("lit/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $ldb = new LitDB();

        $data['Lit'] = $ldb->getLit($id);

        return $this->view->load("lit/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $ldb = new LitDB();

        $data['lits'] = $ldb->listeLit();

        return $this->view->load("lit/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $ldb = new LitDB();
        $cdb = new ChambreDB();
        $data['chambres'] = $cdb->listechambre();
        //Récupération des données qui viennent du formulaire view/Dossier/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            $data['ok'] = 0;
            if(!empty($prix_lit)&&(!empty($id_cham))) {
                $litObject = new LitEntity();
                $litObject->setPrixLit($prix_lit);
                $litObject->setIdCham($id_cham);
                $ok = $ldb->addLit($litObject);
                $data['ok'] = $ok;
            }
            return $this->view->load("lit/add", $data);
        }else{
            return $this->view->load("lit/add", $data);
        }
    }
    public function update(){
        //Instanciation du model
        $ldb = new LitDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($date_dos)) {

                $litObject = new LitEntity();
                $litObject->setPrixLit($prix_lit);
                $litObject->setIdCham($id_cham);

                $ok = $ldb->updateLit($litObject);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $ldb = new LitDB();
        //Supression
        $ldb->deleteLit($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $ldb = new LitDB();
        //Supression
        $data['lit'] = $ldb->getLit($id);
        //chargement de la vue edit.html
        return $this->view->load("lit/edit", $data);
    }
}
?>