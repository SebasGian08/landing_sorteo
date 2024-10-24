<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="public/output.css?78484879466">
    <link rel="stylesheet" href="public/style.css">
    <title>IAL | Instituto Arzobispo Loayza</title>
    <style>
    /* Estilos del modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        position: relative;
        /* background-color: #fff; */
        margin: auto;
        padding: 20px;
        /* border: 1px solid #888; */
        width: 80%;
        max-width: 900px;
    }

    .close {
        position: absolute;
        top: 70px;
        right: 70px;
        font-size: 28px;
        font-weight: bold;
        color: white;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Estilos del loading */
    #loading {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .loader {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>
</head>

<body class="body-bg">
    <div id="loading">
        <div class="loader"></div>
    </div>

    <main
        class="wrapper py-20 flex flex-col gap-y-8 md:max-w-[630px] lg:max-w-[1400px] lg:w-[92%] lg:grid lg:grid-cols-2 xl:grid-cols-[40%_60%]">
        <div class="flex flex-col lg:justify-center top" style="margin-top: 50px;">
            <div style="display: flex; justify-content: center;">
                <img class="rotate-zoom" src="https://www.ial.edu.pe/landing_sorteo/public/img/logo-ial-blanco.png"
                    style="width:450px;" alt="">
            </div>

            <style>
            @keyframes rotate-zoom {
                0% {
                    transform: rotate(0deg) scale(1);
                }

                50% {
                    transform: rotate(360deg) scale(1.2);
                }

                100% {
                    transform: rotate(360deg) scale(1);
                }
            }

            .rotate-zoom {
                animation: rotate-zoom 2s linear forwards;
            }
            </style>
            <p
                class="pop-med text-center leading-none text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-300 mb-8">
                Regístrate con la carrera de tu interés <br class="hidden sm:block"> y participa en el sorteo..</p>

            <!-- Aquí empieza tu formulario -->
            <form class="flex flex-col gap-y-5" action="" method="post" name="form_inscripcion" id="form_inscripcion">
                <input type="hidden" name="tipo" value="web" id="tipo">
                <div class="caja">
                    <input name="nom" autocomplete="off"
                        class="placeholder:text-base md:placeholder:text-lg placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full input-d"
                        type="text" placeholder="Nombres" required>
                </div>
                <div class="caja">
                    <input name="ape" autocomplete="off"
                        class="placeholder:text-base md:placeholder:text-lg placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full input-d"
                        type="text" placeholder="Apellidos" required>
                </div>
                <div class="caja">
                    <input name="dni" autocomplete="off"
                        class="placeholder:text-base md:placeholder:text-lg placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full input-d"
                        type="tel" minlength="8" maxlength="9" placeholder="DNI/CE" required>
                </div>
                <div class="caja">
                    <input name="tel" autocomplete="off"
                        class="placeholder:text-base md:placeholder:text-lg placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full input-d"
                        type="tel" minlength="9" maxlength="9" placeholder="Celular" required>
                </div>
                <div class="caja">
                    <input name="email" autocomplete="off"
                        class="placeholder:text-base md:placeholder:text-lg placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full input-d"
                        type="email" placeholder="Email" required>
                </div>
                <div class="caja">
                    <select name="carrera"
                        class="placeholder:text-base md:placeholder:text-lg placeholder:text-black py-[3px] px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full input-d"
                        required>
                        <option value="" disabled selected>Carrera de interés:</option>
                        <option value="03">Enfermería Técnica</option>
                        <option value="04">Farmacia Técnica</option>
                        <option value="05">Fisioterapia</option>
                        <option value="06">Laboratorio Clínico</option>
                        <option value="09">Prótesis Dental</option>
                    </select>
                </div>
                <p
                    class="text-transparent text-justify bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-300 pop-med text-sm leading-none flex justify-center">
                    <input class="mr-2" name="chbx_confirmarcion" type="checkbox" required />
                    <span style="width:70%"> Al marcar esta casilla, autorizo al Instituto Arzobispo Loayza a utilizar
                        mis datos para comunicarse conmigo y entregarme la información necesaria.</span>
                </p>
                <div class="caja-boton">
                    <input
                        class="uppercase pop-bol text-black-enviar lg:text-3xl text-2xl rounded-full py-2 px-10 bg-gradient-to-r from-cyan-500 to-red-500 cursor-pointer"
                        type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <div class="bg-[length:100%_100%] flex items-center justify-center h-screen">
            <img class="rounded-md animate-move" style="object-fit: cover; width: auto; height: 80%; max-height: 100%;"
                src="./public/img/chica.png" alt="">
        </div>

        <style>
        @keyframes move {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .animate-move {
            animation: move 2s ease-in-out infinite;
        }
        </style>


    </main>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <iframe width="100%" height="500"
                src="https://www.youtube.com/embed/HB5BfNT3UBE?enablejsapi=1&autoplay=1&mute=1"
                title="Estudia en el Instituto Arzobispo Loayza, el Instituto más grande del Perú" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

    <script src="js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    // Ocultar el loading al cargar la página
    window.onload = function() {
        document.getElementById("loading").style.display = "none";
        setTimeout(() => {
            document.getElementById("myModal").style.display = "flex";
        }, 100);
    }

    // Cerrar el modal
    document.querySelector(".close").onclick = function() {
        document.getElementById("myModal").style.display = "none";
    }

    // Cerrar el modal si se hace clic fuera de él
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal")) {
            document.getElementById("myModal").style.display = "none";
        }
    }
    </script>
    <script>
    $(document).ready(function() {
        const baseUrl = 'http://localhost:8081'; // Cambia esto en producción
        $('#form_inscripcion').on('submit', function(event) {
            event.preventDefault(); // Evita el envío del formulario por defecto

            const data = {
                cod_alumno: null, // Si tienes un código de alumno, debes asignarlo aquí
                nombre: $('input[name="nom"]').val(),
                apellido: $('input[name="ape"]').val(),
                telefono: $('input[name="tel"]').val(),
                dni: $('input[name="dni"]').val(),
                correo: $('input[name="email"]').val(),
                cod_espe: $('select[name="carrera"]').val(),
                tipo: $('input[name="tipo"]').val() // Asegúrate de que este campo esté presente
            };

            $.ajax({
                url: `${baseUrl}/landing_sorteo/index.php?vista=controlador&accion=guardarDatosApi`, // Usa template literals
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify(data),
                success: function(response) {
                    console.log('Success:', response);
                    window.location.href =
                        'vista/exito.php'; // Redirige a la página de éxito
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert("Error al registrar los datos."); // Muestra un mensaje de error
                }
            });
        });
    });
    </script>

</body>

</html>