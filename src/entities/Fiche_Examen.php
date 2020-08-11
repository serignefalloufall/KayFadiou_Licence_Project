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
class Fiche_Examen
{
    //`remarque`, `id_exam`, `id_fiche`
    private $id;
    private $remarque;
    private $id_exam;
    private $id_fiche;

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
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * @param mixed $remarque
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;
    }

    /**
     * @return mixed
     */
    public function getIdExam()
    {
        return $this->id_exam;
    }

    /**
     * @param mixed $id_exam
     */
    public function setIdExam($id_exam)
    {
        $this->id_exam = $id_exam;
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




}
?>