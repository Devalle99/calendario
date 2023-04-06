<?php include './getOptions.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Calendario para agendar las proteínas de cada comida.">
    <title>Calendario de Proteínas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./calend_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="./calend_script.js"></script>
</head>
<body>
    <header>
        <img src="../assets/sigmaLogo-white.png" alt="">
        <button type="button" class="addBtn">
            <a href="./addProte/addProte.php" class="addAnchor">Agregar Proteínas</a>
        </button>
    </header>
    <main>
        <div class="container">
            <div class="side">
                <label for="Calend" id="lblCalend">Ingresar fecha: </label>
                <input type="text" id="calend">
            </div>
            <div class="main">
                <div class="g_dia">Día de la semana</div>
                <div class="g_almuerzo">Almuerzo</div>
                <div class="g_merienda">Merienda</div>
                <div class="g_alm_op1">Opción 1</div>
                <div class="g_alm_op2">Opción 2</div>
                <div class="g_mer_op1">Opción 1</div>
                <div class="g_mer_op2">Opción 2</div>
                <div class="g_dom" id="dia-0"></div>
                <div class="g_lun" id="dia-1"></div>
                <div class="g_mar" id="dia-2"></div>
                <div class="g_mie" id="dia-3"></div>
                <div class="g_jue" id="dia-4"></div>
                <div class="g_vie" id="dia-5"></div>
                <div class="g_sab" id="dia-6"></div>
                <div class="div15">
                    <select id="in15">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div16">
                    <select id="in16">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div17">
                    <select id="in17">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div18">
                    <select id="in18">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div19"> 
                    <select id="in19">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div20">
                    <select id="in20">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div21">
                    <select id="in21">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div22">
                    <select id="in22">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div23">
                    <select id="in23">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div24">
                    <select id="in24">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div25">
                    <select id="in25">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div26">
                    <select id="in26">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div27">
                    <select id="in27">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div28">
                    <select id="in28">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div29">
                    <select id="in29">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div30">
                    <select id="in30">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div31">
                    <select id="in31">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div32">
                    <select id="in32">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div33">
                    <select id="in33">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div34">
                    <select id="in34">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div35">
                    <select id="in35">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div36">
                    <select id="in36">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div37">
                    <select id="in37">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div38">
                    <select id="in38">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div39">
                    <select id="in39">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div40">
                    <select id="in40">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div41">
                    <select id="in41">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
                <div class="div42">
                    <select id="in42">
                        <option value="" selected></option>
                        <?php echo $optionsString; ?>
                    </select>
                </div>
            </div>
            <div class="foot">
            </div>               
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>