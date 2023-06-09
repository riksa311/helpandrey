<?php 
include 'header.php';
?>
<main>
<!-- Дивиз магазина -->
<div class="container">
<div class="row m-3" style="border: 0.5rem outset #111; border-radius: 30px">
    <div class="col-4 d-flex align-items-center"><img src="assets/img/logo.png" alt="логотип сайта" class="img rounded img-fluid p-3"></img></div>
    <div class="col-8"><p class="text p-3"><b>Наш дивиз</b> Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Numquam deleniti, ducimus voluptates ratione vitae, ipsa molestias nisi sapiente eaque, magni soluta laboriosam sed delectus veritatis! Alias quasi eaque dolores voluptas!</p></div>
  </div>  
</div>
<!-- Конец Дивиза -->
<div class="container">
<div id="carouselExampleDark" class="carousel carousel-fade carousel-dark slide p-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="assets/img/logo.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/img/logo.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/logo.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
    </div>
  </div>
</nav>
</div>
</main>
<?php 
include 'footer.php';
?>