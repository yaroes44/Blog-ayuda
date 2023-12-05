<?=$this->extend('Admin/layout/main')?>

<?=$this->section('title')?>
Articulos
<?=$this->endSection()?>

<?=$this->section('content')?>
<h1>listado de articulos</h1>
<a href="<?= base_url(route_to('posts_create'))?>">Nuevo Articulo</a>
<?=$this->endSection()?>
