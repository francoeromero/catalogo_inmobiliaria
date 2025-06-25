<?php
// en esta linea se verifica si se envio el id y el nombre de la imagen
if (!empty($_GET['id']) && !empty($_GET['nombre'])) {

    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $jsonFile = 'archivos/datos.json';

    // elimino de la web
    try {
        unlink($nombre);
    } catch (\Throwable $th) {
        // throw $th;
    }

    // elimino de la base de datos
    $eliminar = $conexion->query("delete from img where id_img=$id");

    // verifico si se elimino
    if ($eliminar == 1) {

        // Si la eliminación en la base de datos fue exitosa, eliminar del JSON
        if (file_exists($jsonFile) && filesize($jsonFile) > 0) {
            $data = json_decode(file_get_contents($jsonFile), true);

            // Filtrar para eliminar el objeto con el ID correspondiente
            $data = array_filter($data, function ($obj) use ($id) {
                return $obj['id'] != $id;
            });

            // Reindexar y guardar los datos nuevamente en el JSON
            file_put_contents($jsonFile, json_encode(array_values($data), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }

        // Elimina del HTML solo en index.php
        $archivo = 'index.php';
        $archivo2 = 'todasPublicaciones.php';

        if (file_exists($archivo)) {
            $contenido = file_get_contents($archivo);

            // Busca el bloque <section class="card"> que contiene internamente el <p class="idRegistro">
            $patron = '/<section class="card">(.*?)<p class="idRegistro" style="display:none;">' . preg_quote($id, '/') . '<\/p>(.*?)<\/section>/s';

            $contenido = preg_replace($patron, '', $contenido);

            file_put_contents($archivo, $contenido);
        }

        if (file_exists($archivo2)) {  
            // Verifica si el archivo existe
            $contenido2 = file_get_contents($archivo2);  // Lee el contenido del archivo
        
            libxml_use_internal_errors(true);  // Desactiva errores de XML mal formado (previene warnings de HTML)
        
            $dom = new DOMDocument();  // Crea una nueva instancia de DOMDocument (usada para manipular HTML)
            $dom->loadHTML($contenido2, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);  // Carga el contenido del archivo HTML en el DOMDocument
        
            $xpath = new DOMXPath($dom);  // Crea un objeto DOMXPath para realizar consultas sobre el HTML
            $pNodes = $xpath->query("//p[@class='idRegistro' and text()='$id']");  // Encuentra todos los <p> con la clase 'idRegistro' y el contenido igual a $id
        
            foreach ($pNodes as $p) {  // Itera sobre cada nodo <p> encontrado
                $section = $p->parentNode;  // Obtiene el elemento padre del <p>, que debería ser la <section>
                if ($section->nodeName === 'section') {  // Verifica que el nodo padre sea una <section>
                    $section->parentNode->removeChild($section);  // Elimina la <section> completa del DOM
                }
            }
        
            // Convierte el DOM modificado a HTML sin entidades escapadas
            // Utilizamos el documentElement para evitar un encabezado innecesario
            $nuevoContenido = $dom->saveHTML($dom->documentElement);  
        
            // Deshacemos el escape de entidades HTML si es necesario
            $nuevoContenido = html_entity_decode($nuevoContenido, ENT_NOQUOTES, 'UTF-8');
        
            // Guarda el contenido modificado en el archivo
            file_put_contents($archivo2, $nuevoContenido);  
        }

        // Inyectar JS para borrar la card en todasPublicaciones.php al cargar
        
        // echo "<script>localStorage.setItem('eliminarId', '$id');</script>";
        
        // echo "<script>
        //         let lista = JSON.parse(localStorage.getItem('listaEliminados')) || [];
        //         lista.push('$id');
        //         localStorage.setItem('listaEliminados', JSON.stringify(lista));
        //     </script>";

        echo "<div class='alert alert-info'>Se elimino la imagen exitosamente</div>";
    } else {
        echo "<div class='alert alert-danger'>No se pudo eliminar la imagen</div>";
    }
    ?>

    <script>
        history.replaceState(null, null, location.pathname);
    </script>

<?php } ?>
