function initialize() {
        	var map = new google.maps.Map(document.getElementById("googleMap"), {
            center: new google.maps.LatLng(41.304944,-72.92351),
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          // Adding markers
          var image = "Images/personIcon.png";
          var latLng = new google.maps.LatLng(41.4020,-72.868222);
          var marker1 = new google.maps.Marker({
            position: latLng,
            title: "I am here",
            icon: image,
            map: map
          });

          var contentString1 = '<div class="mapContent">' +
              '<a href="#">Harv Prentiss</a><br>' +
              'Location: North Haven<br><br>' +
              'Field: Genius<br><br>' +
              '"I can do anything."<br><br>' +
              '<div class="profileLinks">' +
                '<a href="#"><img src="Images/LinkedIn_Logo30px.png"/></a>' +
                '<a href="#"><img src="Images/twitterLogo.png"/></a>' +
                '<a href="#"><img src="Images/facebookIcon.png"/></a>' +
              '</div>' +
              '</div>';

          var infoWindow = new google.maps.InfoWindow({
            content: contentString1
          });

          image = "Images/companyIcon.png";
          latLng = new google.maps.LatLng(41.304944,-72.92351);
          var marker2 = new google.maps.Marker({
            position: latLng,
            title: "We are here",
            icon: image,
            map: map
          });

          var contentString2 =
          '<div class="mapContent">' +
              '<a href="#">A100</a><br>' +
              'Location: New Haven<br><br>' +
              'Field: Coding<br><br>' +
              '"Code to live by."<br><br>' +
              '<div class="profileLinks">' +
                '<a href="#"><img src="Images/LinkedIn_Logo30px.png"/></a>' +
                '<a href="#"><img src="Images/twitterLogo.png"/></a>' +
                '<a href="#"><img src="Images/facebookIcon.png"/></a>' +
              '</div>' +
              '</div>';

          var infoWindow2 = new google.maps.InfoWindow({
            content: contentString2
          });

          google.maps.event.addListener(marker1, 'click', function(){
            infoWindow.open(map, marker1);
          });

          google.maps.event.addListener(marker2, 'click', function(){
            infoWindow2.open(map, marker2);
          });

      	}

          
      		google.maps.event.addDomListener(window, 'load', initialize);
          google.maps.event.trigger(map, 'resize');