<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>

<?php 
$city = $_GET['location'];
$cityuc = ucfirst($city);
?>
 <header>
    <div class="container">
        <div class="image">
            <div class="overlay">
                <h1><?php echo $cityuc;?></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed turpis sem. Sed sodales venenatis. Nulla lobortis tristique hendrerit. Class  litora torquent per.</p>
                <a href="#" class="btn">Evenementen</a>
            </div>
        </div>
    </div>
</header>
<section id="places">
    <div class="container">
        <a href=""><div class="all">Alle</div></a>
        <a href=""><div class="all">Cultuur</div></a>
        <a href=""><div class="all">Kunst</div></a>
    </div>
</section>

<?php @include('partials/footer.php'); ?>
