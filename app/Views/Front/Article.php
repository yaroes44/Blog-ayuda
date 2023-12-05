<?=$this->extend('Front/layout/main')?>git

<?=$this->section('title')?>
<?= $post->title ?>
<?=$this->endSection()?>

<?=$this->section('content')?>
<section class="section">
    <div class="content">
        <img src="<?=$post->getLink()?>" style="width:100%;height:300px;object-fit:cover;" alt="">
        <h1><?= $post->title ?></h1>
        <h3>Por: <?= $post->author->getFullName() ?></h3>
        <p>Fecha: <?= $post->published_at->humanize() ?></p>
        
        <div class="tags are-medium">
            <?php foreach($post->getCategories() as $v): ?>
                <span class="tag">#<?= $v->name ?></span>
            <?php endforeach; ?>
        </div>
        <p><?= $post->body ?></p>
    </div>
    <?= view_cell('\App\Controllers\Front\Home::filter', ['category' => 'php', 'limit' => 4]) ?>
</section>
<?=$this->endSection()?>