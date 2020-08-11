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
class Lit
{
    private $id;
    private $prix_lit;
    private $id_cham;

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
    public function getPrixLit()
    {
        return $this->prix_lit;
    }

    /**
     * @param mixed $prix_lit
     */
    public function setPrixLit($prix_lit)
    {
        $this->prix_lit = $prix_lit;
    }

    /**
     * @return mixed
     */
    public function getIdCham()
    {
        return $this->id_cham;
    }

    /**
     * @param mixed $id_cham
     */
    public function setIdCham($id_cham)
    {
        $this->id_cham = $id_cham;
    }





}
?>