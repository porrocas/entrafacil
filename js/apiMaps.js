function initMap() {
    var input = document.getElementById('clientAddress');
    var options = {
        componentRestrictions: {
            country: "co"
        }
    };
    var autocomplete = new google.maps.places.Autocomplete(input, options);
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        const ubicacion = document.getElementById('preUbiEvent');
        ubicacion.innerHTML = place.name + ", " + place.formatted_address + ".";
    });
}