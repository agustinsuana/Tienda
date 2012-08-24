<?php
namespace Tienda\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tienda\OfertaBundle\Entity\Venta
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Venta
{
	/**
	* @ORM\Column(type="datetime")
	*/
	protected $fecha;

	/**
	* @ORM\Id
	* @ORM\ManyToOne(targetEntity="Tienda\OfertaBundle\Entity\Oferta")
	*/
	protected $oferta;

	/**
	* @ORM\Id
	* @ORM\ManyToOne(targetEntity="Tienda\UsuarioBundle\Entity\Usuario")
	*/
	protected $usuario;

	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function setOferta(\Tienda\OfertaBundle\Entity\Oferta $oferta)
	{
		$this->oferta = $oferta;
	}

	public function getOferta()
	{
		return $this->oferta;
	}

	public function setUsuario(\Tienda\UsuarioBundle\Entity\Usuario $usuario)
	{
		$this->usuario = $usuario;
	}

	public function getUsuario()
	{
		return $this->usuario;
	}	
}