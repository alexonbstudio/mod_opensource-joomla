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
	if(!empty($dnsprefetch_custom)){
		$own_cdn = $dnsprefetch_custom; 
	} else {
		$own_cdn = JURI::root(true).'/media/mod_opensource/assets'; 		
	}	
		$proto_fi = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
			switch($fontawesome_site):
				case 1: 
					$docs->addCustomTag( '<script defer src="'.$own_cdn.'/fa/js/fontawesome-all.min.js"></script>
					<script defer src="'.$own_cdn.'/fa/js/fa-v4-shims.min.js"></script>' ); 
					$docs->addStyleSheet( $own_cdn.'/fa/css/fontawesome-all.min.css' ); 
				break;
				case 2: 
					$docs->addStyleSheet('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' ); 
				break;
			endswitch;
			switch($jquery_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'code.jquery.com/jquery-1.12.4.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'code.jquery.com/jquery-1.12.4.min.js"></script>'; endif;
				break;
				case 2: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'code.jquery.com/jquery-2.2.4.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'code.jquery.com/jquery-2.2.4.min.js"></script>'; endif;
				break;
				case 3: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'code.jquery.com/jquery-3.3.1.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'code.jquery.com/jquery-3.3.1.min.js"></script>'; endif;
				break;
				case 4: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.j' );  else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.j"></script>'; endif;
				break;
				case 5: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>'; endif;
				break;
				case 6: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>'; endif;
				break;
				case 7: 
					
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>'; endif;
				break;
				case 8: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>'; endif;
				break;
				case 9: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>'; endif;
				break;
				case 10: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>'; endif;
				break;
				case 11: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js"></script>'; endif;
				break;
				case 12: 
					if($html4or5_config == 0): $docs->addScriptVersion($proto_fi.'cdn.jsdelivr.net/jquery/3.3.1/jquery.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/jquery/3.3.1/jquery.min.js"></script>'; endif;
				break;
			endswitch;
			switch($modernizr_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>'; endif;
				break;
			endswitch;
			switch($jqueryeasingjs_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>'; endif;
				break;
			endswitch;
			switch($bootstrap_site):
				case 1: 
					if($html4or5_config == 0): $docs->addScript( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js' );  else : echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>'; endif;
					$docs->addStyleSheet( $proto_fi.'cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css' ); 
				break;
			endswitch;
			/*****************[Effect]******************/

			switch($animate_site):
				case 1: 
						$docs->addStyleSheetVersion($own_cdn.'/effect/animate.css'); 
				break;
				case 2: 
						$docs->addStyleSheetVersion($own_cdn.'/effect/animate.min.css'); 
				break;
				case 3: 
						$docs->addStyleSheet($proto_fi.'cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css'); 
				break;
				case 4: 
						$docs->addStyleSheet($proto_fi.'cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'); 
				break;
			endswitch;
			switch($wowjs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($own_cdn.'/effect/wow.js' );  
					else : 
						echo "\n".'<script src="'.$own_cdn.'/effect/wow.js"></script>'; 
					endif;
				break;
				case 2: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($own_cdn.'/effect/wow.min.js' );  
					else : 
						echo "\n".'<script src="'.$own_cdn.'/effect/wow.min.js"></script>'; 
					endif;
				break;
				case 3: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'cdn.jsdelivr.net/wow/1.1.2/wow.min.js' );  
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdn.jsdelivr.net/wow/1.1.2/wow.min.js"></script>'; 
					endif;
				break;
				case 4: 
					if($html4or5_config == 0): 
						$docs->addScript($proto_fi.'cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js' );  
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>'; 
					endif;
				break;
			endswitch;
			switch($CountUPJs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/angular-countUp.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/angular-countUp.min.js"></script>'; 
					endif;
				break;
				case 2: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js"></script>'; 
					endif;
				break;
			endswitch;	
			switch($waypointsJs_site):
				
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>'; 
					endif;
				break;
			endswitch;
			switch($ParallaxJs_site):
				case 1: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/jquery.parallax.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/jquery.parallax.min.js"></script>'; 
					endif;
				break;
				case 2: 
					if($html4or5_config == 0): 
						$docs->addScriptVersion($proto_fi.'cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js' );
					else : 
						echo "\n".'<script src="'.$proto_fi.'cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>'; 
					endif;
				break;
			endswitch;					
			/*****************[Prerender and prefetch]******************/

			if($dnsprefetch_yoursite == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.JURI::base().'">'); endif;
			if($dnsprefetch_googleapi == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$proto_fi.'ajax.googleapis.com/">'); endif;
			if($dnsprefetch_bootstrapcdn == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$proto_fi.'netdna.bootstrapcdn.com/">'); endif;
			if($dnsprefetch_jquery == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$proto_fi.'code.jquery.com/">'); endif;
			if($dnsprefetch_cdnjscloudflare == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$proto_fi.'cdnjs.cloudflare.com/">'); endif;
			if($dnsprefetch_aspnetcdn == 1): $docs->addCustomTag('<link rel="dns-prefetch" href="'.$proto_fi.'ajax.aspnetcdn.com/">'); endif;
			if(!empty($dnsprefetch_custom)): 
				$docs->addCustomTag('<link rel="dns-prefetch" href="http:'.$dnsprefetch_custom.'" />');
			endif;
			if(!empty($prerender_url)): $docs->addCustomTag('<link rel="prerender" href="'.$prerender_url.'">'); endif;
			if(!empty($prefetch_url)): $docs->addCustomTag('<link rel="prefetch" href="'.$prefetch_url.'">'); endif;
			
				
				
?>
