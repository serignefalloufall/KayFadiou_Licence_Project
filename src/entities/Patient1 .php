<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



namespace src\entities;
    /*==================Classe creer par Samane samane_ui_admin le 20-08-2019 15:14:43=====================*/
        class Patient 
            {

    /*==================Attribut list=====================*/
                
             private $id;
             private $nom_pat;
             private $prenom_pat;
             private $addr_pat;
             private $tel_pat;
             private $sexe_pat;
             private $age_pat;
             private $profession;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_pat()
                 {
                     return $this->nom_pat;
                 }

             public function getPrenom_pat()
                 {
                     return $this->prenom_pat;
                 }

             public function getAddr_pat()
                 {
                     return $this->addr_pat;
                 }

             public function getTel_pat()
                 {
                     return $this->tel_pat;
                 }

             public function getSexe_pat()
                 {
                     return $this->sexe_pat;
                 }

             public function getAge_pat()
                 {
                     return $this->age_pat;
                 }

             public function getProfession()
                 {
                     return $this->profession;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_pat($nom_pat)
                 {
                      $this->nom_pat = $nom_pat;
                 }

             public function setPrenom_pat($prenom_pat)
                 {
                      $this->prenom_pat = $prenom_pat;
                 }

             public function setAddr_pat($addr_pat)
                 {
                      $this->addr_pat = $addr_pat;
                 }

             public function setTel_pat($tel_pat)
                 {
                      $this->tel_pat = $tel_pat;
                 }

             public function setSexe_pat($sexe_pat)
                 {
                      $this->sexe_pat = $sexe_pat;
                 }

             public function setAge_pat($age_pat)
                 {
                      $this->age_pat = $age_pat;
                 }

             public function setProfession($profession)
                 {
                      $this->profession = $profession;
                 }



    /*==================Methode list=====================*/
                

           }
  
   



   ?>



