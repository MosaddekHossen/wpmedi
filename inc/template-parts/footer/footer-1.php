<!-- Footer Area -->
<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <?php if (is_active_sidebar('footer-widget-01') or is_active_sidebar('footer-widget-02') or is_active_sidebar('footer-widget-03') or is_active_sidebar('footer-widget-04')) : ?>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <?php dynamic_sidebar('footer-widget-01'); ?>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <?php dynamic_sidebar('footer-widget-02'); ?>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <?php dynamic_sidebar('footer-widget-03'); ?>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <?php dynamic_sidebar('footer-widget-04'); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <?php medi_copyright(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->