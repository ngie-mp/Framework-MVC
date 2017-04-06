<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MVC Framework | School Project</title>
  </head>
  <body>
    <h1><?=$PageName?></h1>
  </body>
</html>

<main>
  <ul>
    <li><a href="<?=HtmlHelpers::routeUrl('home')?>">Accueil</a>
    <li><a href="<?=HtmlHelpers::routeUrl('contact')?>">Contact</a>
  </ul>
</main>
