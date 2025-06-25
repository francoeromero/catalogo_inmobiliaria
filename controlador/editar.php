<?php
// nota: si no se actualiza dale control + f5
    if(!empty($_POST['btneditar'])){
        // extraigo los valores de los inputs ocultos
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        // datos de la imagen
        $imagen = $_FILES['imagen']['tmp_name'];
        $nombreImagen = $_FILES['imagen']['name'];
        $tipoImagen = strtolower(pathinfo($nombreImagen, PATHINFO_EXTENSION));
        $sizeImagen = $_FILES['imagen']['size'] ;    
        $directorio = "archivos/";

        // editar clasificacion : venta o alquiler
        $clasificacion = isset($_POST['clasificacion']) ? $_POST['clasificacion'] : '';
        $editarClasificacion =  $conexion->query("update img set clasificacion = '$clasificacion' where id_img = $id ");

        // editar tipologia
        $tipologia = isset($_POST['tipologia']) ? $_POST['tipologia'] : '';
        $editarTipologia =  $conexion->query("update img set tipologia = '$tipologia' where id_img = $id ");

        
        // editar titulo
        $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
        $editartitulo =  $conexion->query("update img set titulo = '$titulo' where id_img = $id ");

        // editar subtitulo
        $subtitulo = isset($_POST['subtitulo']) ? $_POST['subtitulo'] : '';
        $editarsubtitulo =  $conexion->query("update img set subtitulo = '$subtitulo' where id_img = $id ");

        // editar descripcion
        $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
        $editardescripcion =  $conexion->query("update img set descripcion = '$descripcion' where id_img = $id ");

        // editar m2
        $m2 = isset($_POST['m2']) ? $_POST['m2'] : '';
        $editarm2 =  $conexion->query("update img set m2 = '$m2' where id_img = $id ");

        // editar precio
        $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
        $editarprecio =  $conexion->query("update img set precio = '$precio' where id_img = $id ");

        // editar dormitorios
        $dormitorios = isset($_POST['dormitorios']) ? $_POST['dormitorios'] : '';
        $editardormitorios =  $conexion->query("update img set dormitorios = '$dormitorios' where id_img = $id ");
        
        // editar baños
        $banyos = isset($_POST['banyos']) ? $_POST['banyos'] : '';
        $editarbanyos =  $conexion->query("update img set banyos = '$banyos' where id_img = $id ");
        
        
        // garage  
        $garage = isset($_POST['garage']) ? $_POST['garage'] : '';
        $editargarage =  $conexion->query("update img set garage = '$garage' where id_img = $id ");
        
        // editar contacto
        $contacto = isset($_POST['contacto']) ? $_POST['contacto'] : '';
        $editarcontacto =  $conexion->query("update img set contacto = '$contacto' where id_img = $id ");


        if (is_file($imagen)) {

            if ($tipoImagen == 'jpg' || $tipoImagen == 'jpeg' || $tipoImagen == 'png') {
                //eliminar imagen anterior
                try{
                    unlink($nombre);
                } catch (\Throwable $th) {
                    // throw $th;
                }

                $ruta = $directorio . $id . '.' . $tipoImagen;

                if(move_uploaded_file($imagen, $ruta)){

                    $editar = $conexion->query("update img set foto = '$ruta' where id_img = $id");

                    if($editar==1){
                        echo "<div class='alert alert-info'>Se actualizo la imagen exitosamente</div>";
                    }else{
                        echo "<div class='alert alert-danger'>No se pudo actualizar la imagen</div>";
                    }

                }else{
                    echo "<div class='alert alert-danger'>No se pudo eliminar la imagen anterior</div>";
                }

            }else {
                echo "<div class='alert alert-danger'>Solo se aceptan formatos jpg / jpeg / png</div>";
            }


        } else {
            $ruta = $nombre; // Mantener la misma imagen si no se subió una nueva
        }
        
        // **Actualizar el JSON**
        $jsonFile = 'archivos/datos.json';
        if (file_exists($jsonFile) && filesize($jsonFile) > 0) {
            $data = json_decode(file_get_contents($jsonFile), true);

            // Buscar y actualizar el objeto correspondiente en el JSON
            foreach ($data as &$obj) {
                if ($obj['id'] == $id) {
                    $obj['clasificacion'] = $clasificacion;
                    $obj['tipologia'] = $tipologia;
                    $obj['titulo'] = $titulo;
                    $obj['subtitulo'] = $subtitulo;
                    $obj['descripcion'] = $descripcion;
                    $obj['m2'] = (float)$m2;
                    $obj['precio'] = (float)$precio;
                    $obj['foto'] = './' . $ruta;  
                    $obj['cantDormitorios'] = (int)$dormitorios;
                    $obj['cantBanyos'] = (int)$banyos;
                    $obj['garage'] = $garage; 
                    $obj['contacto'] = $contacto;
                    break;
                }
            }

            // Guardar los cambios en el JSON
            file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }
        // ///////////////////////////////////////////////////////

        $archivo1 = 'index.php';
        

        $contenido = '<section class="card">
        <a class="imgDegrade" href="./publicacion.php?id='.$id.'">
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
        <h2>'.$titulo.'</h2>
        <h4 class="ubicacion">'.$subtitulo.'</h4>
        <p class="descripcion">'.$descripcion.'</p>
        <hr>
        <h2 class="precio">USD '.$precio.'</h2>
        <a href="./publicacion.php?id='.$id.'"  class="botonVer">Ver publicación</a>
        <p class="clasificacion" style="display:none;">'.$clasificacion.'</p>
        
        <p class="idRegistro" style="display:none;">'.$id.'</p>
        </section>';
        
        // Leer el contenido actual de index.php
        $indexContent = file_get_contents($archivo1);

        // Buscar el cierre de <div id="contenedor-principal"> y agregar el contenido antes de </div>
        $pattern = '/<section class="card">.*?<p class="idRegistro" style="display:none;">' . preg_quote($id, '/') . '<\/p>.*?<\/section>/s';

        // Reemplazar el contenido en index.php
        $indexContent = preg_replace($pattern, $contenido, $indexContent);

        // Escribir el contenido actualizado en index.php
        file_put_contents($archivo1, $indexContent);


        // ////////////////////////////////////////////////
        // ////////////////////////////////////////////////
        // ////////////////////////////////////////////////
        // ////////////////////////////////////////////////
        // ////////////////////////////////////////////////
        // ////////////////////////////////////////////////
        // ////////////////////////////////////////////////
        // ////////////////////////////////////////////////
        // ////////////////////////////////////////////////
        // ////////////////////////////////////////////////
        $archivo2 = 'todasPublicaciones.php';
        $indexContent2 = file_get_contents($archivo2);
        
        // Patrón para encontrar todas las cards
        $patternCards = '/<section[^>]*class="card"[^>]*>.*?<p[^>]*class="idRegistro"[^>]*>' . '.*?' . '<\/p>.*?<\/section>/s';
        // Patrón para encontrar el div.grid-publicaciones
        $patternGrid = '/<div class="grid-publicaciones">(.*?)<\/div>/s';
        // Patrón específico para la card con este ID
        $patternCardId = '/<section[^>]*class="card"[^>]*>.*?<p[^>]*class="idRegistro"[^>]*>' . preg_quote($id, '/') . '<\/p>.*?<\/section>/s';
        
        // 1. Obtener todas las cards
        preg_match_all($patternCards, $indexContent2, $matchAllCards);
        $todasLasCards = $matchAllCards[0];
        
        // 2. Filtrar (eliminar la card vieja)
        $cardsFiltradas = array_filter($todasLasCards, function($card) use ($id) {
            return !preg_match('/<p[^>]*class="idRegistro"[^>]*>' . preg_quote($id, '/') . '<\/p>/', $card);
        });
        
        // 3. Agregar la card nueva
        array_push($cardsFiltradas, $contenido);
        
        // 4. Unir todas las cards actualizadas
        $nuevoContenidoGrid = implode("\n", $cardsFiltradas);
        
        // 5. Reemplazar el contenido del grid
        $indexContent2 = preg_replace($patternGrid, '<div class="grid-publicaciones">' . $nuevoContenidoGrid . '</div>', $indexContent2);
        
        // 6. Guardar el archivo
        file_put_contents($archivo2, $indexContent2);

        // if (preg_match($pattern2, $indexContent2)) {
        //     echo "Se encontró la card con ID $id";
        //     preg_match($pattern2, $indexContent2, $matchPattern2);
        //     $contenidoPattern2 = $matchPattern2[0];


            // $indexContent2 = preg_replace($pattern2, '', $indexContent2);
            

            // if (preg_match($pattern3, $indexContent2)) {
            //     echo "Se encontró el grid $id";
            //     preg_match($pattern3, $indexContent2, $matchGrid);
            //     $contenidoGrid = $matchGrid[1];
            //     $nuevoContenidoGrid = $contenido  ;
            //     $indexContent2 = preg_replace($pattern3, '<div class="grid-publicaciones">' . $nuevoContenidoGrid . '</div>', $indexContent2);
            //     file_put_contents($archivo2, $indexContent2);
            // }

        // }

        // si se encontró pattern2
        // if (preg_match($pattern2, $indexContent2)) {
        //     echo "Se encontró la card con ID $id";
        //     // guardo
        //     preg_match($pattern2, $indexContent2, $matchPattern2);
        //     $contenidoPattern2 = $matchPattern2[0];
            
        //     // elimino
        //     $indexContent2 = preg_replace($pattern2, '', $indexContent2);

        //     // actualiza
        //     file_put_contents($archivo2, $indexContent2);
            
            
        //     // capturo el grid
        //     $pattern3 = '/<div class="grid-publicaciones">(.*?)<\/div>/s';

        //     if (preg_match($pattern3, $indexContent2)) {
        //         echo "Se encontró el grid $id";
            
        //         // guardo el contenido
        //         preg_match($pattern3, $indexContent2, $matchGrid);
        //         $contenidoGrid = $matchGrid[1];
            
        //         // genero el nuevo contenido
        //         $nuevoContenidoGrid = $contenidoGrid . $contenido;
            
        //         // reemplazo el contenido del grid con el nuevo contenido
        //         $indexContent2 = preg_replace($pattern3, '<div class="grid-publicaciones">' . $nuevoContenidoGrid . '</div>', $indexContent2);

        //         file_put_contents($archivo2, $indexContent2);

        //     }
        //     else{
        //         echo "me dio false";
        //     }

        // } else {
        //     echo "No se encontró la card con ID $id";
        // }

        // $pattern3 = '/<div class="grid-publicaciones">(.*?)<\/div>/s';
        // preg_match($pattern3, $indexContent2, $matchGrid);
        // $contenidoGrid = $matchGrid[1] ?? '';

        // // Verificá cuántas coincidencias encuentra
        // preg_match_all($pattern2, $indexContent2, $matches);

        // $indexContent2 = preg_replace($pattern3, '<div class="grid-publicaciones">' . $contenidoGrid . $matches[0][0] . '</div>', $indexContent2);


        // file_put_contents($archivo2, $indexContent2);

        // if (count($matches[0]) === 1) {
        //     // Realizamos el reemplazo de la card con el nuevo contenido
        //     $indexContent2 = preg_replace($pattern2, $contenidoGrid, $indexContent2);
        //     // Aquí sumamos el contenido del div "grid-publicaciones" junto con el contenido modificado
        //     // $indexContent2 = str_replace($contenidoGrid, $contenidoGrid , $indexContent2);

        //     file_put_contents($archivo2, $indexContent2);

        // } else {
        //     echo "<div class='alert alert-danger'>Error al reemplazar: se encontraron " . count($matches[0]) . " coincidencias en $archivo2</div>";
        // }


        echo "<div class='alert alert-info'>Los datos se actualizaron correctamente.</div>";
    

        
        ?>

<script>
    history.replaceState(null,null,location.pathname);
</script>

<?php    } 
    
?>

