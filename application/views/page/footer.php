<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Help
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright ml-auto">
            2020
        </div>
    </div>
</footer>
</div>
</div>
</div>
</body>
<script src="<?php echo base_url()?>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugin/chartist/chartist.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?php echo base_url()?>assets/js/ready.min.js"></script>
<script src="<?php echo base_url()?>assets/js/demo.js"></script>
<script src="<?php echo base_url()?>tableassets/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url()?>tableassets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url()?>tableassets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
$('.js-pscroll').each(function() {
    var ps = new PerfectScrollbar(this);

    $(window).on('resize', function() {
        ps.update();
    })
});
</script>
<script type="text/javascript">
$(function() {
    $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
});
</script>
<script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
</script>

<!--===============================================================================================-->
<script src="<?php echo base_url()?>tableassets/js/main.js"></script>

</html>