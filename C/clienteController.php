<?php 
require_once '../../M/mainModel.php';


class clienteController extends mainModel {

    /*----------  Controlador registrar usuario  ----------*/

    // tipo, tabla, campo, id
    public function verDato($campo, $tabla, $campo2, $id){
    	$dato=$this->seleccionarUNO($campo, $tabla, $campo2, $id);

    	if ($dato->rowCount()>0){
    		    $resultado= $dato->fetch(PDO::FETCH_ASSOC);
    			 return $resultado[$campo];
    	} 
    	return null;
    }

    public function promocionar() {
        # Almacenando datos #
        $id = $this->limpiarCadena($_POST['id']);
        $ingresos = $this->limpiarCadena($_POST['ingresos']);
        $trabajo = $this->limpiarCadena($_POST['trabajo']);
        $zona = $this->limpiarCadena($_POST['zona']);
        $rango = $this->limpiarCadena($_POST['rango']);
        $gustos = $this->limpiarCadena($_POST['gustos']);

        # Verificando campos obligatorios #
        if (empty($ingresos) || empty($trabajo) || empty($zona) || empty($rango) || empty($gustos)) {
            return json_encode([
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No has llenado todos los campos que son obligatorios.",
                "icono" => "error"
            ]);
        }

        # Verificando si el usuario ya está registrado #
        if (!empty($id)) {
            $check_email = $this->ejecutarConsulta("SELECT idC FROM usuario_suggar WHERE idC='$id'");
            if ($check_email->rowCount() > 0) {
                return json_encode([
                    "tipo" => "simple",
                    "titulo" => "Ocurrió un error inesperado",
                    "texto" => "El usuario ya está registrado como un sugar.",
                    "icono" => "error"
                ]);
            }
        }

        # Almacenando datos del usuario #
        $usuario_datos_reg = [
            [
                "campo_nombre" => "idC",
                "campo_marcador" => ":Id",
                "campo_valor" => $id
            ],
            [
                "campo_nombre" => "ingresosMensuales",
                "campo_marcador" => ":Ingresos",
                "campo_valor" => $ingresos
            ],
            [
                "campo_nombre" => "trabajo",
                "campo_marcador" => ":Trabajo",
                "campo_valor" => $trabajo
            ],
            [
                "campo_nombre" => "zona",
                "campo_marcador" => ":Zona",
                "campo_valor" => $zona
            ],
            [
                "campo_nombre" => "rangoEdad",
                "campo_marcador" => ":Rango",
                "campo_valor" => $rango
            ],
            [
                "campo_nombre" => "id_gustos",
                "campo_marcador" => ":Gustos",
                "campo_valor" => $gustos
            ],
            [
                "campo_nombre" => "creado",
                "campo_marcador" => ":Creado",
                "campo_valor" => date("Y-m-d H:i:s")
            ]
        ];

        try {
            $registrar_usuario = $this->guardarDatos("usuario_suggar", $usuario_datos_reg);

            if ($registrar_usuario->rowCount() == 1) {
                $actualizar = $this->actualizarCampo("usuario", "S", "1", "id", $id);

                if ($actualizar) {
                    return json_encode([
                        "tipo" => "limpiar",
                        "titulo" => "Usuario registrado",
                        "texto" => "El nuevo sugar se ha registrado con éxito.",
                        "icono" => "success"
                    ]);
                }
            } else {
                return json_encode([
                    "tipo" => "simple",
                    "titulo" => "Ocurrió un error inesperado",
                    "texto" => "No se pudo registrar el usuario, por favor intente nuevamente.",
                    "icono" => "error"
                ]);
            }
        } catch (Exception $e) {
            return json_encode([
                "tipo" => "simple",
                "titulo" => "Error de base de datos",
                "texto" => "Ocurrió un error: " . $e->getMessage(),
                "icono" => "error"
            ]);
        }
    } // fin promocionar


