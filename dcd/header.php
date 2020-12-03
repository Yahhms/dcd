<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
    </head>

<body <?php body_class();?>>

    

    <div class="container-fluid">
        <div class="row">
            
        
        
            <nav id="sidebarMenu" class="col-lg-2 sidebar-sticky">
                <div class="sticky-top">    
                    <div id="logo" class="d-flex justify-content-center pb-5 pt-5">
                        <?php 
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo(); }
                        ?>
                    </div>
                    
                    <div>
                        <?php wp_nav_menu(
                            array(
                                'theme-location' => 'side-menu',
                            ) );
                        ?>
                    </div>
                </div>
            </nav>
                
            
            <main id="Content" class="col-lg-10">
                
                <div class="container-fluid pt-4">
                
                    <?php //wordpress stuff, added class stuff ?>
                    <?php if ( get_header_image() ) : ?>
                        <div id="site-header">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img src="<?php header_image(); ?>" 
                                     width="<?php echo absint( get_custom_header()->width ); ?>" 
                                     height="<?php echo absint( get_custom_header()->height ); ?>" 
                                     alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
                                     class="img-fluid">
                            </a>
                        </div>
                    <?php endif; ?>
    <?php //THE REST IS MAIN CONTENT ?>
    


