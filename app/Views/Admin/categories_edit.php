<?=$this->extend('Admin/layout/main')?>

<?=$this->section('title')?>
Editar Categoria - <?=$category->name ?>
<?=$this->endSection()?>

<?=$this->section('content')?>

<form action="<?=base_url(route_to('categories_update'))?>" method="POST">
    <div class="field">
        <label class="label">Nombre de la categoría</label>
        <div class="control">
            <input class="input" name="name" value="<?= old('name') ?? $category->name ?>" type="text" placeholder="Text input">
            <input class="input" name="id" value="<?= $category->id ?>" type="hidden" placeholder="Text input">
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