    public function SBH(){
    	$id=$_POST['id'];
    	$Estatura= $_POST['Estatura'];
    	$Peso= $_POST['Peso'];
    	$Medidas= $_POST['Medidas'];
    	$Color= $_POST['Color'];
    	$general= $_POST['general'];
    	$personalidad= $_POST['personalidad'];
    	$Edad= $_POST['Edad'];
    	$Tipo= $_POST['Tipo'];
    	$Localidad= $_POST['Localidad'];
    	$Buscando= $_POST['Buscando'];
    	

    	if (empty($Estatura) || empty($Peso) || empty($Medidas) || empty($Color) || empty($general) || empty($personalidad)	|| empty($Edad)	|| empty($Tipo)	|| empty($Localidad)	|| empty($Buscando)	) {
            return json_encode([
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No has llenado todos los campos que son obligatorios.",
                "icono" => "error"
            ]);
        }

        # Verificando si el usuario ya está registrado #
        if (!empty($id)) {
            $check_email = $this->ejecutarConsulta("SELECT idU FROM usuario_sbh WHERE idU='$id'");
            if ($check_email->rowCount() > 0) {
                return json_encode([
                    "tipo" => "simple",
                    "titulo" => "Ocurrió un error inesperado",
                    "texto" => "El usuario ya está registrado como un suggar baby",
                    "icono" => "error"
                ]);
            }
        }

        # Almacenando datos del usuario #
        $usuario_datos_reg = [
            [
                "campo_nombre" => "idU",
                "campo_marcador" => ":Id",
                "campo_valor" => $id
            ],
            [
                "campo_nombre" => "Estatura",
                "campo_marcador" => ":Estatura",
                "campo_valor" => $Estatura
            ],
            [
                "campo_nombre" => "Peso",
                "campo_marcador" => ":Peso",
                "campo_valor" => $Peso
            ],
            [
                "campo_nombre" => "Medidas",
                "campo_marcador" => ":Medidas",
                "campo_valor" => $Medidas
            ],
            [
                "campo_nombre" => "Color",
                "campo_marcador" => ":Color",
                "campo_valor" => $Color
            ],
            [
                "campo_nombre" => "general",
                "campo_marcador" => ":general",
                "campo_valor" => $general
            ],
            [
                "campo_nombre" => "personalidad",
                "campo_marcador" => ":personalidad",
                "campo_valor" => $personalidad
            ],
            [
                "campo_nombre" => "Edad",
                "campo_marcador" => ":Edad",
                "campo_valor" => $Edad
            ],
            [
                "campo_nombre" => "Tipo",
                "campo_marcador" => ":Tipo",
                "campo_valor" => $Tipo
            ],
            [
                "campo_nombre" => "Localidad",
                "campo_marcador" => ":Localidad",
                "campo_valor" => $Localidad
            ],
            [
                "campo_nombre" => "Buscando",
                "campo_marcador" => ":Buscando",
                "campo_valor" => $Buscando
            ],
            [
                "campo_nombre" => "creado",
                "campo_marcador" => ":Creado",
                "campo_valor" => date("Y-m-d H:i:s")
            ]
        ];

        try {
            $registrar_usuario = $this->guardarDatos("usuario_sbh", $usuario_datos_reg);

            if ($registrar_usuario->rowCount() == 1) {
                $actualizar = $this->actualizarCampo("usuario", "SB", "1", "id", $id);

                if ($actualizar) {
                    return json_encode([
                        "tipo" => "limpiar",
                        "titulo" => "Usuario registrado",
                        "texto" => "El nuevo suggar baby se ha registrado con éxito.",
                        "icono" => "success"
                    ]);
                }
            } else {
                return json_encode([
                    "tipo" => "simple",
                    "titulo" => "Ocurrió un error inesperado",
                    "texto" => "No se pudo registrar el usuario, por favor intente nuevamente.",
                    "icono" => "error"
                ]);
            }
        } catch (Exception $e) {
            return json_encode([
                "tipo" => "simple",
                "titulo" => "Error de base de datos",
                "texto" => "Ocurrió un error: " . $e->getMessage(),
                "icono" => "error"
            ]);
        }
    } // fin promocionar
    

    public function verPerfil($id) {
        $verPerfil = $this->seleccionarDatos("Unico", "usuario", "id", $id);
        
        if ($verPerfil->rowCount() > 0) {
            return $verPerfil->fetch(PDO::FETCH_ASSOC);
        }
        
        return null; // Si no hay perfil, retornas null o un valor adecuado
    } // FIN VER PERFIL


    public function mostrarDamas() {
        $damas = $this->ejecutarConsulta("SELECT * FROM damas WHERE status='1'");

        if ($damas->rowCount() > 0) {
           $html .= '
            <div class="columns is-multiline is-justify-content-center">'; // Contenedor principal para las columnas

            while ($usuario = $damas->fetch(PDO::FETCH_ASSOC)) {
                $damasPrecios = $this->ejecutarConsulta("SELECT * FROM damas_precios WHERE id='" . $usuario['id'] . "' ");
                $precios = $damasPrecios->fetch(PDO::FETCH_ASSOC);

                $damasFisico = $this->ejecutarConsulta("SELECT * FROM damas_fisico WHERE id='" . $usuario['id'] . "' ");
                $fisico = $damasFisico->fetch(PDO::FETCH_ASSOC);

                $html .= '
                <div class="column is-one-quarter"> <!-- Cada columna ocupa un cuarto del ancho total -->
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="../../fotos/damas/' . htmlspecialchars($usuario['foto']) . '" alt="Foto de ' . htmlspecialchars($usuario['username']) . '">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <a href="ver-suggars.php?id=' . htmlspecialchars($usuario['nombre']) . '">
                                        <h2 class="title is-4">' . htmlspecialchars($usuario['username']) . '</h2>
                                    </a>
                                    <p class="subtitle is-6"><strong>Tipo:</strong> ' . htmlspecialchars($usuario['tipo']) . '</p>
                                    <p class="subtitle is-6"><strong>Edad:</strong> ' . htmlspecialchars($usuario['edad']) . '</p>
                                </div>
                            </div>
                            <div class="content">
                                <p><strong>Ingresos mensuales:</strong> ' . htmlspecialchars($precios['precio']) . '</p>
                                <p><strong>Medidas:</strong> ' . htmlspecialchars($fisico['medidas']) . '</p>
                            </div>
                        </div>
                    </div>
                </div>'; // Cierre de columna
            }

            $html .= '</div>'; // Cierre del contenedor de columnas

        } else {
            $html = '<p>No hay damas registradas.</p>';
        }

        return $html;
    }

}// ULTIMA LINEA.
?>
