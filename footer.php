</div><!-- end .wrapper -->
<?php if(! dynamic_sidebar('blog_footer')){ ?>
    <footer id="footer" role="contentinfo">
        <?php wp_nav_menu( array(
            'theme_location' => 'utilities',
            'fallback_cb' => 'mountaindew_menu_fallback' //defined in functions.php
        )) ?>
        <small>
            2017-2018 NaushyTCG &copy;
        </small>
        <small>
            <a href="http://ryandschultz.com" target="_blank">Created by RSXII</a>
        </small>
    </footer>
<?php }//end if no footer ?>

<?php wp_footer(); //HOOK. required for plugins and admin bar to work ?>
</body>
</html>