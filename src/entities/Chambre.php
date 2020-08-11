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
        class Chambre
            {

    /*==================Attribut list=====================*/
                
             private $id;
             private $batiment;
             private $etage;
             private $nb_lit;
             private $type_cham;

            /**
             * @return mixed
             */
            public function getId()
            {
                return $this->id;
            }

            /**
             * @param mixed $id
             */
            public function setId($id)
            {
                $this->id = $id;
            }

            /**
             * @return mixed
             */
            public function getBatiment()
            {
                return $this->batiment;
            }

            /**
             * @param mixed $batimentt
             */
            public function setBatiment($batiment)
            {
                $this->batiment = $batiment;
            }

            /**
             * @return mixed
             */
            public function getEtage()
            {
                return $this->etage;
            }

            /**
             * @param mixed $etage
             */
            public function setEtage($etage)
            {
                $this->etage = $etage;
            }

            /**
             * @return mixed
             */
            public function getNbLit()
            {
                return $this->nb_lit;
            }

            /**
             * @param mixed $nb_lit
             */
            public function setNbLit($nb_lit)
            {
                $this->nb_lit = $nb_lit;
            }

            /**
             * @return mixed
             */
            public function getTypeCham()
            {
                return $this->type_cham;
            }

            /**
             * @param mixed $type_cham
             */
            public function setTypeCham($type_cham)
            {
                $this->type_cham = $type_cham;
            }



                

           }
  
   



   ?>



