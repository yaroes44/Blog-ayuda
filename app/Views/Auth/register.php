<?=$this->extend('Front/layout/main')?>

<?=$this->section('title')?>
Home
<?=$this->endSection()?>

<?=$this->section('css')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<?=$this->endSection()?>

<?=$this->section('content')?>

<section class="section">
    <div class="container">
        <h1 class="title">Registrate ahora!</h1>
        <h2 class="subtitle">
            Solo debes ingresar algunos datos para comenzar a publicar
        </h2>
        <form action="<?=base_url('auth/store')?>" method="POST">
            <div class="field">
                <label class="label">Nombre</label>
                <div class="control">
                    <input name="name" value="<?=old('name')?>" class="input" type="text" placeholder="Text input">
                </div>
                <p class="is-danger help"><?=session('errors.name')?></p>
            </div>
            <div class="field">
                <label class="label">Apellidos</label>
                <div class="control">
                    <input name="surname" value="<?=old('surname')?>" class="input" type="text" placeholder="Text input">
                </div>
                <p class="is-danger help"><?=session('errors.surname')?></p>
            </div>
    
            <div class="field">
                <label class="label">Correo</label>
                <div class="control has-icons-left has-icons-right">
                    <input name="email" value="<?=old('email')?>" class="input" type="email" placeholder="Email input" value="hello@">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                </div>
                <p class="is-danger help"><?=session('errors.email')?></p>
            </div>
    
            <div class="field">
                <label class="label">Elije tu pais</label>
                <div class="control">
                    <div class="select">
                        <select name="id_country">
                            <option disabled selected>Elije un país</option>
                            <?php foreach($countries as $v): ?>
                            <option value="<?=$v->id_country?>" <?php if($v->id_country == old('id_country')):?>selected <?php endif;?>><?=$v->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <p class="is-danger help"><?=session('errors.id_country')?></p>
            </div>
    
            <div class="field">
                <label class="label">Contraseña</label>
                <div class="control">
                    <input name="password" value="" class="input" type="text" placeholder="Text input">
                </div>
                <p class="is-danger help"><?=session('errors.password')?></p>
            </div>
            <div class="field">
                <label class="label">Confirmación de contraseña</label>
                <div class="control">
                    <input name="c-password" class="input" type="text" placeholder="Text input">
                </div>
            </div>
    
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-info">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?=$this->endSection()?>