<?php
/*
    Template Name: Recover Password
*/

if( is_user_logged_in() ){
    wp_redirect( home_url() );
}

get_header();
the_post();
get_template_part( 'includes/title' );

$message = '';
if( function_exists( 'couponxl_recover_password_email' ) ) {
	couponxl_recover_password_email();
}

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-block top-border">

                    <div class="white-block-title">
                        <i class="fa fa-unlock-alt"></i>
                        <h2><?php the_title(); ?></h2>
                    </div>

                    <?php if( !empty( $message ) ): ?>
                        <div class="white-block-content">
                            <?php echo wp_kses_post( $message ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="white-block-content">
                        <div class="page-content clearfix">
                            <?php the_content() ?>
                        </div>
                        <form method="post" action="<?php  echo couponxl_get_permalink_by_tpl( 'page-tpl_recover_password' ); ?>">
                            <div class="input-group">
                                <input type="text" name="email" placeholder="<?php esc_attr_e( 'EMAIL', 'couponxl' ); ?>"class="form-control" data-validation="required|email"  data-error="<?php esc_attr_e( 'Email is empty or invaid', 'couponxl' ); ?>">
                            </div>
                            <?php wp_nonce_field('recover','recover_field'); ?>
                            <a href="javascript:;" class="btn submit-form"><?php _e( 'RECOVER PASSWORD', 'couponxl' ); ?></a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>