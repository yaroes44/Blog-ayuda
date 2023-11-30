<?=$this->extend('Admin/layout/main')?>

<?=$this->section('title')?>
Editar categorias : <?=$category->name?>
<?=$this->endSection()?>

<?=$this->section('content')?>

<form action="<?=base_url(route_to('categories_update'))?>" method="post">
<div class="field">
    <label class="label">Nombre de la categoria</label>
    <div class="control">
    <input class="input" value="<?=old('name')?? $category->name?>" name="name" type="text" placeholder="Text input">
    <input class="input" value="<?= $category->id?>" name="id" type="text" placeholder="Text input">
    </div>
    <p class="help is-danger">
        <?=session('errors.name')?>
    </p>
</div>

<div class="field">
    <div class="control">
        <input type="submit" class="button is-dark" value= "guardar">
    </div>
</div>

</form>

<?=$this->endSection()?>
