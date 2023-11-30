<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title><?=$this->renderSection('title')?>&nbsp;-&nbsp;Blog de ayuda</title>
    <?=$this->renderSection('css')?>
  </head>
  
  <body>
    <?=$this->include('Front/layout/head')?>
    <?=$this->renderSection('content')?>
    <?=$this->include('Front/layout/footer')?>
    <?=$this->renderSection('js')?>
</body>
</html> 