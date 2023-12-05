<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title><?=$this->renderSection('title')?>&nbsp;-&nbsp;Dashboard</title>
    <?=$this->renderSection('css')?>
</head>
<body>
    <?=$this->include('Admin/layout/header')?>

    <section class="section">
        <div class="container">
            <?php if(session('msg')): ?>
                <article class="message is-<?=session('msg.type')?>">
                    <div class="message-body">
                        <?=session('msg.body')?>
                    </div>
                </article>
            <?php endif; ?>
            <?=$this->renderSection('content')?>
        </div>
    </section>

    <?=$this->renderSection('js')?>
</body>
</html>