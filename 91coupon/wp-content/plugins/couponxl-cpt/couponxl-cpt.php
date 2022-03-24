<?php
/*
Plugin Name: Coupon XL Custom Post Types
Plugin URI: http://demo.powerthemes.club/themes/couponxl/
Description: Coupon XL custom post types and taxonomies
Version: 2.0
Author: pebas
Author URI: http://themeforest.net/user/pebas/
License: GNU General Public License version 3.0
*/

define( 'COUPONXL_CPT_DIR', plugin_dir_path( __FILE__ ) );

if ( ! function_exists( 'couponxl_post_types_and_taxonomies' ) ) {
	function couponxl_post_types_and_taxonomies() {
		$offer_args = array(
			'labels'      => array(
				'name'          => __( 'Offers', 'couponxl' ),
				'singular_name' => __( 'Offer', 'couponxl' )
			),
			'public'      => true,
			'menu_icon'   => 'dashicons-megaphone',
			'has_archive' => false,
			'supports'    => array(
				'title',
				'editor',
				'thumbnail',
				'author',
				'excerpt',
				'comments'
			)
		);
		if ( class_exists( 'ReduxFramework' ) && function_exists( 'couponxl_get_option' ) ) {
			$trans_offer = couponxl_get_option( 'trans_offer' );
			if ( ! empty( $trans_offer ) ) {
				$offer_args['rewrite'] = array( 'slug' => $trans_offer );
			}
		}
		register_post_type( 'offer', $offer_args );

		$location_args = array(
			'label'        => __( 'Location', 'couponxl' ),
			'hierarchical' => true,
			'labels'       => array(
				'name'                       => __( 'Location', 'couponxl' ),
				'singular_name'              => __( 'Location', 'couponxl' ),
				'menu_name'                  => __( 'Location', 'couponxl' ),
				'all_items'                  => __( 'All Locations', 'couponxl' ),
				'edit_item'                  => __( 'Edit Location', 'couponxl' ),
				'view_item'                  => __( 'View Location', 'couponxl' ),
				'update_item'                => __( 'Update Location', 'couponxl' ),
				'add_new_item'               => __( 'Add New Location', 'couponxl' ),
				'new_item_name'              => __( 'New Location Name', 'couponxl' ),
				'parent_item'                => __( 'Parent Location', 'couponxl' ),
				'parent_item_colon'          => __( 'Parent Location:', 'couponxl' ),
				'search_items'               => __( 'Search Locations', 'couponxl' ),
				'popular_items'              => __( 'Popular Locations', 'couponxl' ),
				'separate_items_with_commas' => __( 'Separate locations with commas', 'couponxl' ),
				'add_or_remove_items'        => __( 'Add or remove locations', 'couponxl' ),
				'choose_from_most_used'      => __( 'Choose from the most used locations', 'couponxl' ),
				'not_found'                  => __( 'No locations found', 'couponxl' ),
				'show_in_rest'               => true
			)

		);
		if ( class_exists( 'ReduxFramework' ) && function_exists( 'couponxl_get_option' ) ) {
			$trans_location = couponxl_get_option( 'trans_location' );
			if ( ! empty( $trans_location ) ) {
				$location_args['rewrite'] = array( 'slug' => $trans_location );
			}
		}
		register_taxonomy( 'location', array( 'offer' ), $location_args );

		$offer_cat_args = array(
			'label'        => __( 'Offer Categories', 'couponxl' ),
			'hierarchical' => true,
			'labels'       => array(
				'name'                       => __( 'Offer Categories', 'couponxl' ),
				'singular_name'              => __( 'Offer Category', 'couponxl' ),
				'menu_name'                  => __( 'Offer Category', 'couponxl' ),
				'all_items'                  => __( 'All Offer Categories', 'couponxl' ),
				'edit_item'                  => __( 'Edit Offer Category', 'couponxl' ),
				'view_item'                  => __( 'View Offer Category', 'couponxl' ),
				'update_item'                => __( 'Update Offer Category', 'couponxl' ),
				'add_new_item'               => __( 'Add New Offer Category', 'couponxl' ),
				'new_item_name'              => __( 'New Offer Category Name', 'couponxl' ),
				'parent_item'                => __( 'Parent Offer Category', 'couponxl' ),
				'parent_item_colon'          => __( 'Parent Offer Category:', 'couponxl' ),
				'search_items'               => __( 'Search Offer Categories', 'couponxl' ),
				'popular_items'              => __( 'Popular Offer Categories', 'couponxl' ),
				'separate_items_with_commas' => __( 'Separate offer categories with commas', 'couponxl' ),
				'add_or_remove_items'        => __( 'Add or remove offer categories', 'couponxl' ),
				'choose_from_most_used'      => __( 'Choose from the most used offer categories', 'couponxl' ),
				'not_found'                  => __( 'No offer categories found', 'couponxl' ),
			)

		);
		if ( class_exists( 'ReduxFramework' ) && function_exists( 'couponxl_get_option' ) ) {
			$trans_offer_cat = couponxl_get_option( 'trans_offer_cat' );
			if ( ! empty( $trans_offer_cat ) ) {
				$offer_cat_args['rewrite'] = array( 'slug' => $trans_offer_cat );
			}
		}
		register_taxonomy( 'offer_cat', array( 'offer' ), $offer_cat_args );

		$offer_tag_args = array(
			'label'        => __( 'Offer Tags', 'couponxl' ),
			'hierarchical' => false,
			'labels'       => array(
				'name'                       => __( 'Offer Tags', 'couponxl' ),
				'singular_name'              => __( 'Offer Tag', 'couponxl' ),
				'menu_name'                  => __( 'Offer Tag', 'couponxl' ),
				'all_items'                  => __( 'All Offer Tags', 'couponxl' ),
				'edit_item'                  => __( 'Edit Offer Tag', 'couponxl' ),
				'view_item'                  => __( 'View Offer Tag', 'couponxl' ),
				'update_item'                => __( 'Update Offer Tag', 'couponxl' ),
				'add_new_item'               => __( 'Add New Offer Tag', 'couponxl' ),
				'new_item_name'              => __( 'New Offer Tag Name', 'couponxl' ),
				'parent_item'                => __( 'Parent Offer Tag', 'couponxl' ),
				'parent_item_colon'          => __( 'Parent Offer Tag:', 'couponxl' ),
				'search_items'               => __( 'Search Offer Tags', 'couponxl' ),
				'popular_items'              => __( 'Popular Offer Tags', 'couponxl' ),
				'separate_items_with_commas' => __( 'Separate offer tags with commas', 'couponxl' ),
				'add_or_remove_items'        => __( 'Add or remove offer tags', 'couponxl' ),
				'choose_from_most_used'      => __( 'Choose from the most used offer tags', 'couponxl' ),
				'not_found'                  => __( 'No offer tags found', 'couponxl' ),
			)

		);
		if ( class_exists( 'ReduxFramework' ) && function_exists( 'couponxl_get_option' ) ) {
			$trans_offer_tag = couponxl_get_option( 'trans_offer_tag' );
			if ( ! empty( $trans_offer_tag ) ) {
				$offer_tag_args['rewrite'] = array( 'slug' => $trans_offer_tag );
			}
		}
		register_taxonomy( 'offer_tag', array( 'offer' ), $offer_tag_args );

		$store_args = array(
			'labels'       => array(
				'name'          => __( 'Stores', 'couponxl' ),
				'singular_name' => __( 'Store', 'couponxl' )
			),
			'public'       => true,
			'menu_icon'    => 'dashicons-store',
			'has_archive'  => false,
			'supports'     => array(
				'title',
				'editor',
				'thumbnail'
			),
			'show_in_rest' => true
		);
		if ( class_exists( 'ReduxFramework' ) && function_exists( 'couponxl_get_option' ) ) {
			$trans_store = couponxl_get_option( 'trans_store' );
			if ( ! empty( $trans_store ) ) {
				$store_args['rewrite'] = array( 'slug' => $trans_store );
			}
		}
		register_post_type( 'store', $store_args );

		$letter_args = array(
			'label'        => __( 'Letters', 'couponxl' ),
			'hierarchical' => true,
			'labels'       => array(
				'name'                       => __( 'Letters', 'couponxl' ),
				'singular_name'              => __( 'Letter', 'couponxl' ),
				'menu_name'                  => __( 'Letter', 'couponxl' ),
				'all_items'                  => __( 'All Letters', 'couponxl' ),
				'edit_item'                  => __( 'Edit Letter', 'couponxl' ),
				'view_item'                  => __( 'View Letter', 'couponxl' ),
				'update_item'                => __( 'Update Letter', 'couponxl' ),
				'add_new_item'               => __( 'Add New Letter', 'couponxl' ),
				'new_item_name'              => __( 'New Letter Name', 'couponxl' ),
				'parent_item'                => __( 'Parent Letter', 'couponxl' ),
				'parent_item_colon'          => __( 'Parent Letter:', 'couponxl' ),
				'search_items'               => __( 'Search Letters', 'couponxl' ),
				'popular_items'              => __( 'Popular Letters', 'couponxl' ),
				'separate_items_with_commas' => __( 'Separate letters with commas', 'couponxl' ),
				'add_or_remove_items'        => __( 'Add or remove letters', 'couponxl' ),
				'choose_from_most_used'      => __( 'Choose from the most used letters', 'couponxl' ),
				'not_found'                  => __( 'No letters found', 'couponxl' ),
			)

		);
		if ( class_exists( 'ReduxFramework' ) && function_exists( 'couponxl_get_option' ) ) {
			$trans_letter = couponxl_get_option( 'trans_letter' );
			if ( ! empty( $trans_letter ) ) {
				$letter_args['rewrite'] = array( 'slug' => $trans_letter );
			}
		}
		register_taxonomy( 'letter', array( 'store' ), $letter_args );

		register_post_type( 'voucher', array(
			'labels'       => array(
				'name'          => __( 'Vouchers', 'couponxl' ),
				'singular_name' => __( 'Voucher', 'couponxl' )
			),
			'public'       => true,
			'menu_icon'    => 'dashicons-tickets-alt',
			'has_archive'  => false,
			'supports'     => array(
				'title',
			),
			'capabilities' => array(
				'publish_posts'       => 'manage_options',
				'edit_posts'          => 'manage_options',
				'edit_others_posts'   => 'manage_options',
				'delete_posts'        => 'manage_options',
				'delete_others_posts' => 'manage_options',
				'read_private_posts'  => 'manage_options',
				'edit_post'           => 'manage_options',
				'delete_post'         => 'manage_options',
				'read_post'           => 'manage_options',
			),
		) );

		if ( class_exists( 'Seravo_Custom_Bulk_Action' ) ) {
			$bulk_actions = new Seravo_Custom_Bulk_Action( array( 'post_type' => 'voucher' ) );

			$bulk_actions->register_bulk_action( array(
				'menu_text'    => __( 'Pay To Sellers', 'couponxl' ),
				'admin_notice' => __( 'Sellers are paid', 'couponxl' ),
				'callback'     => function ( $post_ids ) {
					couponxl_pay_all_sellers( $post_ids, 'no' );

					return true;
				}
			) );

			$bulk_actions->init();
		}

	}
}
add_action( 'init', 'couponxl_post_types_and_taxonomies', 0 );

