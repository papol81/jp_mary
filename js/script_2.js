document.getElementById("reservation-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const name = document.getElementById("name").value;
    const date = document.getElementById("date").value;
    const time = document.getElementById("time").value;
    
    if (name && date && time) {
      document.getElementById("confirmation").classList.remove("hidden");
      document.getElementById("reservation-form").reset(); // Limpiar el formulario
    } else {
      alert("¡Ups! Asegúrate de completar todos los campos.");
    }
  });
  