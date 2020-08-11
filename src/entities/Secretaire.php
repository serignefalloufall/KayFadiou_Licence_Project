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
    class Secretaire
    {
        private $id;
        private $idservice;
        private $iduser;

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
        public function getIdservice()
        {
            return $this->idservice;
        }

        /**
         * @param mixed $idservice
         */
        public function setIdservice($idservice)
        {
            $this->idservice = $idservice;
        }

        /**
         * @return mixed
         */
        public function getIduser()
        {
            return $this->iduser;
        }

        /**
         * @param mixed $iduser
         */
        public function setIduser($iduser)
        {
            $this->iduser = $iduser;
        }

    }
?>