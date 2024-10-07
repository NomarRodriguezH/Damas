<?php 
include '../M/mainModel.php';

class clientaController extends mainModel {

    public function completarPerfil() {

        # Almacenando datos #
        $id = $this->limpiarCadena($_POST['id']);
        $estatura = $this->limpiarCadena($_POST['estatura']);
        $peso = $this->limpiarCadena($_POST['peso']);
        $medidas = $this->limpiarCadena($_POST['medidas']);
        $colorPiel = $this->limpiarCadena($_POST['colorPiel']);
        $descripcion = $this->limpiarCadena($_POST['descripcion']);
        $personalidad = $this->limpiarCadena($_POST['personalidad']);
        $edad = $this->limpiarCadena($_POST['edad']);
        $tipoCuerpo = $this->limpiarCadena($_POST['tipoCuerpo']);
        $buscando = $this->limpiarCadena($_POST['buscando']);
        $trabajo = $this->limpiarCadena($_POST['trabajo']);
        $ingresos = $this->limpiarCadena($_POST['ingresos']);
        $oferta = $this->limpiarCadena($_POST['oferta']);
        $peticiones = $this->limpiarCadena($_POST['peticiones']);
        $uno = '1';

        # Verificando campos obligatorios #
        if ($estatura == "" || $peso == "" || $medidas == "" || $colorPiel == "" || $personalidad == "" || $descripcion == "" || $edad == "" || $tipoCuerpo == "" || $buscando == "" || $trabajo == "" || $oferta == "" || $peticiones == "") {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No has llenado todos los campos que son obligatorios",
                "icono" => "error"
            ];
            return json_encode($alerta);
            exit();
        }