/* --------------------------------------------------------DISABLE BAR---------------------------------------------------*/
function couponxl_remove_admin_bar() {
	$user_ID    = get_current_user_id();
	$user_agent = get_user_meta( $user_ID, 'user_agent', true );
	if ( ! current_user_can( 'administrator' ) && ! is_admin() && ( ! $user_agent || $user_agent == 'no' ) ) {
		show_admin_bar( false );
	}
}

add_action( 'after_setup_theme', 'couponxl_remove_admin_bar' );

if ( ! function_exists( 'couponxl_cpt_share' ) ) {
	function couponxl_cpt_share() {
		?>
		<ul class="list-unstyled share-networks animation <?php echo is_singular( 'post' ) ? 'opened' : ''; ?>">
			<li>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ) ?>"
				   class="share"
				   target="_blank">
					<i class="fa fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( get_permalink() ) ?>" class="share"
				   target="_blank">
					<i class="fa fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink() ) ?>" class="share"
				   target="_blank">
					<i class="fa fa-google-plus"></i>
				</a>
			</li>
		</ul>

		<a href="javascript:" class="share open-share">
			<i class="fa fa-share-alt"></i>
		</a>
		<?php
	}
}

// Add custom meta boxes
/* MANAGE RATINGS */
function couponxl_ratings_box() {

	$screens = array( 'offer', 'post' );

	foreach ( $screens as $screen ) {
		add_meta_box( 'couponxl_ratings', __( 'Manage Ratings', 'couponxl' ), 'couponxl_ratings_box_populate',
			$screen );
	}
}

