<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <nav class="navegacion">

            <ul class="navegacion__enlace">
                <li>
                    <h2 class="brand">
                    <i class="fa-solid fa-tree"></i>
                    App
                </h2>
            </li>
                <li><a href="#">Principal</a></li>
                <li><a href="#">Reclamos</a></li>
            </ul>

            <ul class="navegacion__enlace">
                <li><i class="fa-solid fa-gear"></i></li>
                <li><i class="fa-solid fa-user"></i></li>
                <li><button class="boton btn_salir"><i class="fa-solid fa-power-off"></i>Salir</button></li>
            </ul>
        </nav>

        <button id="menu"><i class="fa-solid fa-bars"></i></button>
    </header>

    <main class="contenedor">        
        <div class="contenedor__formulario">
            <h4>Línea 147</h4>
            <h1>Centro de atención al vecino</h1>
            <form action="form.php" method="POST" class="formulario">
                <div class="campo">
                    <label for="procedencia">Procedencia</label>
                    <select name="procedencia" id="procedencia">
                        <option>Mesa de entradas</option>
                    </select>
                </div>
                <div class="campo">
                    <label for="nReclamo">N# Reclamo</label>
                    <div class="n__reclamo">
                    <select name="" id="">
                        <option>A</option>
                        <option>B</option>
                    </select>
                    <input type="number" class="campo__field">
                    </div>
                </div>
                <div class="campo">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado">
                        <option>Abierto</option>
                        <option>En inspeccion</option>
                        <option>Inspeccionando</option>
                        <option>Programando</option>
                        <option>Gestionando</option>
                        <option>Relsuelto</option>
                        <option>Cerrado</option>
                    </select>
                </div>
                <div class="campo">
                    <label for="asignado">Asignado a:</label>
                    <select name="asignado" id="asignado">
                        <option>Dir.Arbolado Publico</option>
                        <option default value="1">Coord. Inspeccion Ambiental</option>
                        <option value="1">Dir.Abordaje Territorial</option>
                        <option value="1">Dir.Control Ambiental</option>
                        <option value="1">Control de plagas</option>
                        <option value="1">Vivero</option>
                        <option value="1">Logistica</option>
                        <option value="1">Otros reclamos</option>
                    </select>
                </div>
                <div class="campo">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="campo__field">
                </div>
                <div class="campo">
                    <label for="prioridad">Prioridad</label>
                    <select name="prioridad" id="prioridad">
                        <option default value="1">Urgente</option>
                        <option value="1">Alta</option>
                        <option value="1">Media</option>
                        <option value="1">Normal</option>
                    </select>
                </div>
                <div class="campo">
                    <label for="iniciado">Iniciado</label>
                    <input type="text" class="campo__field">
                </div>
                <div class="campo">
                    <label for="tipo_reclamo">Tipo de reclamo</label>
                    <select name="tipo_reclamo" id="tipo_reclamo">
                        <option default value="1">Poda de arbol</option>
                        <option value="1">Ruidos molestos</option>
                        <option value="1">Vuelco de efluentes</option>
                        <option value="1">Inspeccion de basurales</option>
                        <option value="1">Quema</option>
                        <option value="1">Vuelco de residuos</option>
                        <option value="1">Infraccion limpieza lote baldio</option>
                        <option value="1">Inspeccion ambiental</option>
                        <option value="1">Notificacion por reparacion de vereda</option>
                        <option value="1">Construccion de vereda</option>
                        <option value="1">Otros</option>
                    </select>
                </div>
                <div class="contenedor_tabla">
                    <table>
                        <thead>
                            <tr>
                                <th><label for="dni">D.N.I <i class="fa-solid fa-id-card"></i></label></th>
                                <th><label for="nombre">Nombre <i class="fa-solid fa-pen"></i></label></th>
                                <th><label for="apellido">Apellido <i class="fa-solid fa-pen"></i></label></th>
                                <th><label for="telefono">Telefono <i class="fa-solid fa-phone"></i></label></th>
                                <th><label for="delegacion">Delegacion <i class="fa-solid fa-people-roof"></i></label></th>
                                <th><label for="domicilio">Domicilio <i class="fa-solid fa-house"></i></label></th>
                                <th><label for="alturas">Altura <i class="fa-solid fa-sign-hanging"></i></label></th>
                                <th><label for="entre_calles">Entre Calles <i class="fa-solid fa-road"></i></label></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input name="dni" id="dni" type="number"></td>
                                <td><input name="nombre" id="nombre" type="text"></td>
                                <td><input name="apellido" id="apellido" type="text"></td>
                                <td><input name="telefono" id="telefono" type="tel"></td>
                                <td><input name="delegacion" id="delegacion" type="text"></td>
                                <td><input name="domicilio" id="domicilio" type="text"></td>
                                <td><input name="alturas" id="alturas" type="text"></td>
                                <td><input name="entre_calles" id="entre_calles" type="text"></td>
        
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="direccion_denunciada">
                <h2>Direccion denunciada</h2>
                <div class="contenedor_tabla">
                    <table>
                        <thead>
                            <tr>
                                <th><label for="localidad_denuncia">Localidad <i class="fa-solid fa-location-dot"></i></label></th>
                                <th><label for="domicilio_denuncia">Domicilio <i class="fa-solid fa-house"></i></label></th>
                                <th><label for="alturas_denuncia">Altura <i class="fa-solid fa-sign-hanging"></i></label></th>
                                <th><label for="entre_calles_denuncia">Entre calles <i class="fa-solid fa-road"></i></label></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input name="localidad_denuncia" id="localidad_denuncia" type="text"></td>
                                <td><input name="domicilio_denuncia" id="domicilio_denuncia" type="text"></td>
                                <td><input name="alturas_denuncia" id="alturas_denuncia" type="text"></td>
                                <td><input name="entre_calles_denuncia" id="entre_calles_denuncia" type="text"></td>
        
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                
                <div class="contenedor_descripcion">
                    <label for="descripcion"><h2>Descripcion</h2></label>
                    <textarea name="descripcion" id="descripcion" rows="8" cols="50"></textarea>
                </div>
                <input type="submit" class="boton" value="Guardar">
            </form>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/e437e95637.js" crossorigin="anonymous"></script>
   <!-- <script src="main.js"></script>-->

</body>
</html>