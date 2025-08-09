<?php
/**
 * ResearchPress theme functions.
 *
 * @package research-press
 */

namespace ResearchPress;

/**
 * Add the custom post type for sources.
 */
function add_source_post_type() {
		$labels = array(
			'name'                     => _x( 'Sources', 'Post Type General Name', 'research-press' ),
			'singular_name'            => _x( 'Source', 'Post Type Singular Name', 'research-press' ),
			'add_new'                  => __( 'Add New', 'research-press' ),
			'add_new_item'             => __( 'Add New Source', 'research-press' ),
			'edit_item'                => __( 'Edit Source', 'research-press' ),
			'new_item'                 => __( 'New Source', 'research-press' ),
			'view_item'                => __( 'View Source', 'research-press' ),
			'view_items'               => __( 'View Sources', 'research-press' ),
			'search_items'             => __( 'Search Sources', 'research-press' ),
			'not_found'                => __( 'No sources found', 'research-press' ),
			'not_found_in_trash'       => __( 'No sources found in Trash', 'research-press' ),
			'all_items'                => __( 'All Sources', 'research-press' ),
			'archives'                 => __( 'Source Archives', 'research-press' ),
			'attributes'               => __( 'Source Attributes', 'research-press' ),
			'insert_into_item'         => __( 'Insert into source', 'research-press' ),
			'uploaded_to_this_item'    => __( 'Uploaded to this source', 'research-press' ),
			'menu_name'                => __( 'Sources', 'research-press' ),
			'filter_items_list'        => __( 'Filter source list', 'research-press' ),
			'filter_by_date'           => __( 'Filter sources by date', 'research-press' ),
			'items_list_navigation'    => __( 'Source list navigation', 'research-press' ),
			'items_list'               => __( 'Source list', 'research-press' ),
			'item_published'           => __( 'Source published', 'research-press' ),
			'item_published_privately' => __( 'Source published privately', 'research-press' ),
			'item_reverted_to_draft'   => __( 'Source reverted to draft', 'research-press' ),
			'item_trashed'             => __( 'Source trashed', 'research-press' ),
			'item_scheduled'           => __( 'Source scheduled', 'research-press' ),
			'item_updated'             => __( 'Source updated', 'research-press' ),
			'item_link'                => __( 'Source link', 'research-press' ),
			'item_link_description'    => __( 'A link to a source', 'research-press' ),
		);
		$args   = array(
			'labels'        => $labels,
			'description'   => __( 'A research source summary', 'research-press' ),
			'public'        => true,
			'hierarchical'  => false,
			'show_in_rest'  => true,
			'menu_position' => 2,
			'menu_icon'     => 'dashicons-book',
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'taxonomies'    => array( 'person', 'organization', 'topic', 'location', 'source_type' ),
			'has_archive'   => true,
			'can_export'    => true,
			'template'      => array( array( 'research-press/source-summary' ) ),
		);
		register_post_type( 'source', $args );
		flush_rewrite_rules();
}
add_action( 'init', __NAMESPACE__ . '\add_source_post_type', 0 );


/**
 * Add Person taxonomy.
 */
function add_person_taxonomy() {
	$labels = array(
		'name'                       => 'Persons',
		'singular_name'              => 'Person',
		'search_items'               => 'Search Persons',
		'popular_items'              => 'Popular Persons',
		'all_items'                  => 'All Persons',
		'edit_item'                  => 'Edit Person',
		'view_item'                  => 'View Person',
		'update_item'                => 'Update Person',
		'add_new_item'               => 'Add New Person',
		'new_item_name'              => 'New Person Name',
		'template_name'              => 'Person Archives',
		'separate_items_with_commas' => 'Separate each person with a comma',
		'add_or_remove_items'        => 'Add or remove persons',
		'choose_from_most_used'      => 'Choose from most used persons',
		'not_found'                  => 'No persons found',
		'no_terms'                   => 'No persons',
		'items_list_navigation'      => 'Persons List',
		'items_list'                 => 'Persons List',
		'back_to_items'              => 'Back to Persons',
		'item_link'                  => 'Person Link',
		'item_link_description'      => 'A link to a person',
	);
	$args   = array(
		'labels'            => $labels,
		'description'       => 'Persons associated with this source.',
		'public'            => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'persons', 'source', $args );
}
add_action( 'init', __NAMESPACE__ . '\add_person_taxonomy', 0 );


