<?php

namespace BackendBundle\Entity;

/**
 * Contacto
 */
class Contacto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apepaterno;

    /**
     * @var string
     */
    private $apematerno;

    /**
     * @var string
     */
    private $dniextranjeria;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $distrito;

    /**
     * @var string
     */
    private $celular;

    /**
     * @var string
     */
    private $modelo;

    /**
     * @var string
     */
    private $formacontacto;

    /**
     * @var string
     */
    private $comentario;

    /**
     * @var string
     */
    private $newsletter;

    /**
     * @var string
     */
    private $politicas;

    /**
     * @var \DateTime
     */
    private $fecha = 'CURRENT_TIMESTAMP';


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Contacto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apepaterno
     *
     * @param string $apepaterno
     *
     * @return Contacto
     */
    public function setApepaterno($apepaterno)
    {
        $this->apepaterno = $apepaterno;

        return $this;
    }

    /**
     * Get apepaterno
     *
     * @return string
     */
    public function getApepaterno()
    {
        return $this->apepaterno;
    }

    /**
     * Set apematerno
     *
     * @param string $apematerno
     *
     * @return Contacto
     */
    public function setApematerno($apematerno)
    {
        $this->apematerno = $apematerno;

        return $this;
    }

    /**
     * Get apematerno
     *
     * @return string
     */
    public function getApematerno()
    {
        return $this->apematerno;
    }

    /**
     * Set dniextranjeria
     *
     * @param string $dniextranjeria
     *
     * @return Contacto
     */
    public function setDniextranjeria($dniextranjeria)
    {
        $this->dniextranjeria = $dniextranjeria;

        return $this;
    }

    /**
     * Get dniextranjeria
     *
     * @return string
     */
    public function getDniextranjeria()
    {
        return $this->dniextranjeria;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contacto
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set distrito
     *
     * @param string $distrito
     *
     * @return Contacto
     */
    public function setDistrito($distrito)
    {
        $this->distrito = $distrito;

        return $this;
    }

    /**
     * Get distrito
     *
     * @return string
     */
    public function getDistrito()
    {
        return $this->distrito;
    }

    /**
     * Set celular
     *
     * @param string $celular
     *
     * @return Contacto
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Contacto
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set formacontacto
     *
     * @param string $formacontacto
     *
     * @return Contacto
     */
    public function setFormacontacto($formacontacto)
    {
        $this->formacontacto = $formacontacto;

        return $this;
    }

    /**
     * Get formacontacto
     *
     * @return string
     */
    public function getFormacontacto()
    {
        return $this->formacontacto;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return Contacto
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set newsletter
     *
     * @param string $newsletter
     *
     * @return Contacto
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return string
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set politicas
     *
     * @param string $politicas
     *
     * @return Contacto
     */
    public function setPoliticas($politicas)
    {
        $this->politicas = $politicas;

        return $this;
    }

    /**
     * Get politicas
     *
     * @return string
     */
    public function getPoliticas()
    {
        return $this->politicas;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Contacto
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}

