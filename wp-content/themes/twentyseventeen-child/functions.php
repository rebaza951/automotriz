<?php
/**
 * Twenty Seventeen Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_Child
 * @since 1.0
 */

/**
 * Twenty Seventeen Child only works in WordPress 4.7 or later.
 */
/**
 * JS Menu Responsive
 */
function my_menu_scripts() {
    wp_enqueue_script( 'menu-script', get_theme_file_uri() . '/js/menu.js', array( 'jquery' ), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'my_menu_scripts' );

/**
 * JS Banner Post Custom Fields
 */
function my_admin_scripts(){
  //Agregamos nuestro JS
  wp_enqueue_script( 'my_custom_fields_js', get_theme_file_uri() . '/js/custom-fields.js', array('jquery'), '1.0' );
}
add_action('admin_enqueue_scripts', 'my_admin_scripts');

/**
 * Add meta boxes JS Banner Post
 */
function my_custom_fields_metabox() {
  add_meta_box( 'custom-fields-metabox', 'Imagen Banner', 'my_custom_fields', 'post', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'my_custom_fields_metabox' );

/**
 * Vista JS Banner Post Custom Fields
 */
function my_custom_fields($post) {
  //si existen se recuperan los valores de los metadatos
  $custom_field_image = get_post_meta( $post->ID, 'custom_field_image', true );
 
  // Se añade un campo nonce para probarlo más adelante cuando validemos
  wp_nonce_field( 'custom_fields_metabox', 'custom_fields_metabox_nonce' );?>
 
  <table width="100%" cellpadding="1" cellspacing="1" border="0">
    <tr>
      	<td width="20%"><strong>Imagen</strong></td>
      	<td width="80%">
	        <div class="custom_media_item">
	          	<?php
	          	$display = "";
	          	$display2 = "";
	          	$media_item = get_post_meta( $post->ID, 'custom_field_image', true );
	          	if (empty($media_item) || $media_item == "") { $display = 'display:none';}
	          	if (!empty($media_item)) { $display2 = 'display:none';}
	          	$media_item_src = wp_get_attachment_url( $media_item );?>
				
	          	<a href="#" class="button button-primary custom_media_item_upload" style="<?php echo $display2;?>">Subir imagen</a>
	          	<input type="hidden" id="custom_field_image" name="custom_field_image" value="<?php echo $media_item;?>" />
	          	<img src="<?php echo $media_item_src;?>" style="max-width:100%;<?php echo $display;?>" />
	          	<a href="#" class="button button-primary custom_media_item_delete" style="<?php echo $display;?>">Eliminar</a>
	        </div>
      	</td>
    </tr>
  </table>
<?php }

/**
 * Save JS Banner Post Custom Fields
 */
function my_custom_fields_save_data($post_id) {
  // Comprobamos si se ha definido el nonce.
  if ( ! isset( $_POST['custom_fields_metabox_nonce'] ) ) {
    return $post_id;
  }
  $nonce = $_POST['custom_fields_metabox_nonce'];
  
  // Verificamos que el nonce es válido.
  if ( !wp_verify_nonce( $nonce, 'custom_fields_metabox' ) ) {
    return $post_id;
  }
 
  // Si es un autoguardado nuestro formulario no se enviará, ya que aún no queremos hacer nada.
  if ( defined( 'DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
    return $post_id;
  }
 
  // Comprobamos los permisos de usuario.
  if ( $_POST['post_type'] == 'page' ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
      return $post_id;
  }
  
  // Vale, ya es seguro que guardemos los datos.
  // Si existen entradas antiguas las recuperamos
  $old_custom_field_image = get_post_meta( $post_id, 'custom_field_image', true );
  // Saneamos lo introducido por el usuario.
  $custom_field_image = sanitize_text_field( $_POST['custom_field_image'] );
  // Actualizamos el campo meta en la base de datos.
  update_post_meta( $post_id, 'custom_field_image', $custom_field_image, $old_custom_field_image );
}
add_action( 'save_post', 'my_custom_fields_save_data' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 *  Widgets Header 
 */
function wpb_widgets_header() {
 
    register_sidebar( array(
        'name'          => 'Datos Header',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_header' );