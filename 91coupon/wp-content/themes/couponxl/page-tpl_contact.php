<?php
/*
	Template Name: Contact Page
*/
get_header();
the_post();
get_template_part( 'includes/title' );
?>
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="white-block top-border">
                        <?php
                        $contact_map = couponxl_get_option( 'contact_map' );
                        if( !empty( $contact_map[0] ) ){
                            echo '<div class="contact_map">';
                                foreach( $contact_map as $long_lat ){
                                    echo '<input type="hidden" value="'.esc_attr( $long_lat ).'" class="contact_map_marker">';
                                }
                                $contact_map_scroll_zoom = couponxl_get_option( 'contact_map_scroll_zoom' );
                                if( $contact_map_scroll_zoom == 'yes' ){
                                    echo '<input type="hidden" value="1" class="contact_map_scroll_zoom">';
                                }
                                ?>
                                <!--<div class="embed-responsive embed-responsive-16by9">
                                    <div id="map" class="embed-responsive-item"></div>
                                </div>-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.872406114405!2d77.08807131478736!3d28.483388982476797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d193a42b0cd63%3A0xc72062e57843e20!2sCollectcent%20Digital%20Media%20Private%20Limited!5e0!3m2!1sen!2sin!4v1646468073633!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                        
                                <?php
                            echo '</div>';
                        }
                        ?>
                    
                    <div class="white-block-content">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2><?php _e( 'Contact Us', 'couponxl' ) ?></h2>
                                <div class="send_result"></div>
                                <form>
                                    <div class="input-group">
                                      <input type="text" class="form-control" name="name" placeholder="<?php esc_attr_e( 'NAME', 'couponxl' ) ?>">
                                    </div>
                                    <div class="input-group">
                                      <input type="text" class="form-control" name="email" placeholder="<?php esc_attr_e( 'EMAIL', 'couponxl' ) ?>">
                                    </div>
                                    <div class="input-group">
                                      <textarea class="form-control" name="message" placeholder="<?php esc_attr_e( 'MESSAGE', 'couponxl' ) ?>"></textarea>
                                    </div>
                                    <input type="checkbox" name="captcha" id="captcha">
                                    <input type="hidden" name="action" value="contact">
                                    <a class="btn submit-form-contact" href="javascript:;"><?php _e( 'SUBMIT MESSAGE', 'couponxl' ); ?></a>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <div class="page-content clearfix">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>