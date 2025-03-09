<!-- Sweetalert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
<!-- Jquery JS -->
<script data-cfasync="false" src="{{asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('assets/js/jquery-3.7.1.min.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>

<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>

<!-- Wow JS -->
<script src="{{asset('assets/js/wow.min.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>

<!-- MeanMenu Js -->
<script src="{{asset('assets/js/jquery.meanmenu.min.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>

<!-- Swiper Js -->
<script src="{{asset('assets/plugins/owlcarousel/owl.carousel.min.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>

<!-- Fancybox JS -->
<script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>

<!-- Counter JS -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>

<!-- Datepicker Core JS -->
<script src="{{asset('assets/plugins/moment/moment.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>
<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>

<!-- cursor JS -->
<script src="{{asset('assets/js/cursor.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>

<!-- Script JS -->
<script src="{{asset('assets/js/script.js')}}" type="beceb56a46d34ee0b957492c-text/javascript"></script>

<script src="{{asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="beceb56a46d34ee0b957492c-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"919001d84de9e3b1","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>

@if (session('error'))
<x-alert type="error" message="{{ session('error') }}" />
@endif


@if (session('success'))
<x-alert type="success" message="{{ session('success') }}" />
@endif
