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

	$docs = JFactory::getDocument();
	
		$protocols = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
			switch($fontawesome_site):
				case 1: 
					$docs->addCustomTag( '<script defer src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>' ); 
					$docs->addStyleSheet($protocols.'://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css' ); 
				break;
			endswitch;
			switch($jquery_site):
				case 1: 
					echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
				break;
			endswitch;
			switch($jqueryeasingjs_site):
				case 1: 
					echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>';
				break;
			endswitch;
			switch($bootstrap_site):
				case 1: 
					echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>';
					$docs->addStyleSheet( $protocols.'://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' ); 
				break;
			endswitch;
			switch($animate_site):
				case 1: 
					$docs->addStyleSheet($protocols.'://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css'); 
				break;
			endswitch;
			switch($wowjs_site):
				case 1: 
					echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>'; 
				break;
			endswitch;
			switch($CountUPJs_site):
				case 1: 
					echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.6/countUp.min.js"></script>'; 
				break;
			endswitch;			
			/*****************[Prerender and prefetch]******************/

			if($dnsprefetch_yoursite == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.JURI::base().'">');
			if($dnsprefetch_googleapi == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$protocols.'ajax.googleapis.com/">');
			if($dnsprefetch_cdnjscloudflare == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$protocols.'cdnjs.cloudflare.com/">');
			if(!empty($dnsprefetch_custom)): 
				$docs->addCustomTag('<link rel="dns-prefetch" href="'.$dnsprefetch_custom.'" />');
			endif;
			if(!empty($prefetch_url)): $docs->addCustomTag('<link rel="prefetch" href="'.$prefetch_url.'">');
			
				
				
?>
