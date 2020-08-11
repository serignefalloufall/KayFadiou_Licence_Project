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
    class Ordonance
    {
        private $id;
        private $titre;
        private $dateo;
        private $observation;
        private $traitement;
        private $idconsultation;

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
        public function getTitre()
        {
            return $this->titre;
        }

        /**
         * @param mixed $titre
         */
        public function setTitre($titre)
        {
            $this->titre = $titre;
        }

        /**
         * @return mixed
         */
        public function getDateo()
        {
            return $this->dateo;
        }

        /**
         * @param mixed $dateo
         */
        public function setDateo($dateo)
        {
            $this->dateo = $dateo;
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
        public function getTraitement()
        {
            return $this->traitement;
        }

        /**
         * @param mixed $traitement
         */
        public function setTraitement($traitement)
        {
            $this->traitement = $traitement;
        }

        /**
         * @return mixed
         */
        public function getIdconsultation()
        {
            return $this->idconsultation;
        }

        /**
         * @param mixed $idconsultation
         */
        public function setIdconsultation($idconsultation)
        {
            $this->idconsultation = $idconsultation;
        }

    }
?>