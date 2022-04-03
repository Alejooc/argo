<div class="p-4 footer text-white">
        <div class="d-flex align-items-center">
            <div class="">
                <img  class="img-fluid" src="<?=base_url()?>/assets/img/icons/logo.gif" alt="">
            </div>
            <div class="p-2 flex-grow-1 align-self-center">
                <span>
                
                    © Habbo 2021. Todos los derechos reservados | <a href="<?=base_url('legal/privacy')?>">Política de Privacidad</a>  | <a href="<?=base_url('legal/terms-of-service')?>">Términos & Condiciones</a>
                </span>
            </div>
        </div>
       
    </div>

    <script src="<?=base_url()?>/bootstrap/js/bootstrap.min.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>