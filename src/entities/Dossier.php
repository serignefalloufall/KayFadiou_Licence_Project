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
class Dossier
{
    private $id;
    private $date_dos;
    private $remarque_dos;
    private $id_pat;

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
    public function getDateDos()
    {
        return $this->date_dos;
    }

    /**
     * @param mixed $date_dos
     */
    public function setDateDos($date_dos)
    {
        $this->date_dos = $date_dos;
    }

    /**
     * @return mixed
     */
    public function getRemarqueDos()
    {
        return $this->remarque_dos;
    }

    /**
     * @param mixed $remarque_dos
     */
    public function setRemarqueDos($remarque_dos)
    {
        $this->remarque_dos = $remarque_dos;
    }

    /**
     * @return mixed
     */
    public function getIdPat()
    {
        return $this->id_pat;
    }

    /**
     * @param mixed $id_pat
     */
    public function setIdPat($id_pat)
    {
        $this->id_pat = $id_pat;
    }



}
?>