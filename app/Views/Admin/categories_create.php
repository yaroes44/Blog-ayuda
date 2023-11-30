<?=$this->extend('Admin/layout/main')?>

<?=$this->section('title')?>
Agregar categorias
<?=$this->endSection()?>

<?=$this->section('content')?>

<form action="<?=base_url(route_to('categories_store'))?>" method="post">
<div class="field">
    <label class="label">Nombre de la categoria</label>
    <div class="control">
    <input class="input" value="<?=old('name')?>" name="name" type="text" placeholder="Text input">
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
