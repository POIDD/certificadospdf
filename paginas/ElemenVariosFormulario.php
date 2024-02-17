<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ElemenVariosFormulario.css">
    <title>Generador de Formatos</title>
</head>
<body id="body-EleVarios">
    <img id="logo" src="../img/logo-consejo-danes.jpg" alt="Logo Consejo Danés para Refugiados">
    <div id="container">
        <h2>Ingresa los datos de las prendas a entregar</h2>
        <form id="data-form">
            <div class="flex-container">
                <div class="input-wrapper">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre"><br>
                </div>
                <div class="input-wrapper">
                    <label for="fecha">Fecha:</label><br>
                    <input type="date" id="fecha" name="fecha"><br>
                </div>
            </div>
            <div class="flex-container">
                <div class="input-wrapper">
                    <label for="descripcion">Descripción:</label><br>
                    <input type="text" id="descripcion" name="descripcion"><br>
                </div>
                <div class="input-wrapper">
                    <label for="cantidad">Cantidad:</label><br>
                    <input type="number" id="cantidad" name="cantidad"><br>
                </div>
            </div>
        </form>
        <button id="agregar">Agregar otra Descripción</button>
        <button id="generar-pdf">Generar PDF</button>
        <div id="cantidad-agregada">Cantidad de productos agregados: <span id="cantidad-numero">0</span></div>
    </div>
</body>
</html>