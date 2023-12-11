<footer class="site_footer">
    <div class="foot_top">
        <div class="container">
            <div class="social-media">

                <div class="social-media">
                    <ul>
                        <li>
                            <a target="_blank" href="<?php echo get_field( 'social_x_twitter_url', 'option' ); ?>"
                               class="btn-transform-hover">
                                <svg width="34" height="31" viewBox="0 0 34 31" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.3516 0.875H31.2734L20.4453 13.3203L33.2422 30.125H23.2578L15.3828 19.9297L6.45312 30.125H1.46094L13.0625 16.9062L0.828125 0.875H11.0938L18.125 10.2266L26.3516 0.875ZM24.5938 27.1719H27.3359L9.61719 3.6875H6.66406L24.5938 27.1719Z"
                                          fill="#ffffff"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo get_field( 'social_facebook_url', 'option' ); ?>"
                               class="btn-transform-hover">
                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.125 0.75C29.9531 0.75 31.5 2.29688 31.5 4.125V28.875C31.5 30.7734 29.9531 32.25 28.125 32.25H18.4219V21.5625H22.5L23.2734 16.5H18.4219V13.2656C18.4219 11.8594 19.125 10.5234 21.3047 10.5234H23.4844V6.23438C23.4844 6.23438 21.5156 5.88281 19.5469 5.88281C15.6094 5.88281 13.0078 8.34375 13.0078 12.7031V16.5H8.57812V21.5625H13.0078V32.25H3.375C1.47656 32.25 0 30.7734 0 28.875V4.125C0 2.29688 1.47656 0.75 3.375 0.75H28.125Z"
                                          fill="#ffffff"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo get_field( 'social_instagram_url', 'option' ); ?>"
                               class="btn-transform-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 448 512">
                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                          fill="#ffffff"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_main">
        <div class="container">
            <div class="wrapper">
                <div class="footer-navigation">
                    <div class="footer-menu">
						<?php if ( is_active_sidebar( 'footer-1' ) ) {
							dynamic_sidebar( 'footer-1' );
						} ?>
                    </div>
                    <div class="footer-menu">
						<?php if ( is_active_sidebar( 'footer-2' ) ) {
							dynamic_sidebar( 'footer-2' );
						} ?>
                    </div>
                    <div class="footer-menu">
						<?php if ( is_active_sidebar( 'footer-3' ) ) {
							dynamic_sidebar( 'footer-3' );
						} ?>
                    </div>
                </div>
                <div class="newsletter">
					<?php if ( is_active_sidebar( 'footer-4' ) ) {
						dynamic_sidebar( 'footer-4' );
					} ?>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_bottom">
        <div class="container">
            <p><?php echo get_field( 'copyright', 'option' ); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>