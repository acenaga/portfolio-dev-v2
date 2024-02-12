<!--
        ==============
        * JS Files *
        ==============
        -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- jQuery -->
<script src="{{ asset('assets-portfolio/plugins/js/jquery.min.js') }} "></script>
<!-- popper -->
<script src="{{ asset('assets-portfolio/plugins/js/popper.min.js') }} "></script>
<!-- bootstrap -->
<script src="{{ asset('assets-portfolio/plugins/js/bootstrap.min.js') }} "></script>
<!-- owl carousel -->
<script src="{{ asset('assets-portfolio/plugins/js/owl.carousel.js') }} "></script>
<!-- validator -->
<script src="{{ asset('assets-portfolio/plugins/js/validator.min.js') }} "></script>
<!-- wow -->
<script src="{{ asset('assets-portfolio/plugins/js/wow.min.js') }} "></script>
<!-- mixin js-->
<script src="{{ asset('assets-portfolio/plugins/js/jquery.mixitup.min.js') }} "></script>
<!-- circle progress-->
<script src="{{ asset('assets-portfolio/plugins/js/circle-progress.js') }} "></script>
<!-- jquery nav -->
<script src="{{ asset('assets-portfolio/plugins/js/jquery.nav.js') }} "></script>
<!-- Fancybox js-->
<script src="{{ asset('assets-portfolio/plugins/js/jquery.fancybox.min.js') }} "></script>
<!-- Map api -->
<script>
  (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
    key: "{{ env('GOOGLE_MAPS_API_KEY') }}",
    v: "3.exp",
    // Add other bootstrap parameters as needed, using camel case.
    // Use the 'v' parameter to indicate the version to load (alpha, beta, weekly, etc.)
  });
</script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key={{ env('GOOGLE_MAPS_API_KEY') }}"></script> --}}
<!-- isotope js-->
<script src="{{ asset('assets-portfolio/plugins/js/isotope.pkgd.js') }} "></script>
<script src="{{ asset('assets-portfolio/plugins/js/packery-mode.pkgd.js') }} "></script>
<!-- Custom Scripts-->
<script src="{{ asset('assets-portfolio/js/map-init.js') }} "></script>
<script src="{{ asset('assets-portfolio/js/custom-scripts.js') }} "></script>
</body>

</html>
