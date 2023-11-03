
    <section class="form_carga">
        <h3 class="text-center">Carga de Artículos</h3><br><br>
        
    <div id="formu_aric">
      
       <form class="row g-3" action="<?= base_url(); ?>OperarDatos/GrabarArtiulo" method="POST" align-items-center>

            <input type="text" name="nombre" placeholder="Nombre del artículo" required maxlength="40"><br><br>
            <input type="text" name="descripcion" placeholder="descripción"  maxlength="100"><br><br>
            <input type="text" name="precio" placeholder="Precio" required maxlength="10"><br><br>
            <input type="submit" value="Cargar artículo" class="btn btn-dark">
        </form>
    </div>
    </section>
    
</body>
</html>