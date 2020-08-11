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
    class Consultation
    {
        private $id;
        private $libelle;
        private $datec;
        private $idmedecin;
        private $idpatient;
        private $idrv;
        private $iddossier;
        private $idcharge;

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
        public function getLibelle()
        {
            return $this->libelle;
        }

        /**
         * @param mixed $libelle
         */
        public function setLibelle($libelle)
        {
            $this->libelle = $libelle;
        }

        /**
         * @return mixed
         */
        public function getDatec()
        {
            return $this->datec;
        }

        /**
         * @param mixed $datec
         */
        public function setDatec($datec)
        {
            $this->datec = $datec;
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
        public function getIdrv()
        {
            return $this->idrv;
        }

        /**
         * @param mixed $idrv
         */
        public function setIdrv($idrv)
        {
            $this->idrv = $idrv;
        }

        /**
         * @return mixed
         */
        public function getIddossier()
        {
            return $this->iddossier;
        }

        /**
         * @param mixed $iddossier
         */
        public function setIddossier($iddossier)
        {
            $this->iddossier = $iddossier;
        }

        /**
         * @return mixed
         */
        public function getIdcharge()
        {
            return $this->idcharge;
        }

        /**
         * @param mixed $idcharge
         */
        public function setIdcharge($idcharge)
        {
            $this->idcharge = $idcharge;
        }


    }
?>