/**
 * Add Organization taxonomy.
 */
function add_organization_taxonomy() {
	$labels = array(
		'name'                       => 'Organizations',
		'singular_name'              => 'Organization',
		'search_items'               => 'Search Organizations',
		'popular_items'              => 'Popular Organizations',
		'all_items'                  => 'All Organizations',
		'edit_item'                  => 'Edit Organization',
		'view_item'                  => 'View Organization',
		'update_item'                => 'Update Organization',
		'add_new_item'               => 'Add New Organization',
		'new_item_name'              => 'New Organization Name',
		'template_name'              => 'Organization Archives',
		'separate_items_with_commas' => 'Separate each organization with a comma',
		'add_or_remove_items'        => 'Add or remove organizations',
		'choose_from_most_used'      => 'Choose from most used organizations',
		'not_found'                  => 'No organizations found',
		'no_terms'                   => 'No organizations',
		'items_list_navigation'      => 'Organizations List',
		'items_list'                 => 'Organizations List',
		'back_to_items'              => 'Back to Organizations',
		'item_link'                  => 'Organization Link',
		'item_link_description'      => 'A link to an organization',
	);
	$args   = array(
		'labels'            => $labels,
		'description'       => 'Organizations associated with this source.',
		'public'            => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'organizations', 'source', $args );
}
add_action( 'init', __NAMESPACE__ . '\add_organization_taxonomy', 0 );


/**
 * Add Topics taxonomy.
 */
function add_topics_taxonomy() {
	$labels = array(
		'name'                       => 'Topics',
		'singular_name'              => 'Topic',
		'search_items'               => 'Search Topics',
		'popular_items'              => 'Popular Topics',
		'all_items'                  => 'All Topics',
		'edit_item'                  => 'Edit Topic',
		'view_item'                  => 'View Topic',
		'update_item'                => 'Update Topic',
		'add_new_item'               => 'Add New Topic',
		'new_item_name'              => 'New Topic Name',
		'template_name'              => 'Topic Archives',
		'separate_items_with_commas' => 'Separate each topic with a comma',
		'add_or_remove_items'        => 'Add or remove topics',
		'choose_from_most_used'      => 'Choose from most used topics',
		'not_found'                  => 'No topics found',
		'no_terms'                   => 'No topics',
		'items_list_navigation'      => 'Topics List',
		'items_list'                 => 'Topics List',
		'back_to_items'              => 'Back to Topics',
		'item_link'                  => 'Topic Link',
		'item_link_description'      => 'A link to a topic',
	);
	$args   = array(
		'labels'            => $labels,
		'description'       => 'Topics associated with this source.',
		'public'            => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'topics', 'source', $args );
}
add_action( 'init', __NAMESPACE__ . '\add_topics_taxonomy', 0 );


/**
 * Add Locations taxonomy.
 */
function add_locations_taxonomy() {
	$labels = array(
		'name'                       => 'Locations',
		'singular_name'              => 'Location',
		'search_items'               => 'Search Locations',
		'popular_items'              => 'Popular Locations',
		'all_items'                  => 'All Locations',
		'edit_item'                  => 'Edit Location',
		'view_item'                  => 'View Location',
		'update_item'                => 'Update Location',
		'add_new_item'               => 'Add New Location',
		'new_item_name'              => 'New Location Name',
		'template_name'              => 'Location Archives',
		'separate_items_with_commas' => 'Separate each location with a comma',
		'add_or_remove_items'        => 'Add or remove locations',
		'choose_from_most_used'      => 'Choose from most used locations',
		'not_found'                  => 'No locations found',
		'no_terms'                   => 'No locations',
		'items_list_navigation'      => 'Locations List',
		'items_list'                 => 'Locations List',
		'back_to_items'              => 'Back to Locations',
		'item_link'                  => 'Location Link',
		'item_link_description'      => 'A link to a location',
	);
	$args   = array(
		'labels'            => $labels,
		'description'       => 'Locations associated with this source.',
		'public'            => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'locations', 'source', $args );
}
add_action( 'init', __NAMESPACE__ . '\add_locations_taxonomy', 0 );


/**
 * Add hierarchical taxonomy for source types (e.g., book, article, etc.).
 */
