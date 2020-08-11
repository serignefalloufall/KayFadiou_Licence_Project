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
    class PriseEnCharge
    {
        private $id;
        private $nomentreprise;
        private $pourcentage;

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
        public function getNomentreprise()
        {
            return $this->nomentreprise;
        }

        /**
         * @param mixed $nomentreprise
         */
        public function setNomentreprise($nomentreprise)
        {
            $this->nomentreprise = $nomentreprise;
        }

        /**
         * @return mixed
         */
        public function getPourcentage()
        {
            return $this->pourcentage;
        }

        /**
         * @param mixed $pourcentage
         */
        public function setPourcentage($pourcentage)
        {
            $this->pourcentage = $pourcentage;
        }


    }
?>