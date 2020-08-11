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
    class Rendezvous
    {
        private $id;
        private $dater;
        private $heure;
        private $motif;
        private $idpatient;
        private $idmedecin;
        private $idsecretaire;

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
        public function getDater()
        {
            return $this->dater;
        }

        /**
         * @param mixed $dater
         */
        public function setDater($dater)
        {
            $this->dater = $dater;
        }

        /**
         * @return mixed
         */
        public function getHeure()
        {
            return $this->heure;
        }

        /**
         * @param mixed $heure
         */
        public function setHeure($heure)
        {
            $this->heure = $heure;
        }

        /**
         * @return mixed
         */
        public function getMotif()
        {
            return $this->motif;
        }

        /**
         * @param mixed $motif
         */
        public function setMotif($motif)
        {
            $this->motif = $motif;
        }

        /**
         * @return mixed
         */
        public function getIdpatient()
        {
            return $this->idpatient;
        }

        /**
         * @param mixed $idpatient
         */
        public function setIdpatient($idpatient)
        {
            $this->idpatient = $idpatient;
        }

        /**
         * @return mixed
         */
        public function getIdmedecin()
        {
            return $this->idmedecin;
        }

        /**
         * @param mixed $idmedecin
         */
        public function setIdmedecin($idmedecin)
        {
            $this->idmedecin = $idmedecin;
        }

        /**
         * @return mixed
         */
        public function getIdsecretaire()
        {
            return $this->idsecretaire;
        }

        /**
         * @param mixed $idsecretaire
         */
        public function setIdsecretaire($idsecretaire)
        {
            $this->idsecretaire = $idsecretaire;
        }



    }


?>