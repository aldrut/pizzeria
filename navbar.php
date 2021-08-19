<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <title>navbar</title>
</head>

<body>


<nav class="navbar navbar-expand-lg bgTurquoise navbar-dark container-fluid fixed-top">
		<span class="navbar-brand travelog font-weight-bolder" href="#">Pizzeria</span>
		<span class="separateur ml-5"></span>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav ml-5">

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class " href="{{path('recherchesVoyages')}}">Accueil</a>
				</li>

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class" href="{{path('voyages')}}">lorem</a>
				</li>

				<li class="nav-item dropdown li mr-4">
					<a class="nav-link dropdown-toggle a-class" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Nos produits
					</a>

					<div class="dropdown-menu bgTurquoise bgMini" aria-labelledby="navbarDropdown">
						<a class="dropdown-item a-class" href="{{path('mesVoyages')}}">Voir nos menu</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item a-class" href="{{path('creationVoyage')}}">lorem</a>
						<a class="dropdown-item a-class" href="#">ipsum</a>
					</div>
				</li>

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class" href="#">Nous contacter</a>
				</li>

			</ul>

			<ul class="navbar-nav  user">
				<li class="nav-item dropdown dropleft li">
					<a class="nav-link dropdown-toggle a-class" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Utilisateur
					</a>

					<div class="dropdown-menu bgTurquoise bgMini" aria-labelledby="navbarDropdown">
						<a class="dropdown-item a-class" href="{{path('profil')}}">Mon profil</a>
						<a class="dropdown-item a-class" href="#">Deconnexion</a>
					</div>
				</li>
			</ul>
		</div>

	</nav>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>