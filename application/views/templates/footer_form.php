    <div class="container" style="margin-top:20px;">
        <div class="row">    
            <div class="col-lg-12">
                <p class="m-t-1">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php //echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <a id="back-to-top" href="#" class="btn btn-sm btn-primary back-to-top" role="button" title="Volver al inicio" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url();?>assets/images/logo-pachart-header.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
                </div>
                <div class="col-sm-4">
                    <h4 class="title">Mi cuenta</h4>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url();?>index.php/index">Inicio</a></li>
                        <li><a href="<?php echo base_url();?>index.php/coleccion">Colección</a></li>
                        <li><a href="<?php echo base_url();?>index.php/blog">Blog</a></li> 
                        <li><a href="#">PACHArt</a></li> 
                        <li><a href="<?php echo base_url();?>index.php/index/contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4 class="title">Tags</h4>
                    <div class="category">
                        <ul class="list-unstyled list-inline">
                          <li><a href="#">men</a></li> 
                          <li><a href="#">women</a></li> 
                          <li><a href="#">boy</a></li> 
                          <li><a href="#">girl</a></li> 
                          <li><a href="#">bag</a></li> 
                          <li><a href="#">teshart</a></li> 
                          <li><a href="#">top</a></li> 
                          <li><a href="#">shos</a></li> 
                          <li><a href="#">glass</a></li> 
                          <li><a href="#">kit</a></li> 
                          <li><a href="#">baby dress</a></li>
                          <li><a href="#">kurti</a><li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <hr>
    
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url();?>assets/images/logo-pachalab-footer.png" alt="">
                    <!--<p>ideas y desarrollo de estas tierras</p>-->
                </div>
                <div class="col-sm-4">
                    <div class="social-icon">
                        <ul class="list-unstyled list-inline">
                            <li><a class="social" href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li> 
                            <li><a class="social" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li> 
                            <li><a class="social" href="#"><i aria-hidden="true" class="fa fa-instagram"></i></a></li> 
                            <li><a class="social" href="#"><i aria-hidden="true" class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4" align="right">
                    <span class="text-right">© PACHArt 2018</span><img src="<?php echo base_url();?>assets/images/logo-pacha-ico.png" alt="">
                    <!--<p>Copyright © PACHArt 2018<p>-->
                </div>
            </div>        
        </div>
    </footer>

<!-- jQuery 2.2.3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>

<!-- formValidation.io -->
<script src="<?php echo base_url();?>plugins/formvalidation/js/formValidation.min.js"></script>
<script src="<?php echo base_url();?>plugins/formvalidation/js/framework/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>plugins/formvalidation/js/addons/reCaptcha2.min.js"></script>
<script src="<?php echo base_url();?>plugins/formvalidation/js/language/es_ES.js"></script>

<script type="text/javascript">
    var $baseURL = "<?php echo base_url();?>";
</script>

<!-- Autocomplete -->
<script src="<?php echo base_url();?>plugins/bootstrap-chosen-master/chosen.jquery.min.js"></script>
<script>
    $(function() {
        $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
    });
</script>

<!-- Datepicker -->
<script src="<?php echo base_url();?>plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>plugins/datepicker/locales/bootstrap-datepicker.es.js"></script>
<script type="application/javascript">
    $('input.dateinput').datepicker({
        language: "es",
        autoclose: true,
        clearBtn: true,
        orientation: "top",
        format: " dd/mm/yyyy" // Notice the Extra space at the beginning
    });
</script>

<!-- bootstrap-table -->
<script src="<?php echo base_url();?>plugins/bootstrap-table/bootstrap-table.js"></script>
<script src="<?php echo base_url();?>plugins/bootstrap-table/locale/bootstrap-table-es-AR.js"></script>

<!-- InputMask -->
<script src="<?php echo base_url();?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url();?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url();?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
    //Datemask dd/mm/yyyy
    $(".dateinput").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    $("[data-mask]").inputmask();
</script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<script src="<?php echo base_url();?>assets/js/pachart.js"></script>

</body>
</html>