add_action( 'add_meta_boxes', 'couponxl_ratings_box' );

function couponxl_add_meta_box() {
	add_meta_box( 'offer_discussion', __( 'Offer Discussion', 'couponxl' ), 'couponxl_discussion_meta', 'offer' );
}

add_action( 'add_meta_boxes', 'couponxl_add_meta_box' );


/* DASHBOARD */
//add_action( 'wp_dashboard_setup', 'couponxl_dashboard_overview' );
function couponxl_dashboard_overview() {
	add_meta_box( 'couponxl_coupon_overall', __( 'Coupon', 'couponxl' ), 'couponxl_coupon_overall', 'dashboard', 'side',
		'high' );
	add_meta_box( 'couponxl_deal_overall', __( 'Deal', 'couponxl' ), 'couponxl_deal_overall', 'dashboard', 'side',
		'high' );
	add_meta_box( 'couponxl_user_overall', __( 'User', 'couponxl' ), 'couponxl_user_overall', 'dashboard', 'side',
		'high' );
	add_meta_box( 'couponxl_earnings_overall', __( 'Earnings', 'couponxl' ), 'couponxl_earnings_overall', 'dashboard',
		'side', 'high' );
}

add_action( 'wp_dashboard_setup', 'couponxl_dashboard_overview' );

