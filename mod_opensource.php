<?php
/**
 * @package	Module for Joomla!
 * @subpackage  mod_opensource
 * @version	2.4.2
 * @author	Alexon Balangue
 * @link https://alexonbstudio.fr
 * @copyright	(C) 2012-2020 AlexonbStudio. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die;

#frontend Add script <head> & <body>
$ModOPhead_script = $params->get('head-script');
$ModOPbody_script = $params->get('body-script');

#frontend
$bootstrap_site = $params->get('bootstrap-site');
$fontawesome_site = $params->get('fontawesome-site');
$jquery_site = $params->get('jquery-site');
$modernizr_site = $params->get('modernizr-site');
$jqueryeasingjs_site = $params->get('jqueryeasingjs-site');
$animate_site = $params->get('animate-site');
$wowjs_site = $params->get('wowjs-site');
$CountUPJs_site = $params->get('countupjs-site');
#frontend - versionning
$bootstrap_version = $params->get('bootstrap-version');
$fontawesome_version = $params->get('fontawesome-version');
$jquery_version = $params->get('jquery-version');
$modernizr_version = $params->get('modernizr-version');
$jqueryeasingjs_version = $params->get('jqueryeasingjs-version');
$animate_version = $params->get('animate-version');
$wowjs_version = $params->get('wowjs-version');
$CountUPJs_version = $params->get('countupjs-version');
$dnsprefetch_yoursite = $params->get('dnsprefetch_yoursite');
$dnsprefetch_googleapi = $params->get('dnsprefetch_googleapi');
$dnsprefetch_cdnjscloudflare = $params->get('dnsprefetch_cdnjscloudflare');


require JModuleHelper::getLayoutPath('mod_opensource', $params->get('layout', 'default'));
