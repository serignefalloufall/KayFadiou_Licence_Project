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
    class Observation
    {
        private $id;
        private $poids;
        private $taille;
        private $pouls;
        private $frequence;
        private $temperature;
        private $idfiche;

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
        public function getPoids()
        {
            return $this->poids;
        }

        /**
         * @param mixed $poids
         */
        public function setPoids($poids)
        {
            $this->poids = $poids;
        }

        /**
         * @return mixed
         */
        public function getTaille()
        {
            return $this->taille;
        }

        /**
         * @param mixed $taille
         */
        public function setTaille($taille)
        {
            $this->taille = $taille;
        }

        /**
         * @return mixed
         */
        public function getPouls()
        {
            return $this->pouls;
        }

        /**
         * @param mixed $pouls
         */
        public function setPouls($pouls)
        {
            $this->pouls = $pouls;
        }

        /**
         * @return mixed
         */
        public function getFrequence()
        {
            return $this->frequence;
        }

        /**
         * @param mixed $frequence
         */
        public function setFrequence($frequence)
        {
            $this->frequence = $frequence;
        }

        /**
         * @return mixed
         */
        public function getTemperature()
        {
            return $this->temperature;
        }

        /**
         * @param mixed $temperature
         */
        public function setTemperature($temperature)
        {
            $this->temperature = $temperature;
        }

        /**
         * @return mixed
         */
        public function getIdfiche()
        {
            return $this->idfiche;
        }

        /**
         * @param mixed $idfiche
         */
        public function setIdfiche($idfiche)
        {
            $this->idfiche = $idfiche;
        }




    }
?>