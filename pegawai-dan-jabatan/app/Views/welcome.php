<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<?php if(session()->get('login')): ?>
    <div class="alert alert-success">
    Selamat Datang Saudara/i <strong><?= session()->get('nama');?>.</strong>
    </div>
    <?php endif; ?>
    
    <div class="p-5 text-center bg-white rounded-3 shadow-sm">
        <h1 class="text-body-emphasis">DATA-DATA NAMA GURU SMK NURUL FALAH</h1>
        <p class="lead">
            Selamat Datang di Aplikasi CRUD GURU. Aplikasi ini digunakan Untuk Mengelola Data GURU
        </p>
    </div>
    <?= $this->endSection(); ?>