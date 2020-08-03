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
			if($fontawesome_site == 1){
				$docs->addCustomTag( '<script defer src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/font-awesome/'.$fontawesome_version.'/js/all.min.js"></script>' ); 
				$docs->addStyleSheet($protocols.'://cdnjs.cloudflare.com/ajax/libs/font-awesome/'.$fontawesome_version.'/css/all.min.css' ); 
			}
			if($jquery_site == 1){
				echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/jquery/'.$jquery_version.'/jquery.min.js"></script>';
			}
			if($jqueryeasingjs_site == 1){
				echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/jquery-easing/'.$jqueryeasingjs_version.'/jquery.easing.min.js"></script>';
			}
			if($bootstrap_site == 1 && !empty($bootstrap_version)){
				echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/'.$bootstrap_version.'/js/bootstrap.bundle.min.js"></script>';
				$docs->addStyleSheet( $protocols.'://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/'.$bootstrap_version.'/css/bootstrap.min.css' ); 
			}
			if($animate_site == 1 && !empty($animate_version)){
				$docs->addStyleSheet($protocols.'://cdnjs.cloudflare.com/ajax/libs/animate.css/'.$animate_version.'/animate.min.css');
			}
			if($wowjs_site == 1 && !empty($wowjs_version)){
				echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/wow/'.$wowjs_version.'/wow.min.js"></script>'; 
			}
			if($CountUPJs_site == 1 && !empty($CountUPJs_version)){
				echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/countup.js/'.$CountUPJs_version.'/countUp.min.js"></script>'; 
			}	

			if($jquerywaypoints_site == 1 && !empty($jquerywaypoints_version)){
				echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/waypoints/'.$jquerywaypoints_version.'/jquery.waypoints.min.js"></script>'; 
			}

			if($isotope_site == 1 && !empty($isotope_version)){
				echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/'.$isotope_version.'/isotope.pkgd.min.js"></script>'; 
			}

			if($venobox_site == 1 && !empty($venobox_version)){
				echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/venobox/'.$venobox_version.'/venobox.min.js"></script>';
				$docs->addStyleSheet( $protocols.'://cdnjs.cloudflare.com/ajax/libs/venobox/'.$venobox_version.'/venobox.min.css' );
			}

			if($owlcarousel_site == 1 && !empty($owlcarousel_version)){
				echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/'.$owlcarousel_version.'/owl.carousel.min.js"></script>';
				$docs->addStyleSheet( $protocols.'://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/'.$owlcarousel_version.'/assets/owl.carousel.min.css' ); 
			}


			if($aos_site == 1 && !empty($aos_version)){
				echo '<script src="'.$protocols.'://cdnjs.cloudflare.com/ajax/libs/aos/'.$aos_version.'/aos.js"></script>';
				$docs->addStyleSheet( $protocols.'://cdnjs.cloudflare.com/ajax/libs/aos/'.$aos_version.'/aos.css' ); 
			}

			/*****************[Prerender and prefetch]******************/

			if($dnsprefetch_yoursite == 1){ 
				$docs->addCustomTag('<link rel="dns-prefetch" href="'.JURI::base().'">');
			}
			
			if($dnsprefetch_googleapi == 1){ 
				$docs->addCustomTag('<link rel="dns-prefetch" href="'.$protocols.'ajax.googleapis.com">');
			}
			
			if($dnsprefetch_cdnjscloudflare == 1){ 
				$docs->addCustomTag('<link rel="dns-prefetch" href="'.$protocols.'cdnjs.cloudflare.com">');
			}
			
			if(!empty($dnsprefetch_custom)){ 
				$docs->addCustomTag('<link rel="dns-prefetch" href="'.$dnsprefetch_custom.'" />');
			}
			
			if(!empty($prefetch_url)){ 
				$docs->addCustomTag('<link rel="prefetch" href="'.$prefetch_url.'">'); 
			}
			
			
			if(!empty($ModOPhead_script)){ 
				$docs->addCustomTag( $ModOPhead_script ); 
			}
			
			if(!empty($ModOPbody_script)){ 
				echo $ModOPbody_script;
			}
			
			

?>
