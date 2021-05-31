<?php
/**
 * @package	Module for Joomla 4 BETA 3 | PHP7.2 tested
 * @subpackage  mod_opensource
 * @version	2.4.5
 * @author	Alexon Balangue
 * @link https://alexonb.studio
 * @copyright	(C) 2012-2020 AlexonbStudio. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\HTML\HTMLHelper;


#frontend Add script <head> & <body>
$ModOPhead_script = $params->get('head-script');
$ModOPbody_script = $params->get('body-script');

#frontend

$bootstrap_site = $params->get('bootstrap-site', 1);
$fontawesome_site = $params->get('fontawesome-site', 1);
$jquery_site = $params->get('jquery-site', 1);
$typed_site = $params->get('typed-site', 1);
$modernizr_site = $params->get('modernizr-site', 1);
$jqueryeasingjs_site = $params->get('jqueryeasingjs-site', 1);
$animate_site = $params->get('animate-site', 1);
$wowjs_site = $params->get('wowjs-site', 1);
$CountUPJs_site = $params->get('countupjs-site', 1);
$jquerywaypoints_site = $params->get('jquerywaypoints-site', 1);
$isotope_site = $params->get('isotope-site', 1);
$venobox_site = $params->get('venobox-site', 1);
$owlcarousel_site = $params->get('owlcarousel-site', 1);
$aos_site = $params->get('aos-site', 1);
$ionicons_site = $params->get('ionicons-site', 1);
$scrollRevealjs_site = $params->get('scrollRevealjs-site', 1);

#frontend - versionning
$bootstrap_version = $params->get('bootstrap-version');
$fontawesome_version = $params->get('fontawesome-version');
$jquery_version = $params->get('jquery-version');
$typed_version = $params->get('typed-version');
$modernizr_version = $params->get('modernizr-version');
$jqueryeasingjs_version = $params->get('jqueryeasingjs-version');
$animate_version = $params->get('animate-version');
$wowjs_version = $params->get('wowjs-version');
$CountUPJs_version = $params->get('countupjs-version');
$jquerywaypoints_version = $params->get('jquerywaypoints-version');
$isotope_version = $params->get('isotope-version');
$venobox_version = $params->get('venobox-version');
$OwlCarousel_version = $params->get('owlcarousel-version');
$aos_version = $params->get('aos-version');
$ionicons_version = $params->get('ionicons-version', 1);
$scrollRevealjs_version = $params->get('scrollRevealjs-version', 1);


$dnsprefetch_yoursite = $params->get('dnsprefetch_yoursite', 1);
$dnsprefetch_custom = $params->get('dnsprefetch_custom');
$prefetch_url = $params->get('prefetch_url');
$dnsprefetch_googleapi = $params->get('dnsprefetch_googleapi', 1);
$dnsprefetch_cdnjscloudflare = $params->get('dnsprefetch_cdnjscloudflare', 1);


require ModuleHelper::getLayoutPath('mod_opensource', $params->get('layout', 'default'));

