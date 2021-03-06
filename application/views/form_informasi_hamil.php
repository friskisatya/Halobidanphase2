<!-- banner application -->
<div class="card-wrapper bg-white text-dark">
<div class="row m-4">
<img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/dashboard_2.png" alt="Card image">    
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4">
        <div class="col-4"></div>
            <div class="col-8">
            <h6 class="float-right btn-sm btn-primary ml-1 bg-info" onclick="window.location='<?=base_url('C_index')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6><br>
                <h4 class="card-title">&nbsp Informasi Ibu Hamil</h4>
                <p class="card-text"><p class="card-text">Hai, Silahkan lengkapi Data Ibu Hamil Agar Petugas Kesehatan Lebih Mudah Mengidentifikasi Anda.</p></p>
            
            
            
            </div>
        </div>
    </div>
</div>
    <?= $this->session->userdata("notif_edit");$this->session->unset_userdata("notif_edit")?>
    <?= $this->session->userdata("notif_login");$this->session->unset_userdata("notif_login")?>
    <form action="<?=base_url('C_form_profile_hamil/post_create')?>" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama Ibu Hamil</label>
                <input required type="text" value="<?= $rs_data[0]->nama??""?>" name="nama" class="form-control" id="nama" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="TTL">Tempat,Tanggal lahir</label>
                <div class="row">
                    <div class="col-6">
                        <input required type="text" value="<?= $rs_data[0]->tempat_lahir??""?>" name="tempat_lahir" class="form-control" id="TTL" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-6">
                        <input required type="date" value="<?= $rs_data[0]->tgl_lahir??""?>" name="tgl_lahir" class="form-control" id="">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <label for="bulan_lahir">Bulan Kehamilan</label>
                <select name="bln_kehamilan" id="bulan_lahir" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" class="form-control">Pilih Bulan</option>
                    <?php
                    for ($x = 1; $x <= 9; $x++) {
                    if(($rs_data[0]->bln_kehamilan??"") == $x){
                        $sel = "selected";
                    }else{
                        $sel = "";
                    }
                    echo "<option value='$x' $sel >$x</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-8">
                <label for="agama">Agama</label>
                <select name="agama" id="agama" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" <?= ($rs_data[0]->agama??"") == ""?"selected":"" ?> class="form-control">Pilih Agama</option>
                    <option value="Islam" <?= ($rs_data[0]->agama??"") == "Islam"?"selected":"" ?> class="form-control">Islam</option>
                    <option value="Protestan" <?= ($rs_data[0]->agama??"") == "Protestan"?"selected":"" ?> class="form-control">Protestan</option>
                    <option value="Katolik" <?= ($rs_data[0]->agama??"") == "Katolik"?"selected":"" ?> class="form-control">Katolik</option>
                    <option value="Hindu" <?= ($rs_data[0]->agama??"") == "Hindu"?"selected":"" ?> class="form-control">Hindu</option>
                    <option value="Buddha" <?= ($rs_data[0]->agama??"") == "Buddha"?"selected":"" ?> class="form-control">Buddha</option>
                    <option value="Khonghucu" <?= ($rs_data[0]->agama??"") == "Khonghucu"?"selected":"" ?> class="form-control">Khonghucu</option>
                </select>
            </div>
            <div class="form-group col-7 mt-1">
                <label for="pendidikan">Pendidikan Terakhir</label>
                <select name="pendidikan_terakhir" id="pendidikan" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" <?= ($rs_data[0]->pendidikan_terakhir??"") == ""?"selected":"" ?> class="form-control">Pilih Pendidikan</option>
                    <option value="SD" <?= ($rs_data[0]->pendidikan_terakhir??"") == "SD"?"selected":"" ?> class="form-control">SD</option>
                    <option value="SMP" <?= ($rs_data[0]->pendidikan_terakhir??"") == "SMP"?"selected":"" ?> class="form-control">SMP</option>
                    <option value="SLTA/SMU/SMK" <?= ($rs_data[0]->pendidikan_terakhir??"") == "SLTA/SMU/SMK"?"selected":"" ?> class="form-control">SLTA/SMU/SMK</option>
                    <option value="D3" <?= ($rs_data[0]->pendidikan_terakhir??"") == "D3"?"selected":"" ?> class="form-control">D3</option>
                    <option value="S1/D4" <?= ($rs_data[0]->pendidikan_terakhir??"") == "S1/D4"?"selected":"" ?> class="form-control">S1/D4</option>
                    <option value="S2" <?= ($rs_data[0]->pendidikan_terakhir??"") == "S2"?"selected":"" ?> class="form-control">S2</option>
                    <option value="S3" <?= ($rs_data[0]->pendidikan_terakhir??"") == "S3"?"selected":"" ?> class="form-control">S3</option>
                </select>
            </div>
            <div class="form-group col-5 mt-1">
                <label for="gol">Golongan Darah</label>
                <select name="gol_darah" id="gol" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" <?= ($rs_data[0]->gol_darah??"") == ""?"selected":"" ?> class="form-control">Pilih Golongan Darah</option>
                    <option value="A" <?= ($rs_data[0]->gol_darah??"")== "A"?"selected":"" ?> class="form-control">A</option>
                    <option value="B" <?= ($rs_data[0]->gol_darah??"") == "B"?"selected":"" ?> class="form-control">B</option>
                    <option value="AB" <?= ($rs_data[0]->gol_darah??"") == "AB"?"selected":"" ?> class="form-control">AB</option>
                    <option value="O" <?= ($rs_data[0]->gol_darah??"") == "O"?"selected":"" ?> class="form-control">O</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <input required type="text" value="<?= $rs_data[0]->pekerjaan??"" ?>" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
            </div>

            <div class="form-group col-md-6">
            <span class="btn btn-raised btn-round btn-info btn-file">
          <span class="fileinput-new">Pilih Gambar</span>
          <input type="file" name="image" onchange="previewFile(this);"/>
        </span>
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
          <div class="fileinput-new thumbnail">
            <?php if($rs_data[0]->img_profile!=""||$rs_data[0]->img_profile!=null){?>
              <img id="previewImg" src="<?= base_url('uploads/').$rs_data[0]->img_profile?>" alt="pic">
            <?php
            }else{
            ?>
              <img id="previewImg" src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" alt="pic">
            <?php
            }
            ?>
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail"></div>
        </div>
            </div>
            <!-- <div class="form-group col-6">
                <label for="cek_1">Riwayat Check Up Ke 1</label>
                <input type="date" name="cek_1" id="cek_1" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="cek_2">Riwayat Check Up Ke 2</label>
                <input type="date" name="cek_2" id="cek_2" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="cek_3">Riwayat Check Up Ke 3</label>
                <input type="date" name="cek_3" id="cek_3" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="cek_4">Riwayat Check Up Ke 4</label>
                <input type="date" name="cek_4" id="cek_4" class="form-control">
            </div> -->            
        </div>
        <div class="row">
        <div class="container text-center col-6">
            <button type="submit" class="btn btn-success h6">Lengkapi</button>
        </div>
        <div class="container text-center col-6">
            <button type="button" onclick="window.location='<?=base_url('C_form_profile_hamil/download')?>'" class="btn btn-info h6">Download</button>
        </div>
        </div>
        
</div>
</form>
<!-- end of article -->
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
    </script>