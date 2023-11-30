<?=$this->extend('Admin/layout/main')?>

<?=$this->section('title')?>
Categorias
<?=$this->endSection()?>

<?=$this->section('content')?>
<div class="field">
<a class="button is-dark" href="<?=base_url(route_to('categories_create'))?>">Agregar categoria</a>
</div>

<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Creado</th>
        <th>Actualizado</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
<?php foreach($categories as $v): ?>
<tr>
    <td><?=$v->id?></td>
    <td><?=$v->name?></td>
    <td><?=$v->created_at->humaniza()?></td>
    <td><?=$v->updated_at->humaniza()?></td>
    <td><a href="<?=$v->getEditLink()?>">Editar</a> | <a href="<?=getDeleteLink?>">Eliminar</a></td>
</tr>
<?php endforeach; ?>
    </tbody>
</table>
<?=$pager->links()?>
<?=$this->endSection()?>