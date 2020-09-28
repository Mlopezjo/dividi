</main>
<div class="text-white footer-basic" style="background-color: rgb(33,33,33); margin-top: 50px;">
    <footer>
        <div class="social">
          <a class="text-white border-white" href="<?php echo get_option('facebook'); ?>"><i class="fa fa-facebook-square"></i></a>
          <a class="text-white border-white" href="<?php echo get_option('instagram'); ?>"><i class="fa fa-instagram"></i></a>
          <a class="text-white border-white" href="<?php echo get_option('tripadvisor'); ?>"><i class="fa fa-tripadvisor"></i></a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright"><?php bloginfo('name'); ?> © 2020</p>
    </footer>
</div>
<?php wp_footer(); ?>
<script src=<?php echo get_template_directory_uri() . "/assets/js/jquery.min.js"; ?>></script>
<script src=<?php echo get_template_directory_uri() . "/assets/bootstrap/js/bootstrap.min.js"; ?>></script>
</body>

</html>
