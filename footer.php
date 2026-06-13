    <footer class="footer">
        <div class="footer__wrapper container">
            <nav class="footer__nav">
                <ul class="footer__nav-list">
                    <li><a href="<?php echo esc_url(home_url('/top/')); ?>">ホーム</a></li>
                    <li><a href="<?php echo esc_url(home_url('/plan/')); ?>">料金</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/result/')); ?>">卒業実績</a></li>
                </ul>
            </nav>
            <div class="footer__logo">
                <img src="<?php echo get_theme_file_uri('/images/brand/logo-white.svg') ?>" alt="きたむらミュージックスクール">
            </div>
            <p class="copyright"><small>Copyright &copy; 0000 KITAMURA music school Inc. All Rights</small></p>
            <ul class="footer__sns-list">
                <li><a href="#"><img src="<?php echo get_theme_file_uri('/images/icons/footer__icon-twitter.svg') ?>" alt="twitter"></a></li>
                <li><a href="#"><img src="<?php echo get_theme_file_uri('/images/icons/footer__icon-facebook.svg') ?>" alt="facebook"></a></li>
                <li><a href="#"><img src="<?php echo get_theme_file_uri('/images/icons/footer__icon-youtube.svg') ?>" alt="youtube"></a></li>
                <li><a href="#"><img src="<?php echo get_theme_file_uri('/images/icons/footer__icon-instagram.svg') ?>" alt="instagram."></a></li>
            </ul>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>