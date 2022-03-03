<?php

$nombrePosicion = "Dashboard";
$nombrePosicionMain = "Dashboard";

?>
<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <?= $this->section('linksNeed') ?>
    <?= $this->endSection() ?>

    <?php if (session('msg')) : ?>
        <script>
            toastr.options.timeOut = 3000; // How long the toast will display without user interaction
            toastr.options.extendedTimeOut = 6000; // How long the toast will display after a user hovers over it
            toastr.options.progressBar = false;
            toastr.<?= session('msg.type') ?>('<?= session('msg.content') ?>!');
        </script>
    <?php endif ?>
    

    <?= $this->endSection() ?>