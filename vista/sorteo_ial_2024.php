<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAL - Sorteo</title>
    <link rel="stylesheet" href="public/sorteo.css">
    <style>
    body {
        font-family: 'Press Start 2P', cursive;
        background-image: url('./public/img/fondosorteo.jpg');
        /* Fondo de casino */
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        color: #ffd700;
        /* Color dorado para un estilo de lujo */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }


    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
</head>

<body>
    <div class="container">
        <h1>¡Sorteo!</h1>
        <p>Ingresa la cantidad de ganadores:</p>
        <input type="number" id="ganadores" min="1" placeholder="Ganadores">
        <br>
        <button id="sorteoBtn">¡Empezar Sorteo!</button>
        <div class="loading" id="loading">
            <p>Cargando datos del sorteo...</p>
        </div>
        <div id="result"></div>
    </div>

    <script>
    // Definir la URL base
    const baseUrl = 'http://localhost:8081'; // Cambia esto en producción

    // Lista de nombres predefinidos
    const nombresAleatorios = [
        "Juan Pérez", "María López", "Carlos Sánchez", "Laura Gómez",
        "José Martínez", "Ana Fernández", "Luis Rodríguez", "Marta Ruiz",
        "Fernando Torres", "Elena Ramírez", "Javier Morales", "Sofía Díaz"
    ];

    document.getElementById('sorteoBtn').addEventListener('click', function() {
        const ganadores = document.getElementById('ganadores').value;
        const loading = document.getElementById('loading');
        const result = document.getElementById('result');

        if (ganadores < 1) {
            alert("Por favor, ingresa un número válido.");
            return;
        }

        loading.style.display = 'block';
        result.innerHTML = '';

        // Mostrar nombres aleatorios mientras se carga
        const randomNamesInterval = setInterval(() => {
            const randomIndex = Math.floor(Math.random() * nombresAleatorios.length);
            const randomName = nombresAleatorios[randomIndex];
            result.innerHTML = `<p class="random-names">${randomName}</p>`;
        }, 200);

        // Realizar la solicitud fetch después de 10 segundos
        setTimeout(() => {
            // Detener el intervalo de nombres aleatorios
            clearInterval(randomNamesInterval);
            // Hacer la solicitud para obtener los participantes
            fetch(
                    `${baseUrl}/landing_sorteo/index.php?vista=sorteo_ial_2024&accion=obtener_participantes&cantidad=${ganadores}`
                    )
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    loading.style.display = 'none';

                    if (data.error) {
                        throw new Error(data.error);
                    }

                    const winners = data.map((name, index) => `Ganador ${index + 1}: ${name}`);
                    result.innerHTML =
                        `<h2 class="winner">¡Felicidades!</h2><p>${winners.join('<br>')}</p>`;
                })
                .catch(error => {
                    loading.style.display = 'none';
                    console.error("Error fetching participants:", error);
                    result.innerHTML = "Error al obtener los participantes.";
                });
        }, 4000);
    });
    </script>





</body>

</html>