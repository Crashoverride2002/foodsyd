<?php
/**
*
* Manufacturer table
*
* @package	VirtueMart
* @subpackage Manufacturer
* @author Patrick Kohl
* @link https://virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: manufacturers.php 9831 2018-05-07 13:45:33Z Milbo $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

/**
 * Manufacturer table class
 * The class is used to manage the manufacturer table in the shop.
 *
 * @package		VirtueMart
 * @author Max Milbers
 */
class TableManufacturersPrice extends VmTable {

	/** @var int Primary key */
	var $virtuemart_manufacturer_price_id = 0;
	/** @var string manufacturer name */
	var $fk_manufactor_id = '';
	var $date		=  '1970-01-01';
	/** @var string manufacturer email */
	var $units = 'Kg';
	/** @var string manufacturer description */
	var $powder_production = 1;

    /** @var int Manufacturer category id */
	var $currency  = 'dkk';
    /** @var string manufacturer URL */
	var $price = 0,00;


	/** @var int published or unpublished */
	var $published = 1;

	/**
	 * @author Max Milbers
	 * @param JDataBase $db
	 */
	function __construct(&$db)
	{
		parent::__construct('#__virtuemart_manufacturer_price', 'virtuemart_manufacturer_price_id', $db);

		$this->setUniqueId('virtuemart_manufacturer_price_id');
		$this->setLoggable();
		$this->setTableShortCut('m');
	}

}
// pure php no closing tag
