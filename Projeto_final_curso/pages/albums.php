<!-- Caroussel Banners -->
<div id="carouselExampleControlsNoTouching" class="carousel slide m-auto shadow-lg mb-5 bg-body rounded" data-bs-touch="false" data-bs-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/banner.png" class="d-block w-100 rounded">
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner.png" class="d-block w-100 rounded">
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner.png" class="d-block w-100 rounded">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Final do Caroussel -->

<!-- Top Albuns -->
<h1 class="m-3 mx-7">Top Albuns</h1>
<div class="row m-auto">
    <div class="col-md-6 bg-dar-green-800">
        <div class="card bg-dark text-white">
         <img src="assets/img/banner2-cards.png" class="card-img">
        <div class="card-img-overlay">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  </div>
</div>
    </div>
    <div class="col-md-6">
        <ul class="mt-4">
            <?php
                for($i=0; $i<4; $i++){
            ?>
            <li class="shadow bg-body rounded list-albun">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                    <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title" style="font-weight:700;">Card title</h3>
                                    <p class="card-text"><small class="text-muted">2500 votos</small></p>
                                </div>
                            </div>
                    </div>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>
<!--  Fim top Albuns  -->

<!-- Lista de  Albuns -->
<h1 class="mt-5 mb-3">Mais Albuns</h1>
<ul class="nav nav-pills mx-4 mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Sertanejo</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pop</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Rock</button>
  </li>
</ul>
<!-- Tab Sertanejo -->
<div class="tab-content" id="pills-tabContent">
    <?php
    $albuns = getAlbuns();
    var_dump($albuns);
    
        foreach($albuns as $album){  
             
    ?>
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <div class="card" style="width: 15rem;">
            <img src="assets/img/Album_tarcisio_do_acordeon300x300.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold; text-transform:uppercase;">Nome Album</h5>
                <p class="card-text text-secondary" style="font-weight:700;">12 Músicas</p>
            </div>
        </div>
    </div>
    <?php   }    ?>        
  <!-- Tab Hip-Hop -->
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        
        <div class="card" style="width: 15rem;">
            <img src="assets/img/Album_tarcisio_do_acordeon300x300.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">Nome Album</h5>
                <p class="card-text">12 Músicas</p>
            </div>
        </div>
    </div>
  
  <!-- Tab Pop -->
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
        <div class="card" style="width: 15rem;">
            <img src="assets/img/Album_tarcisio_do_acordeon300x300.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nome Album</h5>
                <p class="card-text">12 Músicas</p>
            </div>
        </div>
    </div>

    <!-- Tab Samba -->
    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
        <div class="card" style="width: 15rem;">
            <img src="assets/img/Album_tarcisio_do_acordeon300x300.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nome Album</h5>
                <p class="card-text">12 Músicas</p>
            </div>
        </div>
    </div>

</div>