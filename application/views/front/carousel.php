<div style="max-height: 90vh; overflow-y: hidden;">
  <div id="carousel_mobil" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?= url_aset('carousel/mobil1.png') ?>">
        <div class="carousel-caption d-none d-md-block">
          <div class="alert alert-info">
            <h1><b><?= strtoupper($this->config->item('title')) ?></b></h1>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= url_aset('carousel/mobil2.png') ?>">
        <div class="carousel-caption d-none d-md-block">
          <div class="alert alert-info">
            <h1><b><?= strtoupper($this->config->item('title')) ?></b></h1>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel_mobil" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel_mobil" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>