function couponxl_return_tweets( $count = 1 ) {
	include_once( plugin_dir_path( __FILE__ ) . '/includes/twitter_api.php' );
	$username                  = couponxl_get_option( 'twitter-username' );
	$oauth_access_token        = couponxl_get_option( 'twitter-oauth_access_token' );
	$oauth_access_token_secret = couponxl_get_option( 'twitter-oauth_access_token_secret' );
	$consumer_key              = couponxl_get_option( 'twitter-consumer_key' );
	$consumer_secret           = couponxl_get_option( 'twitter-consumer_secret' );

	if ( ! empty( $username ) && ! empty( $oauth_access_token ) && ! empty( $oauth_access_token_secret ) && ! empty( $consumer_key ) && ! empty( $consumer_secret ) ) {
		$cache_file = dirname( __FILE__ ) . '/includes/' . 'twitter-cache.txt';
		if ( ! file_exists( $cache_file ) ) {
			file_put_contents( $cache_file, '' );
		}
		$modified = filemtime( $cache_file );
		$now      = time();
		$interval = 600; // ten minutes

		$response = json_decode( file_get_contents( $cache_file ), true );

		if ( ! $modified || empty( $response ) || ( ( $now - $modified ) > $interval ) || ! empty( $response['errors'] ) || ! empty( $response['error'] ) ) {
			$settings = array(
				'oauth_access_token'        => $oauth_access_token,
				'oauth_access_token_secret' => $oauth_access_token_secret,
				'consumer_key'              => $consumer_key,
				'consumer_secret'           => $consumer_secret,
				'username'                  => $username,
				'tweets'                    => $count
			);

			$twitter  = new TwitterAPIExchange( $settings );
			$response = $twitter->get_tweets();

			if ( $response ) {
				$cache_static = fopen( $cache_file, 'w' );
				fwrite( $cache_static, json_encode( $response ) );
				fclose( $cache_static );
			}
		}
	} else {
		$response = array( 'error' => 'NOK' );
	}

	return $response;
}

