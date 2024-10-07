<?php  
session_start();
include '../V/head.php';
include '../C/clientaController.php';
$id = $_SESSION['id']; 
$clienta= new clientaController();
$resultado = $clienta->verificarPerfilCompleto($id);
echo $resultado;

if ($resultado == "si") {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo '<script>
            Swal.fire({
                title: "¡Atención!",
                text: "Ya llenaste el formulario.",
                icon: "warning",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "panel.php";
                }
            });
        </script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Completar Perfil</title>
</head>
<body>
    <h1 class="h1">Completar Perfil</h1>

    <form class="box" action="RC.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="field">
            <label class="label" for="estatura">Estatura:</label>
            <div class="control">
                <input class="input" type="number" id="estatura" name="estatura" autocomplete="off" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="peso">Peso:</label>
            <div class="control">
                <input class="input" type="number" id="peso" name="peso" autocomplete="off" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="medidas">Medidas:</label>
            <div class="control">
                <div class="select">
                    <select name="medidas" id="medidas" autocomplete="off">
                        <option selected value="1">60x90</option>
                        <option value="2">60x80</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label" for="colorPiel">Color de Piel:</label>
            <div class="control">
                <div class="select">
                    <select name="colorPiel" id="colorPiel" autocomplete="off">
                        <option selected value="1">Blanca</option>
                        <option value="2">Morena</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label" for="descripcion">Descripción:</label>
            <div class="control">
                <textarea id="descripcion" name="descripcion" placeholder="Cómo eres, qué te gusta hacer, por qué buscas un SD..."></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="personalidad">Personalidad:</label>
            <div class="control">
                <input class="input" type="text" id="personalidad" name="personalidad" autocomplete="off" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="edad">Edad:</label>
            <div class="control">
                <input class="input" type="number" id="edad" name="edad" autocomplete="off" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="tipoCuerpo">Tipo de cuerpo:</label>
            <div class="control">
                <div class="select">
                    <select name="tipoCuerpo" id="tipoCuerpo" autocomplete="off">
                        <option selected value="1">Manzana</option>
                        <option value="2">Copa</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label" for="buscando">Buscando:</label>
            <div class="control">
                <input class="input" type="text" id="buscando" name="buscando" autocomplete="off" required placeholder="Por que buscas un SD...">
            </div>
        </div>

        <div class="field">
            <label class="label" for="trabajo">Trabajo de SD:</label>
            <div class="control">
                <div class="select">
                    <p>¿Te importa en qué trabaje el SD que buscas?</p>
                    <select name="trabajo" id="trabajo" autocomplete="off">
                        <option selected value="1">No me importa</option>
                        <option value="2"></option>
                    </select>
                </div>
            </div>
        </div>
        <br><br>

        <div class="field">
            <label class="label" for="ingresos">Ingresos:</label>
            <div class="control">
                <div class="select">
                    <p>¿Cuánto debe ganar el SG que buscas? (Al mes)</p>
                    <select name="ingresos" id="ingresos" autocomplete="off">
                        <option selected value="1">$-15,000</option>
                        <option value="2">$15,000-$25,000</option>
                        <option value="3">$25,000-$35,000</option>
                        <option value="4">$35,000-$40,000</option>
                        <option value="5">$40,000-$50,000</option>
                        <option value="6">$50,000-$60,000</option>
                        <option value="7">$60,000-$70,000</option>
                        <option value="8">$70,000-$80,000</option>
                        <option value="9">$80,000-$90,000</option>
                        <option value="10">$90,000-$100,000</option>
                        <option value="11">Más de $100,000</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label" for="oferta">Oferta:</label>
            <div class="control">
                <input class="input" type="text" id="oferta" name="oferta" autocomplete="off" required placeholder="¿Qué es lo que le darías a tu SG?">
            </div>
        </div>

        <div class="field">
            <label class="label" for="peticiones">Peticiones:</label>
            <div class="control">
                <input class="input" type="text" id="peticiones" name="peticiones" autocomplete="off" required placeholder="¿Qué es lo que le pedirías a tu SG?">
            </div>
        </div>

        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
        <input type="hidden" name="modulo_C" value="completar">
        
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-info is-rounded">Registrar</button>
            </div>
        </div>
    </form>
</body>
</html>
