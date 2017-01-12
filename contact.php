<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>

	<!-- Header -->
	        <header>
	            <div class="container">
	                <div class="image">
	                    <div class="overlay">
	                        <h1>Kunst en Cultuur in de gemeente Edam-Volendam</h1>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed turpis sem. Sed sodales venenatis. Nulla lobortis tristique hendrerit. Class  litora torquent per.</p>
	                        <a href="#" class="btn">Meer informatie</a>
	                    </div>
	                </div>
	            </div>
	        </header>
	<!-- End Header -->

    <!-- Contact -->

        <section id="contact">
                <div class="container">
                    <article>
	                    <div class="col-50">
	                        <h2>Over ons</h2>

	                        <p>
	                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna vel orci interdum rhoncus. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
	                        </p>

	                        <p>
	                            Pellentesque imperdiet maximus risus, id ultricies tortor blandit in. Suspendisse vel molestie purus, at lobortis nisi. Nulla quis facilisis sapien. Ut ut ipsum nisi. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
	                        </p>
	                    </div>

	                    <div class="col-50">
	                        <h2>Neem contact op!</h2>
	                        <form name="contactform" method="post" action="email.php">
	                            <input class="first" type="text" placeholder="Voornaam" name="first_name">
	                            <input type="text" placeholder="Achternaam" name="last_name">
	                            <input class="first" type="text" placeholder="E-mail" name="email">
	                            <input type="text" placeholder="Telefoonnummer" name="telephone">
	                            <textarea id="txtarea-grow"  type="text" placeholder="Vraag of opmerking" name="comments"></textarea>
	                            <input type="submit" value="Verstuur" name="subscribe" class="btn">
	                        </form>
	                    </div>
                    </article>
                </div>
        </section>
    <!-- End Contact -->



<?php @include('partials/footer.php'); ?>

