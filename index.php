
<?php 
    include('header.php');
?>
    <div class="contenedor formulario-buscador">
        <form action="" method="GET">
            <fieldset class="form-fieldset">
                <div class="column">
                    <label for="">Nombre</label>
                    <input type="text">
                </div>
                <div class="column">
                    <label for="">Apellido</label>
                    <input type="text">
                </div>
            </fieldset>
            <fieldset class="form-fieldset">
                <div class="column">
                    <label for="">DNI</label>
                    <input type="text">
                </div>
                <div class="column">
                    <label for="">Correo</label>
                    <input type="email">
                </div>
            </fieldset>
            <input type="submit" value="Enviar">
        </form>
    </div>
    



<?php
    include('footer.php');
?>