function add_source_types_taxonomy() {
	$labels = array(
		'name'                  => 'Source Types',
		'singular_name'         => 'Source Type',
		'search_items'          => 'Search Source Types',
		'popular_items'         => 'Popular Source Types',
		'all_items'             => 'All Source Types',
		'parent_item'           => 'Parent Source Type',
		'parent_item_colon'     => 'Parent Source Type:',
		'edit_item'             => 'Edit Source Type',
		'view_item'             => 'View Source Type',
		'update_item'           => 'Update Source Type',
		'add_new_item'          => 'Add New Source Type',
		'new_item_name'         => 'New Source Type Name',
		'template_name'         => 'Source Type Archives',
		'not_found'             => 'No source types found',
		'no_terms'              => 'No source types',
		'filter_by_item'        => 'Filter by source type',
		'items_list_navigation' => 'Source Types List',
		'items_list'            => 'Source Types List',
		'back_to_items'         => 'Back to Source Types',
		'item_link'             => 'Source Type Link',
		'item_link_description' => 'A link to a location',
	);
	$args   = array(
		'labels'            => $labels,
		'description'       => 'Source types associated with this source.',
		'public'            => true,
		'hierarchical'      => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'source_types', 'source', $args );
}
add_action( 'init', __NAMESPACE__ . '\add_source_types_taxonomy', 0 );


/**
 * Render edit UI for source taxonomies.
 *
 * @param WP_Term $term The taxonomy term to edit.
 */
function edit_taxonomy_fields( $term ) {
	$job_title = get_term_meta( $term->term_id, 'job_title', true );
	$email     = get_term_meta( $term->term_id, 'email', true );
	$facebook  = get_term_meta( $term->term_id, 'facebook', true );
	$twitter   = get_term_meta( $term->term_id, 'twitter', true );
	$instagram = get_term_meta( $term->term_id, 'instagram', true );
	$website   = get_term_meta( $term->term_id, 'website', true );
	$photo     = get_term_meta( $term->term_id, 'photo', true );
	?>
	<tr class="form-field term-job-title-wrap">
		<th><label for="job-title">Job Title</label></th>
		<td><input name="job-title" id="job-title" type="text" value="<?php echo esc_attr( $job_title ? $job_title : '' ); ?>"><?php wp_nonce_field( 'fields', '_nonce' ); ?></td>
	</tr>
	<tr class="form-field term-email-wrap">
		<th><label for="email">Email</label></th>
		<td><input name="email" id="email" type="email" value="<?php echo esc_attr( $email ? $email : '' ); ?>"></td>
	</tr>
	<tr class="form-field term-facebook-wrap">
		<th><label for="facebook">Facebook</label></th>
		<td><input name="facebook" id="facebook" type="url" value="<?php echo esc_url( $facebook ? $facebook : '' ); ?>"></td>
	</tr>
	<tr class="form-field term-twitter-wrap">
		<th><label for="twitter">Twitter Handle</label></th>
		<td><input name="twitter" id="twitter" type="text" value="<?php echo esc_attr( $twitter ? $twitter : '' ); ?>"></td>
	</tr>
	<tr class="form-field term-instagram-wrap">
		<th><label for="instagram">Instagram Handle</label></th>
		<td><input name="instagram" id="instagram" type="text" value="<?php echo esc_attr( $instagram ? $instagram : '' ); ?>"></td>
	</tr>
	<tr class="form-field term-website-wrap">
		<th><label for="website">Website</label></th>
		<td><input name="website" id="website" type="url" value="<?php echo esc_url( $website ? $website : '' ); ?>"</td>
	</tr>
	<tr class="form-field term-group-wrap">
	<th scope="row">
		<label for="photo">Photo</label>
	</th>
	<td>
		<input type="hidden" id="photo" name="photo" value="<?php echo esc_attr( $photo ? $photo : '' ); ?>">
		<div id="photo-wrapper">
		<?php if ( $photo ) { ?>
				<?php echo wp_get_attachment_image( $photo, 'thumbnail' ); ?>
		<?php } ?>
		</div>
		<p>
		<input type="button" class="button button-secondary" id="media_button" name="media_button" value="Add Image">
		<input type="button" class="button button-secondary" id="media_remove" name="media_remove" value="Remove Image">
		</p>
	</td>
	</tr>

	<?php
}
add_action( 'persons_edit_form_fields', __NAMESPACE__ . '\edit_taxonomy_fields' );
add_action( 'organizations_edit_form_fields', __NAMESPACE__ . '\edit_taxonomy_fields' );
add_action( 'locations_edit_form_fields', __NAMESPACE__ . '\edit_taxonomy_fields' );
add_action( 'topics_edit_form_fields', __NAMESPACE__ . '\edit_taxonomy_fields' );


