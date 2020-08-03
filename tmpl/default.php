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

	$docs = JFactory::getDocument();
	
		$protocols = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
			switch($fontawesome_site):
				case 1: 
					$docs->addCustomTag( '<script defer src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/font-awesome/'.$fontawesome_version.'/js/all.min.js"></script>' ); 
					$docs->addStyleSheet($protocols.'://cdnjs.cloudflare.com/ajax/libs/font-awesome/'.$fontawesome_version.'/css/all.min.css' ); 
				break;
			endswitch;
			switch($jquery_site):
				case 1: 
					echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/jquery/'.$jquery_version.'/jquery.min.js"></script>';
				break;
			endswitch;
			switch($jqueryeasingjs_site):
				case 1: 
					echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/jquery-easing/'.$jqueryeasingjs_version.'/jquery.easing.min.js"></script>';
				break;
			endswitch;
			switch($bootstrap_site):
				case 1: 
					echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/'.$bootstrap_version.'/js/bootstrap.bundle.min.js"></script>';
					$docs->addStyleSheet( $protocols.'://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/'.$bootstrap_version.'/css/bootstrap.min.css' ); 
				break;
			endswitch;
			switch($animate_site):
				case 1: 
					$docs->addStyleSheet($protocols.'://cdnjs.cloudflare.com/ajax/libs/animate.css/'.$animate_version.'/animate.min.css'); 
				break;
			endswitch;
			switch($wowjs_site):
				case 1: 
					echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/wow/'.$wowjs_version.'/wow.min.js"></script>'; 
				break;
			endswitch;
			switch($CountUPJs_site):
				case 1: 
					echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/countup.js/'.$CountUPJs_version.'/countUp.min.js"></script>'; 
				break;
			endswitch;			
			/*****************[Prerender and prefetch]******************/

			if($dnsprefetch_yoursite == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.JURI::base().'">');  endif;
			if($dnsprefetch_googleapi == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$protocols.'ajax.googleapis.com">');  endif;
			if($dnsprefetch_cdnjscloudflare == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$protocols.'cdnjs.cloudflare.com">');  endif;
			if(!empty($dnsprefetch_custom)): 
				$docs->addCustomTag('<link rel="dns-prefetch" href="'.$dnsprefetch_custom.'" />');
			endif;
			if(!empty($prefetch_url)): $docs->addCustomTag('<link rel="prefetch" href="'.$prefetch_url.'">'); endif;
			
			
			if(!empty($ModOPhead_script)): $docs->addCustomTag( $ModOPhead_script ); endif;
			if(!empty($ModOPbody_script)): $ModOPbody_script; endif;
			
			

?>
