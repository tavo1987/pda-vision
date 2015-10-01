<?php
/**
 * Footer Template
 *
 * This template closes #main div and displays the #footer div.
 *
 * Thematic Action Hooks: thematic_abovefooter thematic_belowfooter thematic_after
 * Thematic Filters: thematic_close_wrapper can be used to remove the closing of the #wrapper div
 *
 * @package Thematic
 * @subpackage Templates
 */

global $NHP_Options;
$options = $NHP_Options->options;
?>
<?php // action hook for placing content above the closing of the #main div
thematic_abovemainclose();
?>

<?php
// action hook for placing content above the footer
thematic_abovefooter();

// Filter provided for altering output of the footer opening element
//    		echo ( apply_filters( '', '<div id="footer">' ) );
?>

<?php
// action hook creating the footer
//        		thematic_footer();
?>

<footer>
    <div id="inner-footer">
        <div class="container">
            <div class="row">
                <div id="footer-left-side" class="span8">
                    <div id="footer-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'stylish_footer_navigation',
                            'container' => false,
                            'menu_class' => 'nav nav-pills',
                            'fallback_cb' => '',
                            'walker' => new Footer_Nav_Walker(),
                            'depth' => 0,
                            'echo' => true
                        ));
                        ?>
                    </div>

                    <?php if ( isset($options['footer-contact-info']) && $options['footer-contact-info'] ) { ?>

                        <div id="footer-container-info" class="clearfix">
                            <div id="address-info">
                                <p><i class="icon-home"></i> <?php echo $options['contact-address'] ?></p>
                            </div>
                            <div>
                                <i class="icon-phone"></i><p><?php echo $options['contact-phone'] ?></p>
                            </div>
                            <div style="clear: both">
                                <i class="icon-envelope"></i><a href="mailto:<?php echo $options['contact-email'] ?>"><?php echo $options['contact-email'] ?></a>
                            </div>
                        </div>

                    <?php } // endif ?>
                </div>

                <div id="footer-right-side" class="span3">
                    <div id="stay-connected">
                        <p><?php _e('Síguenos', THEME_TEXT_DOMAIN) ?></p>
                    </div>

                    <div id="footer-social-icons" class="clearfix">
                        <?php if ( !empty($options['facebook-link']) ) { ?>
                            <a href="<?php echo $options['facebook-link'] ?>" class="facebook-icon social-icon"><i class="icon-facebook"></i></a>
                        <?php } // endif ?>

                        <?php if ( !empty($options['twitter-link']) ) { ?>
                            <a href="<?php echo $options['twitter-link'] ?>" class="twitter-icon social-icon"><i class="icon-twitter"></i></a>
                        <?php } // endif ?>

                        <?php if ( !empty($options['google-plus-link']) ) { ?>
                            <a href="<?php echo $options['google-plus-link'] ?>" class="googleplus-icon social-icon"><i class="icon-google-plus"></i></a>
                        <?php } // endif ?>

                        <?php if ( !empty($options['pinterest-link']) ) { ?>
                            <a href="<?php echo $options['pinterest-link'] ?>" class="pinterest-icon social-icon"><i class="icon-pinterest"></i></a>
                        <?php } // endif ?>

                        <?php if ( !empty($options['linkedin-link']) ) { ?>
                            <a href="<?php echo $options['linkedin-link'] ?>" class="linkedin-icon social-icon"><i class="icon-linkedin"></i></a>
                        <?php } // endif ?>

                        <?php if ( !empty($options['dribble-link']) ) { ?>
                            <a href="<?php echo $options['dribble-link'] ?>" class="dribble-icon social-icon"><i class="icon-dribbble"></i></a>
                        <?php } // endif ?>

                        <?php if ( !empty($options['tumblr-link']) ) { ?>
                            <a href="<?php echo $options['tumblr-link'] ?>" class="tumblr-icon social-icon"><i class="icon-tumblr"></i></a>
                        <?php } // endif ?>

                        <?php if ( !empty($options['instagram-link']) ) { ?>
                            <a href="<?php echo $options['instagram-link'] ?>" class="instagram-icon social-icon"><i class="icon-instagram"></i></a>
                        <?php } // endif ?>

                        <?php if ( !empty($options['rss-link']) ) { ?>
                            <a href="<?php echo $options['rss-link'] ?>" class="rss-icon social-icon"><i class="icon-rss"></i></a>
                        <?php } // endif ?>

                        <a href="https://www.youtube.com/user/comunicacionvme" class="social-icon" target="_blank"><i class="icon-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="copyright-container" class="container">
        <div class="container">
            <p>&copy;<?php echo $options['footer-copyright'] ?></p>
        </div>
    </div>
</footer>

<div id="scroll-up-button">
    <i class="icon-angle-up"></i>
</div>

<?php
// Filter provided for altering output of the footer closing element
//    		echo ( apply_filters( 'thematic_close_footer', '</div><!-- #footer -->' . "\n" ) );

// action hook for placing content below the footer
thematic_belowfooter();
?>

<?php
// Filter provided for altering output of wrapping element follows the body tag
//    	if ( apply_filters( 'thematic_close_wrapper', true ) )
//    		echo ( '</div><!-- #wrapper .hfeed -->' . "\n" );

echo '</div> <!-- #main -->';

// action hook for placing content before closing the BODY tag
thematic_after();

// calling WordPress' footer action hook
wp_footer();
?>

<script> new WOW().init();</script>
</body>
</html>