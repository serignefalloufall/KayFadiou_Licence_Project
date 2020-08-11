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
class Facture
{
    private $id;
    private $libelle_facture;
    private $date_facturer;
    private $id_cons;
    private $id_fac;

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
    public function getLibelleFacture()
    {
        return $this->libelle_facture;
    }

    /**
     * @param mixed $libelle_facture
     */
    public function setLibelleFacture($libelle_facture)
    {
        $this->libelle_facture = $libelle_facture;
    }

    /**
     * @return mixed
     */
    public function getDateFacturer()
    {
        return $this->date_facturer;
    }

    /**
     * @param mixed $date_facturer
     */
    public function setDateFacturer($date_facturer)
    {
        $this->date_facturer = $date_facturer;
    }

    /**
     * @return mixed
     */
    public function getIdCons()
    {
        return $this->id_cons;
    }

    /**
     * @param mixed $id_cons
     */
    public function setIdCons($id_cons)
    {
        $this->id_cons = $id_cons;
    }

    /**
     * @return mixed
     */
    public function getIdFac()
    {
        return $this->id_fac;
    }

    /**
     * @param mixed $id_fac
     */
    public function setIdFac($id_fac)
    {
        $this->id_fac = $id_fac;
    }



}
?>