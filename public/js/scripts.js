$(document).ready(function () {
  "use strict";
  var myNav = {
    init: function () {
      this.cacheDOM();
      this.browserWidth();
      this.bindEvents();
    },
    cacheDOM: function () {
      this.navBars = $(".navBars");
      this.xBxHack = $("#xBxHack");
      this.navMenu = $("#menu");
    },
    browserWidth: function () {
      $(window).resize(this.bindEvents.bind(this));
    },
    bindEvents: function () {
      var width = window.innerWidth;

      if (width < 600) {
        this.navBars.click(this.animate.bind(this));
        this.navMenu.hide();
        this.xBxHack[0].checked = false;
      } else {
        this.resetNav();
      }
    },
    animate: function (e) {
      var checkbox = this.xBxHack[0];

      if (!checkbox.checked) {
        this.navMenu.slideDown();
      } else {
        this.navMenu.slideUp();
      }

    },
    resetNav: function () {
      this.navMenu.show();
    }
  };
  myNav.init();
});


//maps=========================================================
function initMap() {

  var styleArray = [
    {
        "featureType": "administrative.locality",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#76A99A"
            },
            {
                "saturation": 7
            },
            {
                "lightness": 19
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#76A99A"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#bbc0c4"
            },
            {
                "saturation": -93
            },
            {
                "lightness": 31
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "hue": "#bbc0c4"
            },
            {
                "saturation": -93
            },
            {
                "lightness": 31
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels",
        "stylers": [
            {
                "hue": "#bbc0c4"
            },
            {
                "saturation": -93
            },
            {
                "lightness": -2
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": -90
            },
            {
                "lightness": -8
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": 10
            },
            {
                "lightness": 69
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#1E90FF"
            },
            {
                "saturation": -78
            },
            {
                "lightness": -20
            },
            {
                "visibility": "simplified"
            }
        ]
    }
    ];

  var destination = {lat: -36.8406, lng: 174.7400};
  
  var map = new google.maps.Map(document.getElementById('map'), {
      center: destination,
      scrollwheel: false,
      styles: styleArray,
      zoom: 15
  });

  var marker = new google.maps.Marker({
      map: map,
      position: destination,
      title: 'Destination'
  });

  var infowindow = new google.maps.InfoWindow({
        content: '<div id="content">Cafe</div>'
    });
    infowindow.open(map, marker);

  if(geo_position_js.init()){

       geo_position_js.getCurrentPosition(
        function(position){
            console.log(position);

            var home = {lat: position.coords.latitude, lng: position.coords.longitude};
            var directionsDisplay = new google.maps.DirectionsRenderer({
                map: map
            });

            // Set destination, origin and travel mode.
            var request = {
                destination: destination,
                origin: home,
                travelMode: google.maps.TravelMode.DRIVING
            };

            // Pass the directions request to the directions service.
            var directionsService = new google.maps.DirectionsService();
                directionsService.route(request, function(response, status) {

                if (status == google.maps.DirectionsStatus.OK) {
                    // Display the route on the map.
                    directionsDisplay.setDirections(response);
                }
            });


            var infowindow1 = new google.maps.InfoWindow({
                content: '<div id="content"></div>'
            });

            var marker2 = new google.maps.Marker({
                position: home,
            });

            // To show the info window as soon as you load the page
           
            infowindow1.open(map, marker2);


        },
        function(error){

            console.log(error); 

        });
    }
    else{
       console.log("Functionality not available");
    }
}

//--------------------------------------------------------------->>
// $(function()){


// $("[data-field]").on("click",function(i,el){

//         var url = window.location.href + "/" + $(el).attr("data-postid");
//         var options = {
//             type:"textarea",
//             cssclass:"editable",
//             submitdata:{
//                 _method:"PUT",
//                 _token:$("#token").text(),
//                 field: $(this).attr("data-field")
//             },
//             submit: "OK"
//         };
//         $(el).editable(url,options);
//     });
// };

$(function(){


    $("[data-field]").each(function(i,el){

        var url = window.location.href + "/" + $(el).attr("data-postid");
        var options = {
            type:"textarea",
            submitdata:{
                _method:"PUT",
                _token:$("#token").text(),
                field: $(el).attr("data-field")
            },
            submit: "OK"
        };
        $(el).editable(url,options);
    });

});