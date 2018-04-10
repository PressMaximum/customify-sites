<script type="text/html" id="tpl-cs-item-modal">
    <div id="cs-modal-site--{{ data.slug }}" class="cs-modal-site customify-sites-modal-wrapper">
        <div class="cs-modal-outer">
            <a href="#" class="cs-back-to-list button-secondary"><?php _e( 'Back to site library', 'customify-sites' ); ?></a>
            <div class="cs-modal">
                <div class="cs-info">
                    <div class="cs-thumbnail">
                        <img src="{{ data.thumbnail_url }}" alt="">
                    </div>
                    <div class="cs-name">{{ data.title }}</div>
                    <a href="#" data-slug="{{ data.slug }}" class="cs-open-preview button-secondary"><?php _e( 'Preview', 'customify-sites' ); ?></a>
                    <div class="cs-desc">{{{ data.desc }}}</div>
                </div>

                <div class="cs-main">
                    <ul class="cs-breadcrumb">
                        <li data-step="overview" class="current"><?php _e( 'Import Overview', 'customify-sites' ); ?></li>
                        <li data-step="install_plugins"><?php _e( 'Install Plugins', 'customify-sites' ); ?></li>
                        <li data-step="import_content"><?php _e( 'Import Content', 'customify-sites' ); ?></li>
                        <li data-step="import_options"><?php _e( 'Import Options', 'customify-sites' ); ?></li>
                    </ul>

                    <div class="cs-steps owl-carousel">
                        <div class="cs-step cs-step-start">
                            <div class="cs-step-img">
                                <img src="<?php echo CUSTOMIFY_SITES_URL; ?>/assets/images/welcome.svg">
                                <svg class="icon icon--checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="icon--checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="icon--checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path>
                                </svg>
                            </div>

                            <div class="cs-text-center">
                               <h3><?php _e( 'Hi! Welcome back', 'customify-sites' ) ?></h3>
                                <p><?php _e( 'You may have already run this site import wizard. If you would like to proceed anyway, click on the "Start Import" button below.', 'customify-sites' ); ?></p>
                                <p class="cs-error cs-hide cs-error-download-files">
                                    <?php _e( 'Oops! Could not download demo content xml and config files.', 'customify-sites' ); ?>
                                </p>
                            </div>

                        </div>
                        <div class="cs-step cs-step-install_plugins">
                            <div class="cs-step-img">
                                <img src="<?php echo CUSTOMIFY_SITES_URL; ?>/assets/images/plugins.svg">
                                <svg class="icon icon--checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="icon--checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="icon--checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path>
                                </svg>
                            </div>
                            <h3 class="cs-text-center"><?php _e( 'Install Plugins', 'customify-sites' ); ?></h3>
                            <p class="cs-text-center">
                               <?php _e( 'Let\'s install some essential WordPress plugins to get your site up to speed.', 'customify-sites' ); ?>
                            </p>
                            <ul class="cs-installing-plugins cs-list-plugins"></ul>
                            <# if ( ! _.isEmpty( data.plugins ) || ! _.isEmpty( data.manual_plugins ) ){  #>
                                <div class="cs-install-manual-plugins">
                                    <p class="cs-text-center"><?php _e( 'The following plugins need to be installed and activated manually.', 'customify-sites' ); ?></p>
                                    <ul class="cs-list-plugins"></ul>
                                </div>
                            <# } #>
                        </div>
                        <div class="cs-step cs-step-import_content">
                            <div class="cs-step-img">
                                <img src="<?php echo CUSTOMIFY_SITES_URL; ?>/assets/images/content.svg">
                                <svg class="icon icon--checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="icon--checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="icon--checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path>
                                </svg>
                            </div>

                            <h3 class="cs-text-center"><?php _e( 'Import Content', 'customify-sites' ); ?></h3>
                            <p class="cs-text-center"><?php _e( 'Let\'s import content to your website, to help you get familiar with the theme.', 'customify-sites' ); ?></p>
                            <ul class="cs-import-content-status cs-list-plugins">
                                <li><div class="circle-loader"><div class="checkmark draw"></div></div><span class="cs-plugin-name cs-post_count"></span></li>
                                <li><div class="circle-loader"><div class="checkmark draw"></div></div><span class="cs-plugin-name cs-media_count"></span></li>
                                <li><div class="circle-loader"><div class="checkmark draw"></div></div><span class="cs-plugin-name cs-comment_count"></span></li>
                                <li><div class="circle-loader"><div class="checkmark draw"></div></div><span class="cs-plugin-name cs-user_count"></span></li>
                                <li><div class="circle-loader"><div class="checkmark draw"></div></div><span class="cs-plugin-name cs-term_count"></span></li>
                            </ul>

                        </div>
                        <div class="cs-step cs-step-import_options">
                            <div class="cs-step-img">
                                <img src="<?php echo CUSTOMIFY_SITES_URL; ?>/assets/images/options.svg">
                                <svg class="icon icon--checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="icon--checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="icon--checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path>
                                </svg>
                            </div>
                            <h3 class="cs-text-center"><?php _e( 'Import Options', 'customify-sites' ); ?></h3>
                            <p class="cs-text-center">
                                <?php _e( 'This step will import the theme options, menus and widgets', 'customify-sites' ); ?>
                            </p>
                            <ul class="cs-import-options-status cs-list-plugins">
                                <li><div class="circle-loader"><div class="checkmark draw"></div></div><span class="cs-plugin-name"><?php _e( 'Customize Options', 'customify-sites' ); ?></span></li>
                                <li><div class="circle-loader"><div class="checkmark draw"></div></div><span class="cs-plugin-name"><?php _e( 'Widgets', 'customify-sites' ); ?></span></li>
                                <li><div class="circle-loader"><div class="checkmark draw"></div></div><span class="cs-plugin-name"><?php _e( 'Options', 'customify-sites' ); ?></span></li>
                            </ul>

                        </div>
                        <div class="cs-step cs-step-view_site">
                            <div class="cs-step-img">
                                <img src="<?php echo CUSTOMIFY_SITES_URL; ?>/assets/images/done.svg">
                                <svg class="icon icon--checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="icon--checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="icon--checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path>
                                </svg>
                            </div>
                            <div class="cs-text-center">
                                <h3><?php _e( 'All done. Have fun!', 'customify-sites' ); ?></h3>
                                <p><?php _e( 'Your theme has been all set up. Enjoy your new theme by the WordPress team.', 'customify-sites' ); ?></p>
                                <ul>
                                    <li><a target="_blank" href="https://wordpress.org/support/"><?php _e( 'Explore WordPress', 'customify-sites' ); ?></a></li>
                                    <li><a target="_blank" href="https://wpcustomify.com"><?php _e( 'Get Theme Support', 'customify-sites' ); ?></a></li>
                                    <li><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"><?php _e( 'Start Customizing', 'customify-sites' ); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="cs-actions">
                        <a href="#" class="cs-skip cs-hide button-secondary"><?php _e( 'Skip', 'customify-sites' ); ?></a>
                        <span class="cs-action-buttons">
                            <a href="#" data-step="0" class="cs-right cs-do-start current cs-btn-circle-btn"><span class="cs-btn-circle"></span><span class="cs-btn-circle-text"><?php _e( 'Start Import', 'customify-sites' ); ?></span></a>
                            <a href="#" data-step="1" class="cs-right cs-do-install-plugins cs-btn-circle-btn"><span class="cs-btn-circle"></span><span class="cs-btn-circle-text"><?php _e( 'Install Plugins', 'customify-sites' ); ?></span></a>
                            <a href="#" data-step="2" class="cs-right cs-do-import-content cs-btn-circle-btn"><span class="cs-btn-circle"></span><span class="cs-btn-circle-text"><?php _e( 'Import Content', 'customify-sites' ); ?></span></a>
                            <a href="#" data-step="3" class="cs-right cs-do-import-options cs-btn-circle-btn"><span class="cs-btn-circle"></span><span class="cs-btn-circle-text"><?php _e( 'Import Options', 'customify-sites' ); ?></span></a>
                            <a href="<?php echo home_url('/'); ?>" data-step="4" target="_blank" class="cs-right cs-do-view-site button-primary"><?php _e( 'View Your Website', 'customify-sites' ); ?></a>
                        </span>
                    </div>

                </div>

            </div>
        </div>
    </div>
</script>