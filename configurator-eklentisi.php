<?php
/*
Plugin Name: Configurator Eklentisi
Plugin URI: http://devorion.work
Description: Configurator Eklentisi
Author: Selman Demirdoven
Version: 1.0.0
Author URI: http://devorion.work
*/

if ( !defined( 'ABSPATH' ) ){
	exit;
}
if ( ! defined( 'OFFERS_PLG_DIR' ) ) {
	define( 'OFFERS_PLG_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'OFFERS_PLG_URL' ) ) {
	define( 'OFFERS_PLG_URL', plugin_dir_url( __FILE__ ) );
}

function doq_front_scripts(){
	
	wp_enqueue_script('owl-sc', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '1.0', false);
	wp_enqueue_style('owl-styles', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), '1.0');
	wp_enqueue_style('owl-styles2', OFFERS_PLG_URL . '/css/owl.carousel.min.css', array(), '1.0');

	wp_enqueue_script('orion_custom_front_script', OFFERS_PLG_URL . 'js/custom_front.js', array('jquery'), '1.0', 'all');
	//wp_enqueue_style('orion-front-styles', OFFERS_PLG_URL.'css/front.css', array(), '1.0');
	
	
	wp_localize_script( 'orion_custom_front_script', 'frontend_ajax_object',
        array( 
            'ajaxurl' => admin_url( 'admin-ajax.php' )
        )
    );
	
}
add_action('wp_enqueue_scripts', 'doq_front_scripts');

function orion_conf_admin_head() {
	?>
	<style>
table.detaylar_tablo {
    width: 100%;
}
table.detaylar_tablo > tbody > tr > td:first-child {
	background: #595959;
	color: #fff;
	padding: 0 10px;
}
table.detaylar_tablo > tbody > tr td > table {
	background: #dfdfdf;
	width: 100%;
}
table.detaylar_tablo > tbody > tr > td {
    border: 0px solid #2a2a2a;
}
table.detaylar_tablo > tbody > tr td td {
    padding: 0 6px;
}
table.detaylar_tablo > tbody > tr td tr td:first-child {
    width: 140px;
    line-height: 1;
}
	</style>
	<?php
}
add_action('admin_head', 'orion_conf_admin_head');

function orion_kullanim_alani_tax() {
	$actors_taxonomy_exist = taxonomy_exists( 'kullanim_alani' );
	if( !$actors_taxonomy_exist ){
		$args = array(
			'label'        => 'Kullanım Alanı',
			'public'       => true,
			'rewrite'      => false,
			'hierarchical' => false,
			'show_admin_column' => true
		);
		register_taxonomy( 'kullanim_alani', 'product', $args );
	}
}
add_action( 'init', 'orion_kullanim_alani_tax', 0 );

function urun_detaylar_mb() {
	
	add_meta_box(
        'detaylar_div',
        'Detaylar',
        'detaylar_mb_cb',
        'product',
        'normal',
        'high'
	);
}
add_action( 'add_meta_boxes', 'urun_detaylar_mb' );

