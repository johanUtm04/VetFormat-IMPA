  let map;
  let directionsService;
  let directionsRenderer;
  let userLocation;

  const botonLlenadoRapido = document.getElementById('llenadoRapido');
    if (botonLlenadoRapido) {
    botonLlenadoRapido.addEventListener('click', llenadoAutomatico);
    }

 const botonCopiarDireccion = document.getElementById('mostrarRuta');
 if (botonCopiarDireccion) {
    botonCopiarDireccion.addEventListener('click', mostrarRuta);
 }

  function initMap() {
    // Inicializamos el mapa con un zoom y centro cualquiera (antes de obtener la ubicación)
    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 13,
      center: { lat: 19.7008, lng: -101.1847 } // Morelia
    });

    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);

    // Intentamos obtener ubicación actual del usuario
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          userLocation = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          map.setCenter(userLocation);
        },
        () => {
          alert("No se pudo obtener tu ubicación.");
        }
      );
    } else {
      alert("Tu navegador no soporta geolocalización.");
    }
  }

  function mostrarRuta() {
    //Contanste que toma el campo direccion
    const address = document.getElementById("direccion").value;

    //Si esta vacio, lanza un alert al usuario
    if (!address) {
      alert("Por favor escribe una dirección valida");
      return;
    }

    // Geocodificar la dirección usando Google Maps Geocoder
    const geocoder = new google.maps.Geocoder();

    //Geolifica la direccion dentro de morelia, México
    geocoder.geocode({ address: address + ", Morelia, México" }, (results, status) => {
      
      //En caso de que Si 
      if (status === "OK") {
        const destino = results[0].geometry.location;

        // Guardar coordenadas en inputs ocultos para enviar al backend
        document.getElementById("latitude").value = destino.lat();
        document.getElementById("longitude").value = destino.lng();

        if (!userLocation) {
          alert("No se pudo obtener tu ubicación actual.");
          return;
        }


        // Solicitar ruta entre ubicación actual y destino
        directionsService.route(
          {
            origin: userLocation,
            destination: destino,
            travelMode: google.maps.TravelMode.DRIVING
          },
          (response, status) => {
            if (status === "OK") {
              directionsRenderer.setDirections(response);
            const routeUrl = `http://googleusercontent.com/maps.google.com/3{response.routes[0].legs[0].start_location.lat()},${response.routes[0].legs[0].start_location.lng()}&daddr=${response.routes[0].legs[0].end_location.lat()},${response.routes[0].legs[0].end_location.lng()}`;
                 navigator.clipboard.writeText(routeUrl)
            .then(() => {
              // Alerta al usuario que se ha copiado
              alert("¡URL de la ruta copiado al portapapeles!");
              })
              .catch(err => {
              console.error("Error al copiar el URL:", err);
              alert("No se pudo copiar el URL de la ruta.");
              });
          } else {
              alert("No se pudo encontrar ruta: " + status);
            }
          }
        );
      } else {
        alert("No se encontró la dirección: " + status);
      }
    });
  }

function llenadoAutomatico() {

  // Personal que atiende
  document.querySelector('input[name="per_nombres"]').value = "Juan";
  document.querySelector('input[name="per_apaterno"]').value = "Pérez";
  document.querySelector('input[name="per_amaterno"]').value = "Gómez";

  // Reportante
  document.querySelector('input[name="rep_nombres"]').value = "Carlos";
  document.querySelector('input[name="rep_apaterno"]').value = "López";
  document.querySelector('input[name="rep_amaterno"]').value = "Mendoza";
  document.querySelector('input[name="rep_domicilio"]').value = "Calle 5 de Febrero #123";
  document.querySelector('input[name="rep_colonia"]').value = "Centro";
  document.querySelector('input[name="rep_cp"]').value = "58000";
  document.querySelector('input[name="rep_estado"]').value = "Michoacán";
  document.querySelector('input[name="rep_ciudad"]').value = "Morelia";
  document.querySelector('input[name="rep_telefono"]').value = "4431234567";

  // Detalle del reporte
  document.querySelector('textarea[name="det_medio"]').value = "Teléfono";
  document.querySelector('textarea[name="det_asunto"]').value = "Animal en vía pública";
  document.querySelector('textarea[name="det_motivo"]').value = "Se reporta perro en mal estado en calle principal.";

  // Domicilio del reporte
  document.querySelector('input[name="dom_domicilio"]').value = "Av. Madero 456";
  document.querySelector('input[name="dom_colonia"]').value = "Independencia";
  document.querySelector('input[name="dom_cp"]').value = "58010";
  document.querySelector('input[name="dom_estado"]').value = "Michoacán";
  document.querySelector('input[name="dom_ciudad"]').value = "Morelia";
  document.querySelector('input[name="dom_telefono"]').value = "4439876543";
  document.querySelector('textarea[name="dom_entre_calles"]').value = "Entre Av. Juárez y Av. Lázaro Cárdenas";
  document.querySelector('textarea[name="dom_referencias"]').value = "Frente a la tienda de abarrotes";

  // Atención del reporte
  document.querySelector('input[name="at_fecha"]').value = "2025-07-05";
  document.querySelector('input[name="at_hora_atencion"]').value = "12:00";
  document.querySelector('input[name="at_nom_ciudadano"]').value = "Miguel Sánchez";
  document.querySelector('textarea[name="at_observaciones"]').value = "El animal fue trasladado al refugio sin incidentes.";

  // Datos del reporte
  document.querySelector('input[name="rep_fecha"]').value = "2025-07-05";
  document.querySelector('input[name="rep_recibio"]').value = "Luis Hernández";
  document.querySelector('textarea[name="rep_envio_evidencia"]').value = "3 fotos enviadas por WhatsApp";
  document.querySelector('textarea[name="rep_seguimiento"]').value = "Se dará seguimiento médico en el refugio.";

  // Dirección para mapa
  document.getElementById("direccion").value = "Av. Madero, Morelia";
}

  window.onload = initMap;

