<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">

            <!-- Footer Location -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>

                <p class="lead mb-0">
                    <?php echo get_option('location')?>
                </p>
            </div>

            <!-- Footer Social Icons -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_option('facebook')?>" target="_blank">
                    <i class="fab fa-fw fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_option('twitter')?>" target="_blank">
                    <i class="fab fa-fw fa-twitter"></i>
                </a>
                <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_option('linkedin')?>" target="_blank">
                    <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
                <style>
                    .blink_me {
                        animation: blinker 1s linear infinite;
                    }

                    @keyframes blinker {
                        50% {
                            opacity: 0;
                        }
                    }
                </style>
                <a class="btn btn-outline-light btn-social mx-1 blink_me" href="<?php echo get_option('link')?>" target="_blank">
                    <i class="fab fa-fw fa-dribbble"></i>
                </a>
            </div>

            <!-- Footer About Text -->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0"><?php echo get_option('about')?></p>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
    <div class="container">
        <small><?php echo get_option('copyright')?></small>
    </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Bootstrap core JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/js/jqBootstrapValidation.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php bloginfo('template_url'); ?>/js/freelancer.min.js"></script>

<?php wp_footer(); ?>
</body>

</html>