<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>ЗАКАЗ ПРИНЯТ</title>
    <link rel="shortcut icon" href="thanks.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link href="css/thanks.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1>ЗАКАЗ <span><?=@$_GET['request_id']?></span> ПРИНЯТ!</h1>
    </header>
    <main class="main">
      <section>
        <div>
          <p>
            Наш <span>оператор свяжется с вами</span> для подтверждения заказа в течение <span>5-10 минут</span>.
            <br>
            <br>Доставка осуществляется <span>курьером или почтой</span>. Оплата - <span>при получении</span>!
          </p>
        </div>
      </section>
    </main>
	<footer>
	  <a href="{url}"><div class="arrow">ВЕРНУТЬСЯ НАЗАД К СОЗДАНИЮ ЗАКАЗА</div></a>
	</footer>
  </body>
</html>