        # Verificando integridad de los datos #
        if ($this->verificarDatos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}", $oferta)) {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "El campo oferta no coincide con el formato solicitado",
                "icono" => "error"
            ];
            return json_encode($alerta);
            exit();
        }

        if ($this->verificarDatos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}", $peticiones)) {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "El campo peticiones no coincide con el formato solicitado",
                "icono" => "error"
            ];
            return json_encode($alerta);
            exit();
        }

        # Verificando id #
        if ($id != "") {
            $check_id = $this->ejecutarConsulta("SELECT idCA FROM clienta_datos WHERE idCA='$id'");
            if ($check_id->rowCount() > 0) {
                $alerta = [
                    "tipo" => "simple",
                    "titulo" => "Ocurrió un error inesperado",
                    "texto" => "La clienta ya ha llenado el formulario.",
                    "icono" => "error"
                ];
                return json_encode($alerta);
                exit();
            }
        }

        $usuario_datos_reg = [
            [
                "campo_nombre" => "idCA",
                "campo_marcador" => ":idCA",
                "campo_valor" => $id
            ],
            [
                "campo_nombre" => "estatura",
                "campo_marcador" => ":Estatura",
                "campo_valor" => $estatura
            ],
            [
                "campo_nombre" => "peso",
                "campo_marcador" => ":Peso",
                "campo_valor" => $peso
            ],
            [
                "campo_nombre" => "medidas",
                "campo_marcador" => ":Medidas",
                "campo_valor" => $medidas
            ],
            [
                "campo_nombre" => "colorPiel",
                "campo_marcador" => ":ColorPiel",
                "campo_valor" => $colorPiel
            ],
            [
                "campo_nombre" => "descripcion",
                "campo_marcador" => ":Descripcion",
                "campo_valor" => $descripcion
            ],
            [
                "campo_nombre" => "personalidad",
                "campo_marcador" => ":Personalidad",
                "campo_valor" => $personalidad
            ],
            [
                "campo_nombre" => "edad",
                "campo_marcador" => ":Edad",
                "campo_valor" => $edad
            ],
            [
                "campo_nombre" => "tipoCuerpo",
                "campo_marcador" => ":TipoCuerpo",
                "campo_valor" => $tipoCuerpo
            ],
            [
                "campo_nombre" => "buscando",
                "campo_marcador" => ":Buscando",
                "campo_valor" => $buscando
            ],
            [
                "campo_nombre" => "trabajo",
                "campo_marcador" => ":Trabajo",
                "campo_valor" => $trabajo
            ],
            [
                "campo_nombre" => "ingresos",
                "campo_marcador" => ":Ingresos",
                "campo_valor" => $ingresos
            ],
            [
                "campo_nombre" => "oferta",
                "campo_marcador" => ":Oferta",
                "campo_valor" => $oferta
            ],
            [
                "campo_nombre" => "peticiones",
                "campo_marcador" => ":Peticiones",
                "campo_valor" => $peticiones
            ],
            [
                "campo_nombre" => "id_zona",
                "campo_marcador" => ":Id_zona",
                "campo_valor" => $uno
            ]
        ];

        $registrar_usuario = $this->guardarDatos("clienta_datos", $usuario_datos_reg);

        if ($registrar_usuario->rowCount() == 1) {
            $alerta = [
                "tipo" => "limpiar",
                "titulo" => "Usuario",
                "texto" => "La información de la clienta se ha registrado",
                "icono" => "success"
            ];
        } else {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No se pudo registrar el usuario, por favor intente nuevamente",
                "icono" => "error"
            ];
        }

        return json_encode($alerta);
    }

    public function verificarPerfilCompleto($id){
    $check_usuario=$this-> ejecutarConsulta("SELECT * FROM clienta_datos WHERE idCA='$id'");
        if($check_usuario->rowCount()==1){
         $msj= "si";
        }else {
            $msj ="Completa tu perfil, la información que envíes debe ser real, para que lo que buscas y ofreces sea lo más cercano posible.";
        }
        return $msj;
    }

    public function mostrarClientes() {
        $usuarios = $this->ejecutarConsulta("SELECT * FROM usuario WHERE S='1'");

        if ($usuarios->rowCount() > 0) {
            $html = '<div class="clientes-container">';
            
            while ($usuario = $usuarios->fetch(PDO::FETCH_ASSOC)) {
            $usuariosx = $this->ejecutarConsulta("SELECT * FROM usuario_suggar WHERE idC='".$usuario['id']."' ");
            $usuariox = $usuariosx->fetch(PDO::FETCH_ASSOC);

                $html .= '
                <div class="card">
                    <a href="ver-suggars.php?id=' . htmlspecialchars($usuario['id']) . '"><h2>' . htmlspecialchars($usuario['usuario_nombre']) . '</h2></a>
                    <p><strong>Email:</strong> ' . htmlspecialchars($usuario['usuario_usuario']) . '</p>
                    <p><strong>Edad:</strong> ' . htmlspecialchars($usuario['edad']) . '</p>
                    <img src="../../fotos/' . htmlspecialchars($usuario['foto']) . '" width="120px" height="170px">
                    <p>Ingresos mensuales: ' . htmlspecialchars($usuariox['ingresosMensuales']) . '</p>
                    <p>Busca: ' . htmlspecialchars($usuariox['rangoEdad']) . '</p>
                </div>';
            }
            
            $html .= '</div>';
        } else {
            $html = '<p>No hay usuarios registrados.</p>';
        }

        return $html;
    }


    public function verInformacionSuggar($id){
        $informacion1 = $this->ejecutarConsulta("SELECT * FROM usuario WHERE id='$id' ");
        $informacion2 = $this->ejecutarConsulta("SELECT * FROM usuario_suggar WHERE idC='$id' ");

        if ($informacion1->rowCount() >0 && $informacion2->rowCount()>0) {
            $informacion1x= $informacion1->fetch(PDO::FETCH_ASSOC);
            $informacion2x=$informacion2->fetch(PDO::FETCH_ASSOC);


            echo 
            '<html>'
                '<body>'
                    '<div>'
                   ' <p>'.$informacion1x['usuario_nombre'];.'</p>'
                   ' </div>'

                '</body>'
           ' </html>'; 

            

        }else {
            echo "No existen datos de SG";
        }
    }





} // Ultima linea 
?>
