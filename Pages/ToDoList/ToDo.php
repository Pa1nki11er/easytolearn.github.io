<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="http://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='ToDo.css'>
    <script src='ToDo.js'></script>
</head>
<body>
<section class="container">
  <div class="heading">
    <img class="heading__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/756881/laptop.svg">
    <h1 class="heading__title">To-Do List</h1>
  </div>
  <form class="form">
    <div>
      <label class="form__label" for="todo">~ Today I need to ~</label>
      <input class="form__input" type="text" id="todo" name="to-do" size="30" required>
      <button class="button"><span>Submit</span></button>
    </div>
  </form>
  <div>
    <ul class="toDoList">
    </ul>
  </div>
</section>
    
</body>
</html>