/**
 * Add taxonomy fields to term form.
 */
function add_taxonomy_fields() {
	?>
	<div class="form-field term-job-title-wrap">
		<label for="job-title">Job Title</label>
		<input name="job-title" id="job-title" type="text" value="">
		<?php wp_nonce_field( 'fields', '_nonce' ); ?>
	</div>
	<div class="form-field term-email-wrap">
		<label for="email">Email</label>
		<input name="email" id="email" type="email" value="">
	</div>
	<div class="form-field term-facebook-wrap">
		<label for="facebook">Facebook</label>
		<input name="facebook" id="facebook" type="url" value="">
	</div>
	<div class="form-field term-twitter-wrap">
		<label for="twitter">Twitter Handle</label>
		<input name="twitter" id="twitter" type="text" value="">
	</div>
	<div class="form-field term-instagram-wrap">
		<label for="instagram">Instagram Handle</label>
		<input name="instagram" id="instagram" type="text" value="">
	</div>
	<div class="form-field term-website-wrap">
		<label for="website">Website</label>
		<input name="website" id="website" type="url" value="">
	</div>
	<div class="form-field term-group-wrap">
	<label for="photo">Photo</label>
	<input type="hidden" id="photo" name="photo" value="">
	<div id="photo-wrapper"></div>
	<p>
		<input type="button" class="button button-secondary" id="media_button" name="media_button" value="Add Image">
		<input type="button" class="button button-secondary" id="media_remove" name="media_remove" value="Remove Image">
	</p>
	</div>

	<?php
}
add_action( 'persons_add_form_fields', __NAMESPACE__ . '\add_taxonomy_fields' );
add_action( 'organizations_add_form_fields', __NAMESPACE__ . '\add_taxonomy_fields' );
add_action( 'locations_add_form_fields', __NAMESPACE__ . '\add_taxonomy_fields' );
add_action( 'topics_add_form_fields', __NAMESPACE__ . '\add_taxonomy_fields' );


/**
 * Save term data for source taxonomies.
 *
 * @param int $term_id The term ID to save.
 */
function save_taxonomy_fields( $term_id ) {
	if ( ! empty( $_POST ) && check_admin_referer( 'fields', '_nonce' ) ) {
		$email     = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
		$title     = sanitize_text_field( wp_unslash( $_POST['job-title'] ?? '' ) );
		$facebook  = sanitize_url( wp_unslash( $_POST['facebook'] ?? '' ) );
		$twitter   = sanitize_text_field( wp_unslash( $_POST['twitter'] ?? '' ) );
		$instagram = sanitize_url( wp_unslash( $_POST['instagram'] ?? '' ) );
		$website   = sanitize_url( wp_unslash( $_POST['website'] ?? '' ) );
		$photo     = sanitize_url( wp_unslash( $_POST['photo'] ?? '' ) );
		if ( ! empty( $email ) ) {
			add_term_meta( $term_id, 'email', sanitize_email( $email ), true );
		}
		if ( ! empty( $title ) ) {
			add_term_meta( $term_id, 'job_title', sanitize_text_field( $title ), true );
		}
		if ( ! empty( $facebook ) ) {
			add_term_meta( $term_id, 'facebook', sanitize_text_field( $facebook ), true );
		}
		if ( ! empty( $twitter ) ) {
			add_term_meta( $term_id, 'twitter', sanitize_text_field( $twitter ), true );
		}
		if ( ! empty( $instagram ) ) {
			add_term_meta( $term_id, 'instagram', sanitize_text_field( $instagram ), true );
		}
		if ( ! empty( $website ) ) {
			add_term_meta( $term_id, 'website', sanitize_url( $website ), true );
		}
		if ( ! empty( $photo ) ) {
			add_term_meta( $term_id, 'photo', preg_replace( '/[^0-9]/', '', $photo ), true );
		}
	}
}
add_action( 'created_persons', __NAMESPACE__ . '\save_taxonomy_fields', 10, 2 );
add_action( 'created_organizations', __NAMESPACE__ . '\save_taxonomy_fields', 10, 2 );
add_action( 'created_locations', __NAMESPACE__ . '\save_taxonomy_fields', 10, 2 );
add_action( 'created_topics', __NAMESPACE__ . '\save_taxonomy_fields', 10, 2 );


