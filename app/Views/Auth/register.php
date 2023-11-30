<?=$this->extend('Front/layout/main')?>

<?=$this->section('title')?>
Registro de usuarios
<?=$this->endSection()?>

<?=$this->section('css')?> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<?=$this->endSection()?>


<?=$this->section('content')?>

<section class="section">
    <div class="container">
      <h1 class="title">Registrate ahora</h1>
      <h2 class="subtitle">
        solo debes de subir algunos datos para iniciar a postear
      </h2>

      <form action="<?=base_url('auth/store')?>">
      <div class="field">
  <label class="label">Nombre</label>
  <div class="control">
    <input name= "name" value="<?=old('name')?>" class='input' type="text" placeholder="Text input">
  </div>
  <p class="is-danger help"><?=session('errors.name')?></p>
</div>

      <div class="field">
  <label class="label">Apellidos</label>
  <div class="control">
    <input name= "surname" value="<?=old('surname')?>" class="input" type="text" placeholder="Text input">
  </div>
  <p class="is-danger help"><?=session('errors.surname')?></p>
</div>

  <div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input name="email" value="<?=old('email')?>" class="input is-danger" type="email" placeholder="Email input" value="hello@">
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
  <label class="label">Elije tu comunidad</label>
  <div class="control">
    <div class="select">
      <select name = "id_country">
        <option disabled selected>Elije tu comunidad</option>
        <?php foreach($countries as $v): ?>
            <option value="<?=$v->id_country?>"<?php if($v->id_country == old('id_country')):?>selected <?php endif;?>><?=$v->name?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
  <p class="is-danger help"><?=session('errors.id_country')?></p>
</div>

<div class="field">
  <label class="label">Contraseña</label>
  <div class="control">
    <input name= "password" value="" class="input" type="text" placeholder="Text input">
  </div>
  <p class="is-danger help"><?=session('errors.password')?></p>

</div>

<div class="field">
  <label class="label">Confirmacion de contraseña</label>
  <div class="control">
    <input name= "c-password" class="input" type="text" placeholder="Text input">
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Registrarse</button>
  </div>
  <div class="control">
    <button class="button is-link is-light">Cancel</button>
  </div>
</div>

</form>

    </div>
  </section>
    <?=$this->endSection()?>
