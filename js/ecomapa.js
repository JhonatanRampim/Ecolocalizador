var map;
var idInfoBoxAberto;
var infoBox = [];
var markers = [];

function initialize() {	
	var latlng = new google.maps.LatLng(-22.4134792, -47.5646716);
	
    var options = {
        zoom: 13,
		center: latlng,
    };

    map = new google.maps.Map(document.getElementById("mapa"), options);
}

initialize();

function abrirInfoBox(id, marker) {
	if (typeof(idInfoBoxAberto) == 'number' && typeof(infoBox[idInfoBoxAberto]) == 'object') {
		infoBox[idInfoBoxAberto].close();
	}

	infoBox[id].open(map, marker);
	idInfoBoxAberto = id;
}

function carregarPontos() {
 
    $.getJSON('js/pontos.json', function(pontos) {
 
        $.each(pontos, function(index, ponto) {
 
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
                title: "Ecopontos! Clique para mais informações.",
                map: map
            });
            var myOptions = {
                content: "<p>" + ponto.Descricao + "</p>",
                pixelOffset: new google.maps.Size(-150, 0)
            };
            infoBox[ponto.Id] = new InfoBox(myOptions);
            infoBox[ponto.Id].marker = marker;
            infoBox[ponto.Id].listener = google.maps.event.addListener(marker, 'click', function (e) {
				abrirInfoBox(ponto.Id, marker);
			});
        });
 
    });
 
}
 
carregarPontos();
