<?php
/**
 * @package    M.S. Testimony Floral Therapy
 *
 * @author     Koen Vandezande <koen@rioguides.biz>
 * @copyright  RioGuides.Biz
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://rioguides.biz
 */

use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_mstestimonflor', $params->get('layout', 'default'));
