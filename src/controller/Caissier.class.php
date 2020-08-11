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

use src\entities\Caissier as CaissierEntity;

use src\model\CaissierDB;
use src\model\UserDB;
use src\model\ServiceDB;

class Caissier extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model grace au systeme autoloading
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/Medecin
    //Ne Medeciner pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){

        return $this->view->load("caissier/index");
    }

    public function getid($id){
        $data['id'] = $id;

        return $this->view->load("caissier/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $mdb = new CaissierDB();

        $data['Caissier'] = $mdb->getCaissier($id);

        return $this->view->load("caissier/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $mdb = new CaissierDB();

        $data['caissiers'] = $mdb->listecaissier();

        return $this->view->load("caissier/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $mdb = new CaissierDB();
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

                $caissierObject = new CaissierEntity();
                $caissierObject->setIdSer($id_ser);
                $caissierObject->setIdUser($id_user);
                $ok = $mdb->addCaissier($caissierObject);
                $data['ok'] = $ok;
            }
            return $this->view->load("caissier/add", $data);
        }else{
            return $this->view->load("caissier/add", $data);
        }
    }
    public function update(){
        //Instanciation du model
        $mdb = new CaissierDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id_ser) && !empty($id_user)) {

                $caissierObject = new CaissierEntity();
                $caissierObject->setIdSer($id_ser);
                $caissierObject->setIdUser($id_user);


                $ok = $mdb->updateCaissier($caissierObject);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $mdb = new CaissierDB();
        //Supression
        $mdb->deleteCaissier($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $mdb = new CaissierDB();
        //Supression
        $data['caissier'] = $mdb->getCaissier($id);
        //chargement de la vue edit.html
        return $this->view->load("caissier/edit", $data);
    }
}
?>