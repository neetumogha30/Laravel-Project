@extends('layouts.app')

@section('template_title')
    {{ Auth::user()->name }}'s' Homepage
@endsection

@section('template_fastload_css')

<!-- <script src="/js/geofy.js?v1"></script>-->
 
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">

                @include('panels.welcome-panel')

            </div>
        </div>
    </div>
    <script type="text/javascript">
    var isAdmin = {{ (Auth::user()->id) }};
    $(document).ready(function() {
        var x = document.getElementById("geofy");

        console.log(isAdmin);
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            //x.innerHTML = "Latitude: " + position.coords.latitude + 
            //"<br>Longitude: " + position.coords.longitude;
            var data = {lat: position.coords.latitude,long: position.coords.longitude,user:isAdmin}
            sendrequesttoserver(data);
        }

        function sendrequesttoserver(data){
            $.ajax({
                url: "/user/location",
                type: 'POST',
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                data: {
                   data
                },
                success: function(data) {
                    // you can manipulation your html here
                }
            });
        }

        getLocation();

    });
</script>
@endsection

@section('footer_scripts')
@endsection

