<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
	<link rel="icon" href="<?=$base;?>/assets/images/favicon.ico" />
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap-4.4.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="<?=$base;?>/assets/css/signin.css" />
</head>
<body>
	<header>
		<div class="container clearfix width-full text-center">
			<a href="" ><img src="<?=$base;?>/assets/images/oncohearthpr.png" alt="" /></a>
		</div>
	</header>
	<section class="container main">

		<form class="form-signin" method="POST" action="<?=$base;?>/login">
            <h2 class="form-signin-heading">Acesso de Usuário</h2>
            <?php if(!empty($flash)): ?>
                <div class="flash"> <?php echo $flash; ?> </div>
            <?php endif; ?>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
        <div class="text-center">
        	<a href="<?=$base;?>/cadastro"><br>Cadastre-se</a>
        </div>       
      </form>
	</section>
</body>
</html>

