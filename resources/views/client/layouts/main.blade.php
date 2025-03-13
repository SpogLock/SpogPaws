<!DOCTYPE html>
<html lang="en">
    @include('client.partials.header')
    @include('client.partials.navbar')
<body>
    @yield('page')
     <!-- Include Fancybox JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- Fancy Box Script CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
     <!-- Light Slider Script CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
    @include('client.partials.footer')
</html>
