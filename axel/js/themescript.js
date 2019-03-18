

// contact
jQuery(document).ready(function(){

	$('#contactform').submit(function(){
		var action = $(this).attr('action');

		$("#message").slideUp(750,function() {
		$('#message').hide();

 		$('#submit')
			.after('<img src="images/loading.gif" class="loader" />')
			.attr('disabled','disabled');

		$.post(action, {
			name: $('#name').val(),
			emails: $('#emails').val(),
			phone: $('#phone').val(),
			subject: $('#subject').val(),
			comments: $('#comments').val(),
			verify: $('#verify').val()
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);

		});

		return false;

	});

});



// contact
jQuery(document).ready(function(){

	$('#applyform').submit(function(){
		var action = $(this).attr('action');

		$("#applymessage").slideUp(750,function() {
		$('#applymessage').hide();

 		$('#submit')
			.after('<img src="images/loading.gif" class="loader" />')
			.attr('disabled','disabled');

		$.post(action, {
			name: $('#name').val(),
			emails: $('#emails').val(),
			phone: $('#phone').val(),
			subject: $('#subject').val(),
			comments: $('#comments').val(),
			sapfa: $('#checkbox1').val(),
			sapscmp: $('#checkbox2').val(),
			sapscms: $('#checkbox3').val(),
			saphcm: $('#checkbox4').val(),
			sapsiob: $('#checkbox5').val(),
			sapaw: $('#checkbox6').val(),
			location: $('#radioa').val(),
			others: $('#others').val(),
			verify: $('#verify').val()
		},
			function(data){
				document.getElementById('applymessage').innerHTML = data;
				$('#applymessage').slideDown('slow');
				$('#applyform img.loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#applyform').slideUp('slow');

			}
		);

		});

		return false;

	});

});





//map
var map;
var egglabs = new google.maps.LatLng(4.8306504,7.0391449);
var mapCoordinates = new google.maps.LatLng(4.8306504,7.0391449);


var markers = [];
var image = new google.maps.MarkerImage(
    'images/route.png',
    new google.maps.Size(80,40),
    new google.maps.Point(0,0),
    new google.maps.Point(60, 36)
  );

function addMarker() 
{
      markers.push(new google.maps.Marker({
      position: egglabs,
      raiseOnDrag: false,
	  icon: image,
      map: map,
      draggable: false
      }));
      
}

function initialize() {
  var mapOptions = {
	backgroundColor: "#ffffff",
    zoom: 16,
	disableDefaultUI: true,
    center: mapCoordinates,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
	styles: [
			  {
			    "featureType": "landscape.natural",
			    "elementType": "geometry.fill",
			    "stylers": [
			      { "color": "#ffffff" }
			    ]
			  },
			  {
				    "featureType": "landscape.man_made",
				    "stylers": [
				      { "color": "#ffffff" },
				      { "visibility": "off" }
				    ]
			  },
			  {
				    "featureType": "water",
				    "stylers": [
				       { "color": "#80C8E5" },
				      { "saturation": 0 }
				    ]
			  },
			  {
				    "featureType": "road.arterial",
				    "elementType": "geometry",
				    "stylers": [
				      { "color": "#999999" }
				    ]
			  }
			 ,{
				    "elementType": "labels.text.stroke",
				    "stylers": [
				      { "visibility": "off" }
				    ]
			  }
				,{
				    "elementType": "labels.text",
				    "stylers": [
				      { "color": "#333333" }
				    ]
				  }
				
				,{
				    "featureType": "road.local",
				    "stylers": [
				      { "color": "#dedede" }
				    ]
				  }
				,{
				    "featureType": "road.local",
				    "elementType": "labels.text",
				    "stylers": [
				      { "color": "#666666" }
				    ]
				  }
				,{
				    "featureType": "transit.station.bus",
				    "stylers": [
				      { "saturation": -57 }
				    ]
				  }
				,{
				    "featureType": "road.highway",
				    "elementType": "labels.icon",
				    "stylers": [
				      { "visibility": "off" }
				    ]
				  },{
				    "featureType": "poi",
				    "stylers": [
				      { "visibility": "off" }
				    ]
				  }
			
			]
    
  };
map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
addMarker();
 
}
google.maps.event.addDomListener(window, 'load', initialize);
