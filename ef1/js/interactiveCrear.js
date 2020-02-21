function modificarMarginTop() {
    var altura = 0;
    altura = document.getElementById('Header').clientHeight;
    document.getElementById('mainP').style.marginTop = altura + 'px';
    console.log(altura + 'px');
    document.getElementById('Header').classList.add('backgroundScroll');
}

modificarMarginTop();

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

function barL() {
    const inputs = [
        document.getElementById('input1'),
        document.getElementById('input2'),
        document.getElementById('input3'),
        document.getElementById('input4'),
        document.getElementById('input5'),
        document.getElementById('input6'),
        document.getElementById('input7'),
        document.getElementById('clientAddress'),
        document.getElementById('input8'),
        document.getElementById('input9'),
        document.getElementById('input10')
    ]

    const por = document.getElementById('porcentaje');
    const bar = document.getElementById('load');
    const cajaPor = document.getElementById('progess');

    var datoFull = 0;
    for (var cont = 0; cont < inputs.length; cont++) {
        if (inputs[cont].value == "") {
            datoFull = datoFull + 0;
        } else {
            datoFull = datoFull + 1;
        }
    }
    var prom = (datoFull / inputs.length) * 100;
    bar.style.height = prom + "%";
    cajaPor.style.height = prom + "%";
    por.innerHTML = prom.toFixed() + "% complete"

    if (prom == 100) {
        por.classList.remove('hideDesktop');
    } else {
        por.classList.add('hideDesktop');
    }
}