if ( ! function_exists( 'couponxl_recover_password_email' ) ) {
	function couponxl_recover_password_email() {
		$message = '';
		if ( isset( $_POST['recover_field'] ) ) {
			if ( wp_verify_nonce( $_POST['recover_field'], 'recover' ) ) {
				$email = $_POST['email'];
				if ( ! empty( $email ) ) {
					if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
						if ( email_exists( $email ) ) {
							$user                  = get_user_by( 'email', $email );
							$new_password          = couponxl_random_string( 5 );
							$update_fields         = array(
								'ID'        => $user->ID,
								'user_pass' => $new_password,
							);
							$update_id             = wp_update_user( $update_fields );
							$lost_password_message = couponxl_get_option( 'lost_password_message' );
							$lost_password_message = str_replace( "%USERNAME%", $user->user_login,
								$lost_password_message );
							$lost_password_message = str_replace( "%PASSWORD%", $new_password, $lost_password_message );

							$email_sender = couponxl_get_option( 'email_sender' );
							$name_sender  = couponxl_get_option( 'name_sender' );
							$headers      = array();
							$headers[]    = "MIME-Version: 1.0";
							$headers[]    = "Content-Type: text/html; charset=UTF-8";
							$headers[]    = "From: " . $name_sender . " <" . $email_sender . ">";

							$lost_password_subject = couponxl_get_option( 'lost_password_subject' );

							$message_info = @wp_mail( $email, $lost_password_subject, $lost_password_message,
								$headers );
							if ( $message_info ) {
								$message = '<div class="alert alert-danger">' . __( 'Email with the new password and your username is sent to the provided email address',
										'couponxl' ) . '</div>';
							} else {
								$message = '<div class="alert alert-danger">' . __( 'There was an error trying to send an email',
										'couponxl' ) . '</div>';
							}
						} else {
							$message = '<div class="alert alert-danger">' . __( 'There is no user with the provided email address',
									'couponxl' ) . '</div>';
						}
					} else {
						$message = '<div class="alert alert-danger">' . __( 'Email address is invalid',
								'couponxl' ) . '</div>';
					}
				} else {
					$message = '<div class="alert alert-danger">' . __( 'Email address is empty',
							'couponxl' ) . '</div>';
				}
			} else {
				$message = '<div class="alert alert-danger">' . __( 'You do not permission for your action',
						'couponxl' ) . '</div>';
			}
		}

		return $message;

	}
}

function couponxl_send_contact() {
	$errors  = array();
	$name    = isset( $_POST['name'] ) ? esc_sql( $_POST['name'] ) : '';
	$email   = isset( $_POST['email'] ) ? esc_sql( $_POST['email'] ) : '';
	$message = isset( $_POST['message'] ) ? esc_sql( $_POST['message'] ) : '';
	if ( ! isset( $_POST['captcha'] ) ) {
		if ( ! empty( $name ) && ! empty( $email ) && ! empty( $message ) ) {
			if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
				$email_to = couponxl_get_option( 'contact_mail' );
				$subject  = couponxl_get_option( 'contact_form_subject' );
				if ( ! empty( $email_to ) ) {
					$message = "
						" . __( 'Name: ', 'couponxl' ) . " {$name} \n
						" . __( 'Email: ', 'couponxl' ) . " {$email} \n
						" . __( 'Message: ', 'couponxl' ) . "\n {$message} \n
					";
					$info    = @wp_mail( $email_to, $subject, $message );
					if ( $info ) {
						echo json_encode( array(
							'success' => __( 'Your message was successfully submitted.', 'couponxl' ),
						) );
						die();
					} else {
						echo json_encode( array(
							'error' => __( 'Unexpected error while attempting to send e-mail.', 'couponxl' ),
						) );
						die();
					}
				} else {
					echo json_encode( array(
						'error' => __( 'Message is not send since the recepient email is not yet set.', 'couponxl' ),
					) );
					die();
				}
			} else {
				echo json_encode( array(
					'error' => __( 'Email is not valid.', 'couponxl' ),
				) );
				die();
			}
		} else {
			echo json_encode( array(
				'error' => __( 'All fields are required.', 'couponxl' ),
			) );
			die();
		}
	} else {
		echo json_encode( array(
			'error' => __( 'Captcha is wrong.', 'couponxl' ),
		) );
		die();
	}
}

