<?=$this->extend('Front/layout/main')?>

<?=$this->section('title')?>
Login
<?=$this->endSection()?>

<?= $this->section('content') ?>
<section class="section">
    <div class="container">
        
        <?php if(session('msg')): ?>
            <article class="message is-<?=session('msg.type')?>">
                <div class="message-body">
                    <?=session('msg.body')?>
                </div>
            </article>
        <?php endif; ?>
        
        <h1 class="title">Login!</h1>
        <h2 class="subtitle">
            Ingresa al sistema ahora!
        </h2>
        <form action="<?=base_url(route_to('signin'))?>" method="POST">
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input" name="email" type="email" placeholder="Email" value="">  
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
                <p class="is-danger help"><?=session('errors.email')?></p>
            </div>
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input" name="password" type="password" placeholder="Password" value="admin"/>
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
                <p class="is-danger help"><?=session('errors.password')?></p>
            </div>
            <div class="field">
                <p class="control">
                    <input type="submit" class="button is-info" value="Ingresar">
                </p>
            </div>
        </form>
    </div>
</section>
<?= $this->endSection() ?>