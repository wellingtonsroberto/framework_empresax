<?php
/** @package Empresax::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("ClienteMap.php");

/**
 * ClienteDAO provides object-oriented access to the cliente table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Empresax::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class ClienteDAO extends Phreezable
{
	/** @var int */
	public $Id;

	/** @var string */
	public $Nome;

	/** @var string */
	public $Email;

	/** @var string */
	public $Endereco;

	/** @var longtext */
	public $Historico;



}
?>