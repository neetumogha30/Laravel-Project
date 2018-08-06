/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var x = document.getElementById("geofy");

console.log(Auth::user());
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

/*function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    var data = {lat: position.coords.latitude,long: position.coords.longitude}
    sendrequesttoserver(data);
}

function sendrequesttoserver(data){
    $.ajax({
        url: "/user/location"+userid,
        type: 'GET',
        data: {
           data
        },
        success: function(data) {
            // you can manipulation your html here
        }
    });
}

getLocation();*/

