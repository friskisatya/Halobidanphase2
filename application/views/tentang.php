<div class="container">
<h6 class="float-right btn-sm btn-info ml-1 bg-info" onclick="window.location='<?=base_url('C_index')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>  
    <h4 class="title"><i class="fas fa-info-circle"></i>&nbsp Tentang Aplikasi</h4>
    <div class="card-wrapper">
        <div class="card-body">
            <p class="description">
                <?= $rs_tentang[0]->tentang?>
            </p>
        </div>
    </div>
</div>
<!-- end of article -->