/**
 * Update source taxonomy fields.
 *
 * @param int $term_id The term ID to update.
 */
function update_taxonomy_fields( $term_id ) {
	if ( ! empty( $_POST && check_admin_referer( 'fields', '_nonce' ) ) ) {
		$email     = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
		$title     = sanitize_text_field( wp_unslash( $_POST['job-title'] ?? '' ) );
		$facebook  = sanitize_url( wp_unslash( $_POST['facebook'] ?? '' ) );
		$twitter   = sanitize_text_field( wp_unslash( $_POST['twitter'] ?? '' ) );
		$instagram = sanitize_url( wp_unslash( $_POST['instagram'] ?? '' ) );
		$website   = sanitize_url( wp_unslash( $_POST['website'] ?? '' ) );
		$photo     = sanitize_url( wp_unslash( $_POST['photo'] ?? '' ) );
		if ( ! empty( $email ) ) {
			update_term_meta( $term_id, 'email', sanitize_email( $email ) );
		} else {
			update_term_meta( $term_id, 'email', '' );
		}
		if ( ! empty( $title ) ) {
			update_term_meta( $term_id, 'job_title', sanitize_text_field( $title ) );
		} else {
			update_term_meta( $term_id, 'job_title', '' );
		}
		if ( ! empty( $facebook ) ) {
			update_term_meta( $term_id, 'facebook', sanitize_text_field( $facebook ) );
		} else {
			update_term_meta( $term_id, 'facebook', '' );
		}
		if ( ! empty( $twitter ) ) {
			update_term_meta( $term_id, 'twitter', sanitize_text_field( $twitter ) );
		} else {
			update_term_meta( $term_id, 'twitter', '' );
		}
		if ( ! empty( $instagram ) ) {
			update_term_meta( $term_id, 'instagram', sanitize_text_field( $instagram ) );
		} else {
			update_term_meta( $term_id, 'instagram', '' );
		}
		if ( ! empty( $website ) ) {
			update_term_meta( $term_id, 'website', sanitize_url( $website ) );
		} else {
			update_term_meta( $term_id, 'website', '' );
		}
		if ( ! empty( $photo ) ) {
			update_term_meta( $term_id, 'photo', preg_replace( '/[^0-9]/', '', $photo ) );
		} else {
			update_term_meta( $term_id, 'photo', '' );
		}
	}
}
add_action( 'edited_persons', __NAMESPACE__ . '\update_taxonomy_fields', 10, 2 );
add_action( 'edited_organizations', __NAMESPACE__ . '\update_taxonomy_fields', 10, 2 );
add_action( 'edited_locations', __NAMESPACE__ . '\update_taxonomy_fields', 10, 2 );
add_action( 'edited_topics', __NAMESPACE__ . '\update_taxonomy_fields', 10, 2 );


/**
 * Remove default post and comment edit menus.
 */
function remove_menus() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', __NAMESPACE__ . '\remove_menus', 10, 2 );

/**
 * Remove annoying metaboxes on admin dashboard.
 */
function remove_admin_meta() {
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
}
add_action( 'admin_init', __NAMESPACE__ . '\remove_admin_meta' );

/**
 * Remove items from admin bar.
 */
function remove_new_post_from_admin_bar() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'new-post' );
	$wp_admin_bar->remove_menu( 'new-media' );
	$wp_admin_bar->remove_menu( 'new-page' );
	$wp_admin_bar->remove_menu( 'new-user' );
}
add_action( 'wp_before_admin_bar_render', __NAMESPACE__ . '\remove_new_post_from_admin_bar' );


/**
 * Register blocks.
 */
function register_theme_blocks() {
	$build_directory = get_template_directory() . '/build';
	$block_manifest  = $build_directory . '/blocks-manifest.php';
	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
			wp_register_block_types_from_metadata_collection( $build_directory, $block_manifest );
	} else {
		if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
			wp_register_block_metadata_collection( $build_directory, $block_manifest );
		}
		$manifest_data = require $block_manifest;
		foreach ( array_keys( $manifest_data ) as $block_type ) {
			register_block_type( "$build_directory/{$block_type}" );
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_theme_blocks' );
