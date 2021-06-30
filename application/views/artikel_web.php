<div class="wrapper" id="index">
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true"
            style="background-image:url('<?= base_url()?>/assets/img/beautiful-pregnant-belly.jpg');">
        </div>
        <div class="container">
            <div class="content-center brand">
                <img class="n-logo" src="<?= base_url()?>/assets/img/doctor.png" alt="">
                <h1 class="h1-seo title">Hai Bidan.</h1>
                <h3>Solusi Cerdas Untuk Ibu Hamil.</h3>
            </div>
        </div>
    </div>
    <div class="row container">
        <div class="col-md-2"></div>
        <div class="col col-md-6 pull-right">
        <h3 class="title" id="layanan">Artikel Seputar Kehamilan</h3>
        <p class="card-description text-dark text-capitalize">Artikel menarik seputar kehamilan
                              membantumu untuk
                              menambah wawasan tentang kehamilan.</p>
        </div>
        <div class="col col-md-4 ">
            <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/article.png" alt="Card image">
        </div>
    </div>
    <div class="col-md-2"></div>
    <hr>
    <div class="row">
    
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <h3 class="title h4" id=""><?= $rs_artikel[0]->judul_artikel?></h3>
    <div class="card-wrapper">
  <?php if($rs_artikel[0]->img_artikel!=""||$rs_artikel[0]->img_artikel!=null){?>
        <img class="card-img-top" id="previewImg" src="<?= base_url('uploads/').$rs_artikel[0]->img_artikel?>" alt="pic">
    <?php
    }else{
    ?>
        <img class="card-img-top" src="<?= base_url()?>/assets/img/batuk.jpg" alt="Card image cap">
    <?php } ?>
    
  <div class="card-body">
    <p class="card-text"><?= $rs_artikel[0]->isi_artikel?></p>
  </div>
</div>
    </div>
    <div class="col-md-2"></div>
    </div>
    <div class ="container">
    <h4 class="title h5">Baca Artikel Lainnya</h4>
    <div class="row text-center flex-nowrap" style="overflow: auto;">
    <?php foreach($rs_artikel_all as $artikel){?>
        <div class="btn btn-sm col-auto m-1 p-0 pb-2 bg-light text-dark">
            <div class="card-wrapper" style="width: 20rem;">
            <?php if($artikel->img_artikel!=""||$artikel->img_artikel!=null) { ?>
                <img class="card-img-top" height="180" src="<?= base_url('uploads/').$artikel->img_artikel?>" alt="Card image cap">
            <?php
            }else{
            ?>
                <img class="card-img-top" height="180" src="<?= base_url()?>/assets/img/batuk.jpg" alt="Card image cap">
            <?php } ?>
                <div class="card-body" onclick="window.location='<?=base_url('C_index/artikel/'.$artikel->id_artikel)?>'">
                <!-- judul untuk artikel -->
                <p class="card-text text-left"><?= $artikel->judul_artikel?></p>
                <a href="#" class="btn btn-primary float-right">Baca Selengkapnya </a>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
    