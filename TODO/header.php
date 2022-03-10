<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="app.js" defer></script>
    <title>TodoList</title>
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?> <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
  </head>
  <body>
    <h1>Ma Todo List</h1>

    <form action="./traitement.php" method="POST">
      <label for="task">A faire</label>
      <input type="text" name="task" id="task" />

      <input type="submit" value="Envoyer" />
    </form>

    <ul>
      <li></li>
    </ul>