add_action( 'wp_ajax_contact', 'couponxl_send_contact' );
add_action( 'wp_ajax_nopriv_contact', 'couponxl_send_contact' );

function couponxl_new_offer( $offer_id ) {
	$to      = couponxl_get_option( 'new_offer_email' );
	$message = __( 'New offer has been submited. You can edit it ', 'couponxl' ) . get_edit_post_link( $offer_id, '' );

	$info = @wp_mail( $to, __( 'New offer submited', 'couponxl' ), $message );

	return $info;
}

/* VOUCHER STATUS */
function couponxl_send_friend() {
	$frinds_email = isset( $_POST['frinds_email'] ) ? $_POST['frinds_email'] : '';
	$offer_id     = isset( $_POST['offer_id'] ) ? $_POST['offer_id'] : '';
	$your_message = isset( $_POST['your_message'] ) ? $_POST['your_message'] : '';
	if ( ! empty( $frinds_email ) && filter_var( $frinds_email, FILTER_VALIDATE_EMAIL ) ) {
		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-Type: text/html; charset=UTF-8";

		$from_mail = couponxl_get_option( 'email_sender' );
		$from_name = couponxl_get_option( 'name_sender' );
		$headers[] = "From: " . $from_name . " <" . $from_mail . ">";
		$subject   = couponxl_get_option( 'send_friend_subject' );

		$your_message .= "<br/>
-------------------------<br/>
" . get_permalink( $offer_id ) . "
";

		$info = @wp_mail( $frinds_email, $subject, $your_message, $headers );
		if ( $info ) {
			echo '<div class="alert alert-success">' . __( 'Your message has beens sent', 'couponxl' ) . '</div>';
		} else {
			echo '<div class="alert alert-danger">' . __( 'There was an error sending your mail',
					'couponxl' ) . '</div>';
		}
	} else {
		echo '<div class="alert alert-danger">' . __( 'Email is invalid', 'couponxl' ) . '</div>';
	}

	die();
}

add_action( 'wp_ajax_send_friend', 'couponxl_send_friend' );
add_action( 'wp_ajax_nopriv_send_friend', 'couponxl_send_friend' );

function couponxl_voucher_code_message( $offer, $voucher_buyer_id, $voucher_code ) {

	$headers   = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-Type: text/html; charset=UTF-8";

	$user      = get_userdata( $voucher_buyer_id );
	$to        = $user->user_email;
	$from_mail = couponxl_get_option( 'email_sender' );
	$from_name = couponxl_get_option( 'name_sender' );

	$author    = get_userdata( $offer->post_author );
	$to_author = $author->user_email;

	$headers[] = "From: " . $from_name . " <" . $from_mail . ">";

	$deal_voucher_expire = get_post_meta( $offer->ID, 'deal_voucher_expire', true );
	$message             = couponxl_get_option( 'purchase_message' );
	$message             = str_replace( array( '%TITLE%', '%VOUCHER%' ), array(
		$offer->post_title,
		$voucher_code
	), $message );
	$message_expire_part = couponxl_get_option( 'purchase_message_expire' );
	if ( ! empty( $deal_voucher_expire ) ) {
		$deal_voucher_expire = date_i18n( 'F j, Y H:i', $deal_voucher_expire );
		$message             .= str_replace( '%EXPIRE%', $deal_voucher_expire, $message_expire_part );
	}

	$subject = couponxl_get_option( 'purchase_message_subject' );

	$info = @wp_mail( $to, $subject, $message, $headers );

	$author_subject = 'New offer sale!';
	$author_message = sprintf( 'Offer %s has been bought!', get_permalink( $offer->ID ) );
	$author_info    = @wp_mail( $to_author, $author_subject, $author_message, $headers );
}

