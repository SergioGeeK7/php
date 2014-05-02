
function inicio(){
	var propiMapa = {
	  center:new google.maps.LatLng(-23.5000,-46.68589),
	  zoom:10,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	var map=new google.maps.Map(document.getElementById("mapas")
	  ,propiMapa);
}
google.maps.event.addDomListener(window, 'load', inicio)