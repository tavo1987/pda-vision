 <?php

get_header();

?>

 <?php get_template_part('templates/top-image') ?>

<?php get_template_part('templates/breadcrumbs'); ?>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="span9">
                <h2><?php _e('La página que está buscando no puede ser encontrada, Lo invitamos a conocer más sobre nuestra organización', THEME_TEXT_DOMAIN); ?></h2>

                <p><?php _e('You may want to go to homepage', THEME_TEXT_DOMAIN); ?></p>

                <div class="service-boxes-wrapper clearfix">
                    <div class="service-box-container">
                        <div class="service-box clearfix" style="background-color: #ee612c">
                            <div class="service-box-front">
                                <i class="icon-home"></i>

                                <div class="service-title">
                                    <p>Inicio</p>
                                </div>

                                <div class="service-content">
                                    <p></p>
                                </div>
                            </div>

                            <div class="service-box-back">
                                <a href="<?php echo get_home_url() ?>"></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="service-box-container">
                        <div class="service-box clearfix" style="background-color: #ef832b">
                            <div class="service-box-front">
                                <i class="entypo-icon-users-1"></i>

                                <div class="service-title">
                                    <p>Nuestro Trabajo</p>
                                </div>

                                <div class="service-content">
                                    <p></p>
                                </div>
                            </div>

                            <div class="service-box-back">
                                <a href="http://emarketingecuador.com/visionMundial/nuestro-trabajo/"></a>
                            </div>
                        </div>
                    </div>
                
                </div>

            </div>


            <div class="span3">
                <?php get_template_part('templates/sidebar') ?>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();