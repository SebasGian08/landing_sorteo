<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="public/output.css?78484879466">
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/registro.css">
    <title>IAL | Instituto Arzobispo Loayza</title>
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
            <p class="pop-med text-center leading-none text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-300 mb-8">
                Regístrate con la carrera de tu interés <br class="hidden sm:block"> y participa en el sorteo..</p>

            <!-- Aquí empieza tu formulario -->
            <form class="flex flex-col gap-y-5" action="" method="post" name="form_inscripcion" id="form_inscripcion">
                <input type="hidden" name="tipo" value="web" id="tipo">
                <div class="caja">
                    <input name="nom" autocomplete="off" id="nom"
                        class="placeholder:text-base md:placeholder:text-lg placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full input-d"
                        type="text" placeholder="Nombres" required>
                </div>
                <script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.getElementById("nom").focus();
                });
                </script>
                <div class="caja">
                    <input name="ape" autocomplete="off"
                        class="placeholder:text-base md:placeholder:text-lg placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full input-d"
                        type="text" placeholder="Apellidos" required>
                </div>
                <div class="caja">
                    <input name="dni" autocomplete="off"
                        class="placeholder:text-base md:placeholder:text-lg placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full input-d"
                        type="tel" minlength="8" maxlength="9" placeholder="DNI/CE" required
                        onkeypress="return isNumber(event)" oninput="removeSpaces(this)">
                </div>

                <script>
                function isNumber(event) {
                    const charCode = (event.which) ? event.which : event.keyCode;
                    // Permitir solo números
                    return (charCode >= 48 && charCode <= 57) || charCode === 8; // 8 es para la tecla de retroceso
                }

                function removeSpaces(input) {
                    // Eliminar espacios en blanco
                    input.value = input.value.replace(/\s/g, '');
                }
                </script>
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
                <p class="text-transparent text-justify bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-300 pop-med text-sm leading-none flex justify-center">
                    <input class="mr-2" name="chbx_confirmarcion" type="checkbox" required />
                    <span style="width:70%"> Al marcar esta casilla, autorizo al Instituto Arzobispo Loayza a utilizar
                        mis datos para comunicarse conmigo y entregarme la información necesaria.</span>
                </p>
                <div class="caja-boton">
                    <input
                        class="uppercase pop-bol text-black-enviar lg:text-3xl text-2xl rounded-full py-2 px-10 bg-gradient-to-r from-cyan-500 to-red-500 cursor-pointer"
                        type="submit" value="Registrarse">
                </div>
            </form>
        </div>

        <div class="bg-[length:100%_100%] flex items-center justify-center h-screen">
            <img class="rounded-md animate-move" style="object-fit: cover; width: auto; height: 80%; max-height: 100%;"
                src="./public/img/chica.png" alt="">
        </div>
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
            event.preventDefault();

            const data = {
                cod_alumno: null,
                nombre: $('input[name="nom"]').val(),
                apellido: $('input[name="ape"]').val(),
                telefono: $('input[name="tel"]').val(),
                dni: $('input[name="dni"]').val(),
                correo: $('input[name="email"]').val(),
                cod_espe: $('select[name="carrera"]').val(),
                tipo: $('input[name="tipo"]').val()
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