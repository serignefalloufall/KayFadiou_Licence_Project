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
    class Hospitalisation
    {
        private $id;
        private $poids;
        private $taille;
        private $poul;
        private $frequence;
        private $temperature;
        private $observation;
        private $motif;
        private $caution;
        private $id_lit;
        private $id_fiche;
        private $infirmier;

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
        public function getPoul()
        {
            return $this->poul;
        }

        /**
         * @param mixed $poul
         */
        public function setPoul($poul)
        {
            $this->poul = $poul;
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
        public function getObservation()
        {
            return $this->observation;
        }

        /**
         * @param mixed $observation
         */
        public function setObservation($observation)
        {
            $this->observation = $observation;
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
        public function getCaution()
        {
            return $this->caution;
        }

        /**
         * @param mixed $caution
         */
        public function setCaution($caution)
        {
            $this->caution = $caution;
        }

        /**
         * @return mixed
         */
        public function getIdLit()
        {
            return $this->id_lit;
        }

        /**
         * @param mixed $id_lit
         */
        public function setIdLit($id_lit)
        {
            $this->id_lit = $id_lit;
        }

        /**
         * @return mixed
         */
        public function getIdFiche()
        {
            return $this->id_fiche;
        }

        /**
         * @param mixed $id_fiche
         */
        public function setIdFiche($id_fiche)
        {
            $this->id_fiche = $id_fiche;
        }

        /**
         * @return mixed
         */
        public function getInfirmier()
        {
            return $this->infirmier;
        }

        /**
         * @param mixed $infirmier
         */
        public function setInfirmier($infirmier)
        {
            $this->infirmier = $infirmier;
        }


    }


?>