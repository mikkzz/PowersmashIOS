<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as DB;

/**
* @ORM\Entity
* @ORM\Table(name="product")
*/


class Member
{
	/**
	* @ORM\Column(type="string", length=100)
	*/
	$protected username;

	/**
	* @ORM\Column(type="string", length=100)
	*/
	$protected password;

	/**
	* @ORM\Column(type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO)
	*/
	$protected id;
}