function couponxl_send_admin_message( $message, $user_id = '' ) {
	$headers   = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-Type: text/html; charset=UTF-8";

	if ( ! empty( $user_id ) ) {
		$user      = get_userdata( $user_id );
		$to        = $user->user_email;
		$from_mail = couponxl_get_option( 'discussion_form_mail' );
		$from_name = couponxl_get_option( 'discussion_form_mail_name' );
		$headers[] = "From: " . $from_name . " <" . $from_mail . ">";
	} else {
		$to = couponxl_get_option( 'discussion_form_mail' );
	}

	$subject = couponxl_get_option( 'discussion_form_subject' );

	$info = @wp_mail( $to, $subject, $message, $headers );

	return $info;
}

function couponxl_registration_email( $email, $username, $confirmation_hash ) {
	$confirmation_message = couponxl_get_option( 'registration_message' );
	$confirmation_link    = couponxl_get_permalink_by_tpl( 'page-tpl_register' );
	$confirmation_link    = couponxl_append_query_string( $confirmation_link, array(
		'username'          => $username,
		'confirmation_hash' => $confirmation_hash
	) );

	$confirmation_message = str_replace( '%LINK%', $confirmation_link, $confirmation_message );

	$registration_subject = couponxl_get_option( 'registration_subject' );

	$email_sender = couponxl_get_option( 'email_sender' );
	$name_sender  = couponxl_get_option( 'name_sender' );
	$headers      = array();
	$headers[]    = "MIME-Version: 1.0";
	$headers[]    = "Content-Type: text/html; charset=UTF-8";
	$headers[]    = "From: " . $name_sender . " <" . $email_sender . ">";

	$info = wp_mail( $email, $registration_subject, $confirmation_message, $headers );

	return $info;
}

function couponxl_send_email($email, $registration_subject, $confirmation_message, $headers) {
	$info = wp_mail( $email, $registration_subject, $confirmation_message, $headers );

	return $info;
}

/********************************************************
Add CouponXL Widgets
 ********************************************************/
function couponxl_widgets_load(){
	register_widget( 'Couponxl_Category' );
	register_widget( 'Couponxl_Locations' );
	register_widget( 'Couponxl_Popular_Stores' );
	register_widget( 'Couponxl_Custom_Stores' );
	register_widget( 'Couponxl_Latest_Posts_Comments' );
	register_widget( 'Couponxl_Latest_Posts' );
	register_widget( 'Couponxl_Custom_Locations' );
	register_widget( 'Couponxl_Custom_Menu' );
	register_widget( 'Couponxl_Custom_Menu_Two' );
	register_widget( 'CouponXL_Tweets' );
	register_widget( 'CouponXL_Shortcode_Text' );
	register_widget( 'CouponXL_Mega_Menu_Categories_List' );
	register_widget( 'CouponXL_Mega_Menu_Locations_List' );
	register_widget( 'CouponXL_Mega_Menu_Custom_List' );
	register_widget( 'CouponXL_Mega_Menu_Images' );
	register_widget( 'CouponXL_Subscribe' );
}
add_action( 'widgets_init', 'couponxl_widgets_load' );

require_once plugin_dir_path( __FILE__ ) . '/radium-one-click-demo-install/init.php';
require_once( plugin_dir_path( __FILE__ ) . '/includes/twitter_api.php' );
require_once( plugin_dir_path( __FILE__ ) . '/includes/import/import.php' );
