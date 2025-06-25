<?php


    // selecciono el boton de registrar y le doy las instrucciones
    if (!empty($_POST['btnregistrar'])) {
        // DATOS DE LA IMAGEN 
        // variables
        $imagen = $_FILES['imagen']['tmp_name'];
        $nombreImagen = $_FILES['imagen']['name'];
        $tipoImagen = strtolower(pathinfo($nombreImagen, PATHINFO_EXTENSION));
        $sizeImagen = $_FILES['imagen']['size'] ;    
        $directorio = "archivos/";

        // DATOS DEL FORMULARIO
        // clasificacion : venta o alquiler
        $clasificacion = isset($_POST['clasificacion']) ? $_POST['clasificacion'] : '';

        // tipologia
        $tipologia = isset($_POST['tipologia']) ? $_POST['tipologia'] : '';

        // titulo
        $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
        
        // subtitulo
        $subtitulo = isset($_POST['subtitulo']) ? $_POST['subtitulo'] : '';
        
        // descripcion
        $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
        // m2
        $m2 = isset($_POST['m2']) ? $_POST['m2'] : '';
        // precio
        $precio = isset($_POST['precio']) ? $_POST['precio'] : '';

        // dormitorios
        $dormitorios = isset($_POST['dormitorios']) ? $_POST['dormitorios'] : '';
        // banyos
        $banyos = isset($_POST['banyos']) ? $_POST['banyos'] : '';
        // garage
        $garage = isset($_POST['garage']) ? $_POST['garage'] : '';
        // contacto
        $contacto = isset($_POST['contacto']) ? $_POST['contacto'] : '';
        
        // valido que sea una imagen
        if ($tipoImagen == 'jpg' || $tipoImagen == 'jpeg' || $tipoImagen == 'png') {
            
            $registro = $conexion->query("INSERT INTO img (clasificacion, foto, tipologia, titulo, subtitulo, descripcion, m2, precio,dormitorios,banyos,garage,contacto) 
            VALUES ('$clasificacion', '', '$tipologia', '$titulo', '$subtitulo', '$descripcion', '$m2', '$precio', '$dormitorios', '$banyos', '$garage','$contacto')");
            
            // $registro = $conexion->query("insert into img (foto) values ('')");
            
            $idRegistro = $conexion->insert_id;
            $ruta = $directorio . $idRegistro . '.' . $tipoImagen;
            $actualizarImagen = $conexion->query("update img set foto = '$ruta' WHERE id_img = $idRegistro");
            // $actualizarClasificacion = $conexion->query("update img set clasificacion = '$clasificacion' WHERE id_img = $idRegistro");



            if (move_uploaded_file($imagen, $ruta)) {
                echo '<div class="alert alert-info">Se publicó exitosamente </div>';
                

                $jsonFile = 'archivos/datos.json';
                $indexFile = 'index.php';
                $data = [];

                if (file_exists($jsonFile) && filesize($jsonFile) > 0) {
                    $data = json_decode(file_get_contents($jsonFile), true);
                }
                // Agregar nuevo objeto a la lista
                $nuevoObjeto = [
                    'id' => $idRegistro,
                    'foto' => './' . $ruta,
                    'clasificacion' => $clasificacion,
                    'tipologia' => $tipologia,
                    'titulo' => $titulo,
                    'subtitulo' => $subtitulo,
                    'descripcion' => $descripcion,
                    'm2' => (float)$m2,
                    'precio' => (float)$precio,
                    'cantDormitorios' => (int)$dormitorios,
                    'cantBanyos' => (int)$banyos,
                    'garage' => $garage,
                    'contacto' => $contacto
                ];
                $data[] = $nuevoObjeto;
                file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
                
                // ///////////////////////////////////////////////////////////////////////////////////////
                // El contenido a insertar

                $contenido = '<section class="card">
                <a class="imgDegrade" href="./publicacion.php?id='.$idRegistro.'">
                <img class="logoMob" src="./img/logo_card.png">
                <h2 class="contacto">'.$contacto.'</h2>
                <img class="imgCardPpal" style="filter:grayscale(0.6);" src="./' . $ruta . '">
                </a>
                <p class="tipologia">'.$tipologia.'</p>
                <section class="iconosCard">
                    <section><img class="imgIconCard" src="./img/card_icon_1.png"><p>' . $m2 . ' m2</p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_2.png"><p>'.$dormitorios.'</p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_4.png"><p>'.$banyos.'</p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_5.png"><p>'.$garage.'</p></section>
                </section>
                <h2 class="titulo">'.$titulo.'</h2>
                <h4 class="ubicacion">'.$subtitulo.'</h4>
                <p class="descripcion">'.$descripcion.'</p>
                <hr>
                <h2 class="precio">USD '.$precio.'</h2>
                <a href="./publicacion.php?id='.$idRegistro.'"  class="botonVer">Ver publicación</a>
                <p class="clasificacion" style="display:none;">'.$clasificacion.'</p>
                
                <p class="idRegistro" style="display:none;">'.$idRegistro.'</p>
                </section>';

                // Leer el contenido actual de index.php
                $indexContent = file_get_contents('index.php');

                // Buscar el cierre de <div id="contenedor-principal"> y agregar el contenido antes de </div>
                $pattern = '/(<div[^>]*class="[^"]*\bcarousel-track\b[^"]*"[^>]*>)(.*?)(<\/div>)/s';
                $replacement = '$1' . "\n" . $contenido . "\n" . '$2$3';

                // Reemplazar el contenido en index.php
                $indexContent = preg_replace($pattern, $replacement, $indexContent);

                // Escribir el contenido actualizado en index.php
                file_put_contents('index.php', $indexContent);

                // ///////////////////////////////////////////////////////////////////////////////////////
                 // Leer el contenido actual de todasPublicaciones.php
                $archivo = 'todasPublicaciones.php';
                $indexContent2 = file_get_contents($archivo);

                // Buscar el cierre del contenedor de cuadrícula y agregar la nueva tarjeta antes de </div>
                $pattern2 = '/(<div class="grid-publicaciones">.*?)(<\/div>)/s';
                $replacement2 = '$1' . "\n" . $contenido . "\n" . '$2';

                // Reemplazar el contenido en todasPublicaciones.php
                $indexContent2 = preg_replace($pattern2, $replacement2, $indexContent2);

                // Escribir el contenido actualizado en todasPublicaciones.php
                file_put_contents($archivo, $indexContent2);   

                // ///////////////////////////////////////////////////////////////////////////////////////

                
            } else{
                echo '<div class="alert alert-danger">No se pudo subir la imagen</div>';
            }
        } else {
            echo "<div class='alert alert-danger'>No se acepta ese formato</div>";
        }?>

<script>
    history.replaceState(null,null,location.pathname);
</script>

<?php    } 
    
?>

