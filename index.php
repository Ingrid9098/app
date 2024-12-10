<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: PLACA FOTOVOLTAICA</h2>
                <p>Descripción:
                </p>
                <p>Se dispone de una placa fotovoltaica de 80x40 cm, cuyo rendimiento es del 20%. Determinar la 
                    cantidad de energía eléctrica (KWh) que generará, para acumular en una batería,
                    si la placa ha estado funcionando durante 12 horas, siendo el coeficiente de radiación de 0,9 cal/min.cm². 
                    Se admite que no hay pérdidas ni en el transporte, ni en la carga de la batería.
                    
                </p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/PLACA.jpg" alt="Esquema del problema">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <p>   Q = K * t * S * r (en Kcal) </p>
                <p> Convertir la energía en KWh después de calcular la energía generada en Kcal.</p>
            </section>
            <section class="datos">
            <h2>datos</h2>
                <p>Q = Energía generada</p>
                <p>K = Coeficiente de radiación</p>
                <p>t = Tiempo de funcionamiento (en minutos)</p>
                <p>S = Área de la placa fotovoltaica (cm²)</p>
                <p>r = Rendimiento de la placa (como un decimal, por ejemplo 0.20 para 20%)</p>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <p>La placa fotovoltaica tiene una superficie de S = 80 • 40 cm² = 3,200 cm²</p>
                <p>Funciona durante 12 h = 12 • 60 min = 720 min</p>
                <p> Q= K • t • S = 0.9 cal/min.cm² • 720 min • 3,200 cm² * 0.2 = 2,304,000 cal * 0.2 = 460.8 Kcal</p>
                <p>Convertir a KWh: </p>
                <p>1 Kcal = 0.00116222 KWh</p>
                <p>Energía generada en KWh = 460.8 Kcal * 0.00116222 = 0.5363 KWh</p>

                <form method="POST" action="">
                    <button type="submit" name="calcular">Calcular</button>
                </form>
            </section>

            <?php
            function calcular() {
                // Datos iniciales del problema de la placa fotovoltaica
                $area = 80 * 40; // Área en cm² (80 cm * 40 cm)
                $coeficiente_radiacion = 0.9; // coeficiente de radiación en cal/min·cm²
                $tiempo = 12 * 60; // Tiempo en minutos (12 horas)
                $rendimiento = 0.20; // Rendimiento de la placa fotovoltaica (20%)
                
                // Cálculo de la energía generada en Kcal
                $energia_generada_kcal = $coeficiente_radiacion * $tiempo * $area * $rendimiento;

                $energia_generada_kWh = $energia_generada_kcal * 0.00116222;

                // Devolver los resultados
                return array(
                    'energia_generada_kWh' => number_format($energia_generada_kWh, 4),
                    'energia_generada_kcal' => number_format($energia_generada_kcal, 2)
                );
            }

            $resultados = calcular();
            ?>

            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA">
                    <p>Energía generada en Kcal: <?php echo $resultados['energia_generada_kcal']; ?> Kcal</p>
                    <p>Energía generada en KWh: <?php echo $resultados['energia_generada_kWh']; ?> KWh</p>
                </div>
            </section>

            <?php 
            if (isset($_POST['calcular'])) {
                $resultados = calcular(); 
            ?>
            
            <section class="resultado">
                <h2>Resultado al presionar el botón:</h2>
                <div id="resultadoA">
                    <p>Energía generada en Kcal: <?php echo $resultados['energia_generada_kcal']; ?> Kcal</p>
                    <p>Energía generada en KWh: <?php echo $resultados['energia_generada_kWh']; ?> KWh</p>
                </div>
            </section>

            <?php } ?>

        </section>
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>
