<?= $this->extend('template/defaultTemplate') ?>

<!-- Esto es para el contenido principal !-->
<?= $this->section('content') ?>

<h1>Hola mundo v</h1>

<?= $this->endSection() ?>


<!-- Esto es para los scripts !-->
<?= $this->section('script') ?>

<?= $this->endSection() ?>