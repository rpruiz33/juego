<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="href="<?= base_url(); ?>assets/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="<?= base_url(); ?>assets/css_1/vistainicial.css">-->
    </head>

    <body> 
    <contenedor class="container">
        <h1> Esta es un modelo de vista </h1>

        <img src="<?= base_url(); ?>assets/imagenes/pagEnConstr.jpg">
        <br>
        <h1>INGRESE SU NOMBRE Y APELLIDO</h1>
        <br>
        <div class="cuerpo">
            <form action="<?= base_url(); ?>OperarDatos/RecibirGrabar" method="POST">

                <p>Nombre   <input class="datos"  name="nombre" type="text" required="" autocomplete="off"></p>
                <p>Apellido <input class="datos"  name="apellido" type="text" required="" autocomplete="off"></p>
                <br>
                <button class="btn btn-primary btn-large" type="submit">Enviar</button>
            </form>


        </div>
        <br>
        <section class="footer">
            <p>Domicilio:mi calle 2525</p> 
            <p>Lanus Provincia de Buenos Aires Argentina</p>
            <p>Telefono : 54011025252525</p>
        </section>

    </contenedor>
</body> 
</html>

