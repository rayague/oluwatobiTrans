<!DOCTYPE HTML>
<html>
	<head>
		<title>Oluwatobi Trans</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Corben:wght@400;700&family=Devonshire&family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Madimi+One&family=Pridi:wght@200;300;400;500;600;700&family=Yanone+Kaffeesatz:wght@200..700&display=swap" rel="stylesheet">

	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="/">Oluwatobi Trans</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="/">Acceuil</a></li>
					<li><a href="{{ route('about') }}">À propos</a></li>
					<li><a href="{{ route('realisations') }}">Mes réalisations</a></li>
				</ul>
			</nav>

		<!-- Banner -->
        <section scroll-fade" id="banner">
            <h2>Bienvenue chez OluwatobI Trans</h2>
            <p>Votre partenaire de confiance pour tous vos besoins en transit et en logistique à l'échelle mondiale.</p>
            <ul class="actions">
                <li><a href="{{ route('about') }}" class="button big special">En savoir plus</a></li>
            </ul>
        </section>

		<!-- One -->
			<section id="one" class="wrapper style1 scroll-fade"">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="{{ asset('images/image28.jpg') }}" alt="" /></span>
						<div class="content">
							<h2>Transit sécurisé</h2>
							<p>Chez OluwatobI Trans, nous accordons une importance primordiale à la sécurité des marchandises que nous transitons. Grâce à notre expertise et à nos procédures strictes, nous assurons que chaque étape du processus de transit est réalisée avec le plus grand soin pour garantir l'intégrité et la sécurité de vos produits.</p>
							<ul class="actions">
								<li>
									<a href="{{ route('realisations') }}" class="button alt">Voir Plus</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="{{ asset('images/image30.jpg') }}" alt="" /></span>
						<div class="content">
							<h2>Confiance en notre service</h2>
							<p>Nous comprenons à quel point il est important pour nos clients de savoir que leurs marchandises sont entre de bonnes mains. C'est pourquoi nous mettons tout en œuvre pour offrir un service de transit fiable et sécurisé, garantissant que vos produits arrivent à destination en toute sécurité et dans les délais convenus.</p>
							<ul class="actions">
								<li>
									<a href="{{ route('realisations') }}" class="button alt">Voir Plus</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special scroll-fade"">
				<div class="inner">
                    <header class="major narrow">
                        <h2>Produits en Transit</h2>
                        <p>Nous offrons des services de transit pour une vaste gamme de produits, répondant à vos besoins commerciaux internationaux.</p>
                    </header>
                    <section>
                        <div class="content">
                            <p>Que ce soit des produits manufacturés, des matières premières, des équipements spécialisés ou des marchandises périssables, notre équipe est équipée pour gérer efficacement chaque étape du processus de transit.</p>
                            <p>Que vous ayez besoin de faire sortir des produits du port ou de les faire entrer dans le pays, Oluwatobi Trans est là pour vous offrir des solutions de transit fiables et efficaces.</p>
                        </div>
                    </section>
					<div class="image-grid">
						<a href="#" class="image"><img src="{{ asset('images/image3.jpg') }}" alt="" /></a>
						<a href="#" class="image"><img src="{{ asset('images/image4.jpg') }}" alt="" /></a>
						<a href="#" class="image"><img src="{{ asset('images/image5.jpg') }}" alt="" /></a>
						<a href="#" class="image"><img src="{{ asset('images/image6.jpg') }}" alt="" /></a>
						<a href="#" class="image"><img src="{{ asset('images/image7.jpg') }}" alt="" /></a>
						<a href="#" class="image"><img src="{{ asset('images/image8.jpg') }}" alt="" /></a>
						<a href="#" class="image"><img src="{{ asset('images/image9.jpg') }}" alt="" /></a>
						<a href="#" class="image"><img src="{{ asset('images/image12.jpg') }}" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="{{ route('realisations') }}" class="button big alt">Voir Plus</a></li>
					</ul>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special scroll-fade"">
				<div class="inner">
					<header class="major narrow	">
						<h2>OluwatobI Trans : Sécurité et fiabilité à chaque transit.</h2>
						<p>Nous comprenons l'importance de la sécurité, de la ponctualité et de la conformité réglementaire dans le transit des marchandises. C'est pourquoi nous mettons tout en œuvre pour assurer que votre cargaison arrive à destination en toute sécurité et dans les délais convenus.</p>

					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">Voir Plus</a></li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 special scroll-fade"">
				<div class="inner">

                    <header class="major narrow">
                        <h2>Contactez-nous</h2>
                        <p>N'hésitez pas à nous contacter pour toute demande de renseignements ou pour discuter de vos besoins en matière de transit et de logistique.</p>
                    </header>

                        <form id="monFormulaire" action="#">
                            <div class="container 75%">
                                <div class="row uniform 50%">
                                    <div class="6u 12u$(xsmall)">
                                        <input id="nom" name="name" placeholder="Votre Nom" type="text" />
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
                                        <input id="email" name="email" placeholder="Votre Email" type="email" />
                                    </div>
                                    <div class="12u$">
                                        <textarea id="message" name="message" placeholder="Votre Message" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <ul class="actions">
                                <li><input type="button" id="envoyer" class="special" value="Envoyer" /></li>
                            </ul>
                        </form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer" >
				<div class="inner">
					<ul class="icons">
						<li><a href="https://wwww.facebook.com/seraphin.houngbedji" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						{{-- <li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li> --}}
					</ul>
                    <ul class="copyright">
						<li class="text-warning">&copy; Oluwatobi Trans.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="{{ asset('assets/js/main.js') }}"></script>
            <script>
    gsap.registerPlugin(ScrollTrigger);

    // Pour chaque élément avec la classe "scroll-fade"
    gsap.utils.toArray('.scroll-fade').forEach(function(element) {
        gsap.from(element, {
            opacity: 0, // Commence avec une opacité de 0
            y: 50, // Décale de 50px vers le bas
            duration: 1, // Durée de l'animation en secondes
            scrollTrigger: {
                trigger: element, // Déclencheur est l'élément lui-même
                start: 'top 80%', // Commencer l'animation lorsque le haut de l'élément atteint 80% de la fenêtre
                end: 'bottom 20%', // Arrêter l'animation lorsque le bas de l'élément atteint 20% de la fenêtre
                scrub: 1 // Pour lier l'animation au défilement
            }
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$(document).ready(function() {
    // Fonction pour envoyer le formulaire par WhatsApp
    function envoyerFormulaireWhatsApp(donnees) {
        // Construction du message WhatsApp avec les données du formulaire
        const messageWhatsApp = `Nouveau formulaire :\n\nNom: ${donnees.nom}\nEmail: ${donnees.email}\nMessage: ${donnees.message}`;
        // Ouvrir une nouvelle fenêtre pour composer un message WhatsApp avec le numéro spécifié
        window.open(`https://wa.me/22991697576?text=${encodeURIComponent(messageWhatsApp)}`);
    }

    // Vérifier si tous les champs du formulaire sont remplis
    $('#envoyer').click(function() {
        const nom = $('#nom').val();
        const email = $('#email').val();
        const message = $('#message').val();

        // Vérifier si tous les champs sont remplis
        if (nom === '' || email === '' || message === '') {
            Swal.fire({
                title: 'Attention!',
                text: 'Veuillez remplir tous les champs du formulaire.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
        } else {
            const donnees = {
                nom: nom,
                email: email,
                message: message
            };
            envoyerFormulaireWhatsApp(donnees);
        }
    });
});
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/ScrollTrigger.min.js"></script>


	</body>
</html>