function detaylar_mb_cb(){
	global $post;
	wp_nonce_field( 'theme_meta_box_nonce', 'meta_box_nonce' );
	$kullanim_yeri = get_post_meta( $post->ID, 'kullanim_yeri', true );
	$alerjen = get_post_meta( $post->ID, 'alerjen', true );
	$olcu_gramaji = get_post_meta( $post->ID, 'olcu_gramaji', true );
	$enerji = get_post_meta( $post->ID, 'enerji', true );
	$protein = get_post_meta( $post->ID, 'protein', true );
	$yag = get_post_meta( $post->ID, 'yag', true );
	$doymus_yag = get_post_meta( $post->ID, 'doymus_yag', true );
	$trans_yag = get_post_meta( $post->ID, 'trans_yag', true );
	$kolesterol = get_post_meta( $post->ID, 'kolesterol', true );
	$karbonhidrat = get_post_meta( $post->ID, 'karbonhidrat', true );
	$lif = get_post_meta( $post->ID, 'lif', true );
	$seker = get_post_meta( $post->ID, 'seker', true );
	$sodyum = get_post_meta( $post->ID, 'sodyum', true );
	$potasyum = get_post_meta( $post->ID, 'potasyum', true );
	$kalsiyum = get_post_meta( $post->ID, 'kalsiyum', true );
	$cinko = get_post_meta( $post->ID, 'cinko', true );
	$magnezyum = get_post_meta( $post->ID, 'magnezyum', true );
	$demir = get_post_meta( $post->ID, 'demir', true );
	$fosfor = get_post_meta( $post->ID, 'fosfor', true );
	$biyotin = get_post_meta( $post->ID, 'biyotin', true );
	$folik_asit = get_post_meta( $post->ID, 'folik_asit', true );
	$icindekiler = get_post_meta($post->ID, 'icindekiler', true);
	?>
	<style>
	.ap, .ev, .of, .du {
		display: none;
	}
	<?php
	if( $kullanim_yeri && $kullanim_yeri!='' ){
		?>
		.<?php echo $kullanim_yeri; ?> {
			display: table-row;
		}
		<?php
	}else{
		?>
		.ap {
			display: table-row;
		}
		<?php
	}
	?>
	</style>
	<table class="detaylar_tablo">
		<tr class="ilktr">
			<td>Kullanım Yeri</td>
			<td>
				<table>
					<tr>
						<td style="padding: 0 1px;">
							<select name="kullanim_yeri">
								<option value="ap" <?php selected($kullanim_yeri, 'ap'); ?>>Apartman</option>
								<option value="ev" <?php selected($kullanim_yeri, 'ev'); ?>>Ev</option>
								<option value="of" <?php selected($kullanim_yeri, 'of'); ?>>Ofis</option>
								<option value="du" <?php selected($kullanim_yeri, 'du'); ?>>Dükkan</option>
							</select>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="ap ev of du">
			<td>İzinsiz Giriş Koruması</td>
			<td>
				<table>
					<tr class="ap">
						<td>Apartman Katı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="ap">
						<td>Oda Sayısı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="ev of du">
						<td>Mutfak dahil oda sayısı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="ev of du">
						<td>Giriş sayısı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="ev of du">
						<td>Kat sayısı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="of">
						<td>Ofis katı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="du">
						<td>Alan boyutu (m2)</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					
				</table>
				
			</td>
		</tr>
		<tr class="ap ev of du">
			<td>Yangın Algılama</td>
			<td>
				<table>
					<tr class="ap ev of du">
						<td>Oda sayısı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="ap ev of du">
			<td>Sızıntı Koruması</td>
			<td>
				<table>
					<tr class="ap">
						<td>Oda sayısı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="ap ev of du">
						<td>Banyo sayısı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					
				</table>
			</td>
		</tr>
		<tr class="ev of du">
			<td>Dış Mekan Güvenliği</td>
			<td>
				<table>
					<tr class="ev of du">
						<td>Kat sayısı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="ev of du">
						<td>Mutfak dahil oda sayısı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="ev of du">
						<td>Giriş sayısı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="ev of du">
						<td>Alan boyutu (m2)</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
					<tr class="of">
						<td>Ofis katı</td>
						<td><input type="number" name="" value=""/></td>
					</tr>
				</table>
			</td>
		</tr>
		
		
	</table>
<script>
(function($) {
	
	$('select[name="kullanim_yeri"]').on('change', function(){
		var val = $(this).val();
		$('.detaylar_tablo').find('tr').hide();
		$('.detaylar_tablo').find('.ilktr, .ilktr *').show();
		$('.detaylar_tablo').find('tr.'+val).show();
	});
	
})(jQuery);
</script>
	<?php
}

function product_save_metabox_callback( $post_id ) {
 
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'theme_meta_box_nonce' ) ) {
		return;
	}
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
 
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
 
    foreach( $_POST as $key => $value ){
		update_post_meta( $post_id, $key, $value );
	}
	
}
add_action( 'save_post', 'product_save_metabox_callback' );

function orion_conf_shortcode ($atts, $content = null) {	
	ob_start();
	include plugin_dir_path(__FILE__).'/conf.php';
	return ob_get_clean();
}
add_shortcode("configurator", "orion_conf_shortcode");


	
function urun_cek(){
	
	$selected_features = $_REQUEST['selected_features'];
	$selected_kullanim_alani = $_REQUEST['selected_kullanim_alani'];
	
	/*
	if(!isset($_SESSION)) { 
		session_start();
	}

	if(isset($_SESSION['secilenler'])) { 
		unset($_SESSION['secilenler']);
	}
	*/
	
	
	
	$yaz = '';
	

	/*****************************************/
	
	//echo json_encode(array('yaz' => $yaz, 'secilenler' => $_SESSION['secilenler'] ));
	echo json_encode(array('yaz' => $yaz, 'secilenler' => ''));

	wp_die();
}
add_action( 'wp_ajax_urun_cek', "urun_cek" );
add_action( 'wp_ajax_nopriv_urun_cek', "urun_cek" );

?>