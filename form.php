<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <!--    ---------------Metro UI------------------------------->
    <!--    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4.5.1/css/metro-all.min.css">-->
    <!--   ---------------Materialize------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<form action="form.php" method="post" class="row">
    <div style="max-width: 400px; margin: 20px">
        <div class="input-field">
            <input id="last_name" type="text" class="validate" name="name">
            <label for="last_name">Nombre</label>
        </div>
        <div class="input-field">
            <p>
                <label>
                    <input name="sexo" type="radio" checked value="M"/>
                    <span>Hombre</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="sexo" type="radio" value="F"/>
                    <span>Mujer</span>
                </label>
            </p>
        </div>
        <div class="input-field">
            <p>
                <label>
                    <input type="checkbox" value="Posee concimietos de programacion" name="checkbox">
                    <span>Sabe programar</span>
                </label>
            </p>
        </div>
        <div class="input-field">
            <select id="select" name="select">
                <option value="" disabled selected style="color: gray">Choose your country</option>
                <option value="Cuba">Cuba</option>
                <option value="Australia">Australia</option>
                <option value="Japon">Japon</option>
                <option value="China">China</option>
                <option value="Korea">Korea</option>
                <option value="Venezuela">Venezuela</option>
            </select>
            <label for="select">Pais</label>
        </div>
        <div class="input-field">
            <textarea id="textarea1" class="materialize-textarea" name="curriculum"></textarea>
            <label for="textarea1">Curriculum</label>
        </div>
        <br>
        <input id='scale-demo' type="submit" class="waves-effect waves-light btn " value="submit"
               style="
        background-color: #29b6f6;
">
    </div>
</form>
<div style="margin: 20px">
    <?php
    if ($_POST) {
        echo '<b>Nombre: </b>' . $_POST['name'] . '<br>';
        echo '<b>Sexo: </b>' . $_POST['sexo'] . '<br>';
        if (isset($_POST['checkbox']))
            echo '<b>Conocimientos: </b>' . $_POST['checkbox'] . '<br>';
        else {
            echo '<b>Conocimientos: </b>' . 'No sabe programar' . '<br>';
            echo '<b>Nivel: </b>' . '0' . '<br>';
        }
        if (isset($_POST['checkbox']))
            echo '<b>Pais: </b>' . $_POST['select'] . '<br>';
        if (isset($_POST['curriculum']))
            echo '<b>Curriculum: </b>' . $_POST['curriculum'] . '<br>';
        else
            echo '<b>Curriculum: </b>' . '-' . '<br>';
        if (isset($_POST['nacimiento']))
            echo '<b>Dia de Nacimiento: </b>' . $_POST['nacimiento'] . '<br>';
        else
            echo '<b>Dia de Nacimiento: </b>' . '-' . '<br>';

    }
    ?>
</div>

<!-----------------Metro UI------------------------------->
<!--<script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script>-->
<!-----------------Materialize------------------------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    window.addEventListener('load', function () {
        M.AutoInit();
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
        elems = document.querySelectorAll('.datepicker');
        instancesdate = M.Datepicker.init(elems, options);

    });
</script>
</body>

</html>
