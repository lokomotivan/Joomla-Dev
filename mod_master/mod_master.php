<?php
/**
 * @package     Joomla.Module
 * @subpackage  mod_master
 * @link        http://www.kreativan.net
 * @copyright   Ivan Milincic - www.kreativan.net. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$document = JFactory::getDocument();
       
// add custom js
//$document->addScript(JURI::base(true) . '/modules/mod_master/assets/js/script.js');
// add custom css
//$document->addStylesheet(JURI::base(true) . '/modules/mod_master/assets/css/style.css');

$id			        = $module->id;
$kreativan			= JText::_('KREATIVAN_NET');
 
$master = modMasterHelper::getMaster($params);
require JModuleHelper::getLayoutPath('mod_master', $params->get('layout', 'default'));
