<div class="page-wrapper fixed-navbar-top">

    <div id="loader-container" style="display:none">
    <div id="loader">
        <div class="loader-inner line-scale">
            <div></div><div></div><div></div><div></div><div></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var loadersign = document.getElementById('loader-container');
    loadersign.style.display = "block";
    window.onload = function() {
        loadersign.style.display = "none";
    }
</script>
<nav class="navbar navbar-blue navbar-fixed-top topbar" id="topbar">

    <div class="navbar-header navbar-always-float navbar-left" style="width: 50.5rem">
        <button class="btn btn-transparent-light navbar-btn navbar-sidebar-toggle  hidden-xs ">
            <i class="mdi mdi-menu"></i>
        </button>
        <button class="btn btn-transparent-light navbar-btn navbar-sidebar-collapse hidden-sm hidden-md hidden-lg">
            <i class="mdi mdi-menu"></i>
        </button>
        <a class="navbar-brand" href="/">
            <h8 class="navbar-brand-text"><?= session('permiso_name') ?>
                <span style="font-size: 60%; padding-left: 20px">
                        <!-- Rubén García Barco -->
                        <?= session('username') ?>
                    </span>
            </h8>
        </a>

    </div>

    <div class="navbar-header navbar-always-float navbar-right" style="margin-right: -150px">
        <img class="" src="<?php echo base_url() . '/assets/img/' ?>logoIMF.png" height="60">
    </div>

</nav>