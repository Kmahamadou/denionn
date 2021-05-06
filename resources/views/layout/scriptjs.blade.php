
    <!-- Initiate Fancybox/Lightbox for Videos -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
             */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',
                    prevEffect: 'none',
                    nextEffect: 'none',
                    arrows: false,
                    helpers: {
                        media: {},
                        buttons: {}
                    }
                });
        });
    </script>
  <script src="{{ secure_asset('js/jquery.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ secure_asset('js/popper.min.js') }}"></script>
  <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ secure_asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ secure_asset('js/aos.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ secure_asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ secure_asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ secure_asset('js/google-map.js') }}"></script>
  <script src="{{ secure_asset('js/main.js') }}"></script>
    
  </body>
</html>