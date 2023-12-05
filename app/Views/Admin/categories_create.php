<?=$this->extend('Admin/layout/main')?>

<?=$this->section('title')?>
Agregar una categoría
<?=$this->endSection()?>

<?=$this->section('content')?>

<form action="<?=base_url(route_to('categories_store'))?>" method="POST">
    <div class="field">
        <label class="label">Nombre de la categoría</label>
        <div class="control">
            <input class="input" name="name" value="<?=old('name')?>" type="text" placeholder="Text input">
        </div>
        <p class="help is-danger"><?=session('errors.name')?></p>
    </div>
    <div class="field">
        <div class="control">
            <input type="submit" class="button is-dark" value="Guardar">
        </div>
    </div>
</form>

<?=$this->endSection()?>