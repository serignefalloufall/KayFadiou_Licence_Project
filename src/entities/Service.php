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
    namespace src\entities;
    class Service
    {
        private $id_ser;
        private $nom_ser;

        /**
         * @return mixed
         */
        public function getId_ser()
        {
            return $this->id_ser;
        }

        /**
         * @param mixed $id_ser
         */
        public function setId_ser($id_ser)
        {
            $this->id_ser = $id_ser;
        }

        /**
         * @return mixed
         */
        public function getNom_ser()
        {
            return $this->nom_ser;
        }

        /**
         * @param mixed $nom_ser
         */
        public function setNom_ser($nom_ser)
        {
            $this->nom_ser = $nom_ser;
        }


    }
?>