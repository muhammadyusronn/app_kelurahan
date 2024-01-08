<footer id="fh5co-footer" role="contentinfo">
    <div class="overlay"></div>
    <div class="container">
        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; 2023 Nabilla. All Rights Reserved.</small>
                </p>
            </div>
        </div>

    </div>
</footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url() ?>assets/frontend/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="<?= base_url() ?>assets/frontend/js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/js/magnific-popup-options.js"></script>
<!-- Count Down -->
<script src="<?= base_url() ?>assets/frontend/js/simplyCountdown.js"></script>
<!-- Main -->
<script src="<?= base_url() ?>assets/frontend/js/main.js"></script>
<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
</body>

</html>