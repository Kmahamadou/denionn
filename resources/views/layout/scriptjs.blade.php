 <!-- Scripts -->
    <!-- Loads Bootstrap Main JS -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('bootstrap/js/ie10-viewport-bug-workaround.js')}}"></script>

    <!-- Initiate Google Maps - For more Infos look into the documentation -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="{{asset('js/google-map.js')}}"></script>

    <!-- Initiate Portoflio Script -->
    <script src="{{asset('extensions/portfolio/isotope.min.js')}}"></script>
    <script src="{{asset('extensions/portfolio/portfolio.js')}}"></script>

    <!-- Initiate Fancybox/Lightbox Script -->
    <!-- Fancybox/Lightbox -->
    <script type="text/javascript" src="{{asset('extensions/fancybox/jquery.fancybox.js')}}"></script>
    <script type="text/javascript" src="{{asset('extensions/fancybox/jquery.fancybox.pack.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('extensions/fancybox/jquery.fancybox.css')}}" media="screen" />
    <script type="text/javascript" src="{{asset('extensions/fancybox/jquery.fancybox-media.js')}}"></script>
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