
<!DOCTYPE html>
<html>
<head>
  <title>Гостевая Книга</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="mod/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="mod/js/ajax.js"></script>
</head>
  <body>
	
	<div class="container wrapper">
        <h1 class="sent"></h1>
      <form class="form-signin" action="" id="form" method="post" role="form">
        <h2 class="form-signin-heading">Гостевая Книга</h2>
       <div class="form-group">
    <label for="name"  class="col-sm-2 control-label">Имя</label>
    <div class="col-sm-10">
      <input type="text" name="name" required minlength="3" maxlength="25"  class="form-control" id="name" placeholder="Ваше Имя">
    </div>
  </div>
    <div class="form-group">
    <label for="Email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10 input-height">
      <input type="email" name="email" required minlength="3" class="form-control" id="Email" placeholder="Ваш Email">
    </div>
  </div>
    <div class="form-group">
    <label for="subject" class="col-sm-2 control-label">Заголовок</label>
    <div class="col-sm-10 input-height">
      <input type="text" minlength="3" maxlength="25"  required  name="subject" class="form-control" id="subject" placeholder="Заголовок">
    </div>
  </div>
  <div class="form-group">
    <label for="message" class="col-sm-2 control-label">Сообщение</label>
    <div class="col-sm-10 input-height">
    <textarea class="form-control" required minlength="3" maxlength="255"  require  rows="10" name="message" id="message" placeholder="Ваше сообщение"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 input-height">
      <button type="submit" class="btn btn-default">Отправить</button>
    </div>
  </div>
      </form>

    </div>
  </body>
</html>
