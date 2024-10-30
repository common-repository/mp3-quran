<?php
/**
 * @package Mp3Quran Translations by TrueMuslims.Net
 * @version 1.1.2
 */
/*
 * Plugin Name:       Mp3Quran English Translation By TrueMuslims.Net
 * Plugin URI:        http://www.truemuslims.net
 * Description:       Mp3 Quran in all languages and in the voice of 54 Reciters.
 * Version:           1.1.2
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            TrueMuslims.Net IT Support
 * Author URI:        https://www.truemuslims.net/Contact.php
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://wordpress.org/plugins/mp3-quran/
 * Text Domain:       mp3quran-english-translation-by-truemuslims.Net
 * Domain Path:       /languages
 */
/* 
this information for playlist.php
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
include('functions.php');
register_activation_hook(__FILE__,'mp3_playlist_plugin_install'); 


//header("Access-Control-Allow-Origin: *"); 

// function add_cors_http_header(){
//     header("Access-Control-Allow-Origin: *");
// }
// add_action('init','add_cors_http_header');
// add_filter( 'allowed_http_origins', 'add_allowed_origins' );
// function add_allowed_origins( $origins ) {
//     $origins[] = 'http://www.truemuslims.net';
//     $origins[] = 'https://www.truemuslims.net/';
//     return $origins;
// }

// function mp3_playlist_plugin_scripts(){ code by umar
// 	wp_register_script('mp3_playlist_plugin_scripts',plugin_dir_url( __FILE__ ).'js/js.js',array('jquery'));
// 	wp_enqueue_script('mp3_playlist_plugin_scripts');
// }
// add_action('wp_enqueue_scripts','mp3_playlist_plugin_scripts'); 






function mp3_playlist_plugin_scripts(){
	wp_register_script('mp3_playlist_plugin_scripts',plugin_dir_url( __FILE__ ).'js/js.js',array('jquery'));
	wp_enqueue_script('mp3_playlist_plugin_scripts');
}
add_action('wp_enqueue_scripts','mp3_playlist_plugin_scripts'); 

function mp3_playlist_plugin_styles() {
	wp_register_style( 'mp3-playlist-styles', plugin_dir_url( __FILE__ ).'style.css' );
	wp_enqueue_style( 'mp3-playlist-styles' );
	wp_register_style( 'Font_Awesome', plugin_dir_url( __FILE__ ).'font-awesome.min.css' );
	wp_enqueue_style( 'Font_Awesome' );
}
add_action( 'wp_enqueue_scripts', 'mp3_playlist_plugin_styles' );

//$language_id = get_option('mp3_playlist_form');
add_filter('plugin_action_links_mp3-quran/playlist.php', 'mp3_playlist_action_links');
function mp3_playlist_action_links($links)
{
	$mp3_links = array(
		'<a href="' . admin_url('admin.php?page=mp3-playlist-edit') . '">Settings</a>'
	);
	return array_merge($links, $mp3_links);
}
function mp3Translations_sounds_loop($attr,$content=null){
	global $sora_names;
    $atts = shortcode_atts(
		array(
			'language' => 'English',
		), $atts
	);

	$language_id = $content;//$atts['language'];//"English";//strip_tags($language);
	$moshafcount = count(mp3Translations_get_languages('', '', 1));
	$nl = "\n";

	$code = '';

// 	if($language_id > $moshafcount){
// 		$code .= '<p>Not found this id <strong>'.intval($language_id).'</strong></p>';
// 	}else{
	    $language_detail = mp3Translations_get_languages($language_id);
		$id = $language_detail["path"];
		$mp3Translationsgetsounds = mp3Translations_get_sounds($id);

		$arrayname = mp3Translations_get_sounds($id);
		$mp3Translationscountsounds = count($mp3Translationsgetsounds);
		$countsounds = count($mp3Translationsgetsounds);

        $twiter_url = "https://twitter.com/MP3_Quran";
        $facebook_url = "https://www.facebook.com/freeMP3Quran/";
        //$gplus_url = "https://plus.google.com/+TruemuslimsNet-Mp3Quran";
        $youtube_url = "https://www.youtube.com/c/QuranMp3TrueMuslims";
        $android_url = "https://play.google.com/store/apps/details?id=mp3.quran2";
        $ios_url = "https://itunes.apple.com/us/app/quran-mp3-quran-in-all-languages/id1235823046?ls=1&mt=8";
        $ms_url = "https://www.microsoft.com/en-us/store/p/mp3-quran-in-all-languages/9pmbbm5184w9";
        
		$show_playlist_rss = '<a target="_blank" href="'.$twiter_url.'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/twitter.png" alt="'.$language_detail["title"].' Twitter" title="Follow Us On Twitter" /></a>'; 
		$show_playlist_podcast = '<a target="_blank" href="'.$facebook_url.'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/facebook.png" alt="'.$language_detail["title"].' Facebook" title="Like Our Facebook Page" /></a>'; 
		//$show_playlist_txt = '<a target="_blank" href="'.$gplus_url.'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/google+.png" alt="'.$language_detail["title"].' G+" title="Follow Us On G+ Page" /></a>'; 
		$show_playlist_MediaPlayer = '<a target="_blank" href="'.$youtube_url.'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/youtube.png" alt="'.$language_detail["title"].' Youtube" title="Subscribe With Our Channel On Youtube" /></a>'; 
		$show_playlist_QuickTime = '<a target="_blank" href="'.$android_url.'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/Android.png" alt="'.$language_detail["title"].' Android" title="Android Apps On Google Play" /></a>'; 
		$show_playlist_realplayer = '<a target="_blank" href="'.$ios_url.'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/Apple.png" alt="'.$language_detail["title"].' Apple" title="iOS Apps On Apple Store" /></a>'; 
		$show_playlist_Winamp = '<a target="_blank" href="'.$ms_url.'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/Microsoft-Store.png" alt="'.$language_detail["title"].' MS" title="Window Mobile Apps On Microsoft Store" /></a>'; 

		$pdf = $show_playlist_rss; 
		$rss = $show_playlist_podcast; 
		$podcast = $show_playlist_txt; 
		$txt = $show_playlist_MediaPlayer; 
		$mediaplayer = $show_playlist_QuickTime; 
		$quicktime = $show_playlist_realplayer; 
		$realplayer = $show_playlist_Winamp; 

		$img = ''.trailingslashit(plugins_url(null,__FILE__)).'images/Download-file.png';

        $play_icon = ''.trailingslashit(plugins_url(null,__FILE__)).'images/Download-file.png';
		$code .= '<div class="view_all_surh">';
		$code .= '<div class="icons">'.$mediaplayer.' '.$quicktime.' '.$realplayer.' '.$pdf.' '.$rss.' '.$podcast.' '.$txt.' </div>'.$nl;
// 		if($language_detail["language"] == $language_detail["title"]){
// 			$code .= '<h2>'.$language_detail["title"].'</h2>'.$nl;
// 		}else{
		    $code .= '<h1>'.$language_detail["title"].'</h1>'.$nl;
// 			$code .= '<h2>'.$language_detail["language"].' - '.$language_detail["title"].'</h2>'.$nl;
	//	}
		$code .= '<ul>'.$nl;
		for ($i=0; $i<$countsounds; $i++) {
			if($countsounds == $i+1){ $addcomma = ''; }else{ $addcomma = ','; }

			if (is_numeric($arrayname[$i][0])) { $surhname = $sora_names[$arrayname[$i][0]]; $suranid = $arrayname[$i][0]; }else{ $surhname = $arrayname[$i][0]; $suranid = $i+1; }

            $bars = '<div class="visualiser-bg pause_btn" hidden onClick="javascript:pauseSurah(this);"><div class="visualiser"><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span></div></div>';
            $play = '<div class="visualiser-bg play_btn" onClick="javascript:playSurah(this);"><div class="playsura"><i class="fa fa-play"></i></div></div>';
            $audio = '<audio class="surah_audio" preload="none" onplay="javascript:onAudioPlay(this);" onpause="javascript:onAudioPause(this);"  id="surah_'.$suranid.'"><source type="audio/mpeg" src="'.$arrayname[$i][1].'" /></audio>';
// 			$code .= '<li id="element'.$suranid.'" onClick="javascript:changeText('.$suranid.', \''.$surhname.'\', \''.$arrayname[$i][1].'\', \''.$arrayname[$i][2].'\', \''.$img.'\')">'.$suranid.'- '.$surhname.'</li>'.$nl;   
            $code .= '<li id="element'.$suranid.'">'.$suranid.'- '.$surhname.$play.$bars.$audio.'</li>'.$nl;
            
		}
		$code .= '</ul>'.$nl;
		$code .= '</div>'.$nl;
//	}

	return $code;
}

function mp3_playlist_content_replace ($text){
$text = preg_replace('/mp3_playlist\[([0-9]*?)\]/e','mp3Translations_sounds_loop(\\1)',$text);
return $text;
	
}
add_shortcode('mp3Quran', 'mp3Translations_sounds_loop');
//add_filter('the_content','mp3_playlist_content_replace');

add_action( 'admin_menu', 'mp3_playlist_menu' );

function mp3_playlist_menu() {
	add_menu_page( 'Mp3 Quran', 'Mp3 Quran', 'manage_options', 'mp3-playlist-edit', 'mp3_playlist_options', ''.trailingslashit(plugins_url(null,__FILE__)).'/images/quran.png' );
}

function mp3_playlist_options() {
	global $languages;
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die();
	}
	$playlist_title = strip_tags(get_option('playlist_title'));
	?>
	
	<h2>Mp3 Quran Translation By TrueMuslims.Net</h2>

    <div style="display:flex;">
      <div style="flex: 50%;margin:5px;">
        <h2>Mp3 Quran Languages</h2>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Arabic[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Albanian[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Azeri[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Azerbaijan[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Bangla[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Brazilian[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Balochi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Bosnian[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Chichewa[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Chinese[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Dutch[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]English[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Filipino[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]French[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Gujarati[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]German[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Greek[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Hausa[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Hindi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Indonesian[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Italian[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Kashmiri[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Kanada[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Korean[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Kurdish[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Maranao[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Maranao-1[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mexico[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Malayalam[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Marathi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Punjabi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Pashto[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Persian[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Portuguese[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Russian[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Sindhi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Somali[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Spanish[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Swedish[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Tagalog[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Tamazight[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Tamil[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Thai[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Turkish[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Telugu[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Urdu[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Urdu With Arabic[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Uyghur[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Uzbek[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Vietnamese[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Yoruba[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Zulu[/mp3Quran]</span> and paste in post/page.</div>
      </div>
      <div  style="flex: 50%;margin:5px;">
        <h2>Mp3 Quran Reciters</h2>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abdul Rahman Alsudaes[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abdulbasit Abdulsamad[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abdur Rashid Sufi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Ahmed Al Ajmi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abdulaziz Al Ahmad[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abdul Wadood Haneef[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abdulbari Ath Thubaity[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abdulmohsin Al Obaikhan[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Ali Alhuthaifi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abdullah Basfer[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Ahmad Al Hawashy[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Ahmad Saber[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abdullah Khayyat[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Al Qari Yassen[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Aleyoon Alkoshi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abu Baker Shatri[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Ali Jaber[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Abdulmohsen Alqasim[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Awfeeq As Sayegh[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Emad Zuhair Hafth[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Fares Abbad[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Hani Arrifai[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Ibrahim Alakhdar[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Jamal Shaker Abdullah[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Khalid Abdulkhafi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Khalid Alqahtani[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Khalifah Al Tonaeijy[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mahmoud Khalil[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Muhammed Al Tablawi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mahmood Al Sheimy[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mishary Al Afasy[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mustafa Ismail[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mustafa Al Lahoni[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mahmood Ali Albana[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mohammad Ayyub[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Maher Al Muaiqly[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mohammed Al Minshawi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mohammad Jibreel[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mohammed Al Muhasny[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mohammed Siddiq Al Minshawi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mohammad Al Abdullah[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Mustafa Raad Al Azawi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Nabil Ar Rifai[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Saud Al Shuraim[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Shirazad Taher[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Salah Alhashim[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Salah Bukatir[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Salah Al Budair[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Saad Al Ghamdi[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Saud Al Shuraim[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Sahl Yaaseen[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Yasser Al Mazroyee[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Yahya Hawa[/mp3Quran]</span> and paste in post/page.</div>
        <div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">[mp3Quran]Zaki Daghistani[/mp3Quran]</span> and paste in post/page.</div>
      </div>
    </div>

			
			?>
	<?php
}
?>