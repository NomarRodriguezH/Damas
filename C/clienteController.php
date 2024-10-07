<?php 
include '../M/mainModel.php';
include '../V/head.php';

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
    	$Estatura= $_POST['Estatura'];
    	$Peso= $_POST['Peso'];
    	$Medidas= $_POST['Medidas'];
    	$Color= $_POST['Color'];
    	$general= $_POST['general'];
    	$personalidad= $_POST['personalidad'];
    	$EdadEdad= $_POST['Edad'];
    	$Tipo= $_POST['Tipo'];
    	$Localidad= $_POST['Localidad'];
    	$= $_POST[''];
    	$= $_POST[''];
    	$= $_POST[''];
    	$= $_POST[''];
    	$= $_POST[''];



    	if (empty($Estatura) || empty($Peso) || empty($Medidas) || empty($Color) || empty($general) || empty($personalidad)	|| empty($Edad)	|| empty($Tipo)	|| empty($Localidad)	|| empty($Peso)	|| empty($Peso)	|| empty($Peso)	|| empty($Peso)	|| empty($Peso)	|| empty($Peso)	|| empty($Peso)	

    	) {
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
                "campo_nombre" => "Medidas",
                "campo_marcador" => ":Medidas",
                "campo_valor" => $trabajo
            ],
            [
                "campo_nombre" => "Color",
                "campo_marcador" => ":Color",
                "campo_valor" => $zona
            ],
            [
                "campo_nombre" => "general",
                "campo_marcador" => ":general",
                "campo_valor" => $rango
            ],
            [
                "campo_nombre" => "personalidad",
                "campo_marcador" => ":personalidad",
                "campo_valor" => $gustos
            ],
            [
                "campo_nombre" => "Edad",
                "campo_marcador" => ":personalidad",
                "campo_valor" => $gustos
            ],
            [
                "campo_nombre" => "Tipo",
                "campo_marcador" => ":Tipo",
                "campo_valor" => $gustos
            ],
            [
                "campo_nombre" => "Localidad",
                "campo_marcador" => ":personalidad",
                "campo_valor" => $gustos
            ],
            [
                "campo_nombre" => "personalidad",
                "campo_marcador" => ":personalidad",
                "campo_valor" => $gustos
            ],
            [
                "campo_nombre" => "personalidad",
                "campo_marcador" => ":personalidad",
                "campo_valor" => $gustos
            ],
            [
                "campo_nombre" => "personalidad",
                "campo_marcador" => ":personalidad",
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
    }

    public function verPerfil($id) {
        $verPerfil = $this->seleccionarDatos("Unico", "usuario", "id", $id);
        
        if ($verPerfil->rowCount() > 0) {
            return $verPerfil->fetch(PDO::FETCH_ASSOC);
        }
        
        return null; // Si no hay perfil, retornas null o un valor adecuado
    } // FIN VER PERFIL
}
?>
