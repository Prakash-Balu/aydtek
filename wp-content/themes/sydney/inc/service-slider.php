<?php
/**
 * Service slider template
 *
 * @package Sydney
 */

//About slider template
if ( ! function_exists( 'sydney_service_slider_template' ) ) :
function sydney_service_slider_template() {

    //Get the slider options
    $speed      = get_theme_mod('slider_speed', '4000');
    $text_slide = get_theme_mod('textslider_slide', 0);
    $button     = sydney_slider_button();
    $mobile_slider = get_theme_mod('mobile_slider', 'responsive');

    //Slider text
    if ( !function_exists('pll_register_string') ) {
    	$titles = array(
    		'slider_title_1' => "",
    		'slider_title_2' => "",
    		'slider_title_3' => "",
    		'slider_title_4' => get_theme_mod('slider_title_4'),
    		'slider_title_5' => get_theme_mod('slider_title_5'),
    	);
    	$subtitles = array(
    		'slider_subtitle_1' => "",
    		'slider_subtitle_2' => "",
    		'slider_subtitle_3' => "",
    		'slider_subtitle_4' => get_theme_mod('slider_subtitle_4'),
    		'slider_subtitle_5' => get_theme_mod('slider_subtitle_5'),    		
    	);
    } else {
    	$titles = array(
    		'slider_title_1' => "",
    		'slider_title_2' => "",
    		'slider_title_3' => "",
    		'slider_title_4' => pll__( get_theme_mod('slider_title_4') ),
    		'slider_title_5' => pll__( get_theme_mod('slider_title_5') ),
    	);
    	$subtitles = array(
    		'slider_subtitle_1' => "",
    		'slider_subtitle_2' => "",
    		'slider_subtitle_3' => "",
    		'slider_subtitle_4' => pll__( get_theme_mod('slider_subtitle_4') ),
    		'slider_subtitle_5' => pll__( get_theme_mod('slider_subtitle_5') ),    		
    	);
    }
    $images = array(
    		'slider_image_1' => get_template_directory_uri().'/images/services/1.jpg',
    		'slider_image_2' => get_template_directory_uri().'/images/services/2.jpg',
    		'slider_image_3' => get_template_directory_uri().'/images/services/3.jpg',
    		'slider_image_4' => get_template_directory_uri().'/images/services/4.jpg',
    		'slider_image_5' => get_theme_mod('slider_image_5'),
    );

    ?>

    <div id="slideshow" class="header-slider" data-speed="<?php echo esc_attr($speed); ?>" data-mobileslider="<?php echo esc_attr($mobile_slider); ?>">
        <div class="slides-container">

        <?php $c = 1; ?>
        <?php foreach ( $images as $image ) {
        	if ( $image ) {

                $image_alt = sydney_get_image_alt( $image );
        		?>
                <div class="slide-item slide-item-<?php echo $c; ?>" style="background-image:url('<?php echo esc_url( $image ); ?>');">
                    <img class="mobile-slide preserve img-responsive" style="/*height:350px;*/" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>"/>
                    <div class="slide-inner">
                        <div class="contain animated fadeInRightBig text-slider">
                        <h2 class="maintitle"><?php echo wp_kses_post( $titles['slider_title_' . $c] ); ?></h2>
                        <p class="subtitle"><?php echo esc_html( $subtitles['slider_subtitle_' . $c] ); ?></p>
                        </div>
                        <?php echo $button; ?>
                    </div>
                </div>
                <?php
        	}
        	$c++;
        }
        ?>

        </div>  
        <?php if ( $text_slide ) : ?>
            <?php echo sydney_stop_text(); ?>
        <?php endif; ?>
    </div>

    <?php
}
endif;