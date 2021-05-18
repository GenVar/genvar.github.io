<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>ОШИБКА</title>
    <link rel="shortcut icon" href="error.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link href="css/thanks.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1>ПРОИЗОШЛА ОШИБКА</h1>
    </header>
    <main class="main">
      <section>
        <div>
          <p>
            Заказ <span>не был создан</span>, возникла <span>ошибка</span>.
            <br>
            <br>Сообщение об ошибке:
            <br>
          </p>
          <pre>"msg": "<?=@$_GET['msg']?>"<br>"error": "<?=@$_GET['error']?>"</pre>
        </div>
      </section>
    </main>
	<footer>
	  <a href="{url}"><div class="arrow">ПОВТОРИТЬ ПОПЫТКУ СОЗДАНИЯ ЗАКАЗА</div></a>
	</footer>
  </body>
</html>
