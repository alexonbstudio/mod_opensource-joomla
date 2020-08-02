<?php
/**
 * @package	Module for Joomla!
 * @subpackage  mod_opensource
 * @version	2.4.1
 * @author	Alexon Balangue
 * @link https://alexonbstudio.fr
 * @copyright	(C) 2012-2020 AlexonbStudio. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die;

$jqueryui_themes = $params->get('jqueryui-site-themes');
$waypointsJs_site = $params->get('waypointsjs-site');
$ParallaxJs_site = $params->get('parallaxjs-site');
$bootstrap_site = $params->get('bootstrap-site');
$fontawesome_site = $params->get('fontawesome-site');
$jquery_site = $params->get('jquery-site');
$modernizr_site = $params->get('modernizr-site');
$jqueryeasingjs_site = $params->get('jqueryeasingjs-site');
$respond_site = $params->get('respond-site');

$animate_site = $params->get('animate-site');
$wowjs_site = $params->get('wowjs-site');
$CountUPJs_site = $params->get('countupjs-site');

/*****************[if HTML5]******************/
$html4or5_config = $params->get('html4or5');

/*****************[Prerender and prefetch]******************/
$dnsprefetch_yoursite = $params->get('dnsprefetch_yoursite');
$dnsprefetch_custom = $params->get('dnsprefetch_custom');
$dnsprefetch_googleapi = $params->get('dnsprefetch_googleapi');
$dnsprefetch_bootstrapcdn = $params->get('dnsprefetch_bootstrapcdn');
$dnsprefetch_jquery = $params->get('dnsprefetch_jquery');
$dnsprefetch_cdnjscloudflare = $params->get('dnsprefetch_cdnjscloudflare');
$dnsprefetch_aspnetcdn = $params->get('dnsprefetch_aspnetcdn');
$prerender_url = JURI::root().$params->get('prerender-url');

require JModuleHelper::getLayoutPath('mod_opensource', $params->get('layout', 'default'));
