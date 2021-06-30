<div class="wrapper" id="index">
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true"
            style="background-image:url('<?= base_url()?>/assets/img/coding.jpg');">
        </div>
        <div class="container">
            <div class="content-center brand">
                <img class="n-logo" src="<?= base_url()?>/assets/img/doctor.png" alt="">
                <h1 class="h1-seo title">Hai Bidan.</h1>
                <h3>Selamat Datang Admin.</h3>
            </div>
        </div>
    </div>
    <div class="card-wrapper content-center">
        <div class="card ml-5 mr-4 p-3 bg-light" style="width: 94%;top: -50px;">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h3 class="title" id="layanan">Menu Setup Artikel</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <form action="<?=base_url('C_setup_artikel/post_edit_web/').$id ?>" method="POST"
                        enctype="multipart/form-data">
                        <form action="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul_artikel">Judul Artikel</label>
                                    <input type="text" name="judul_artikel" id="judul_artikel" class="form-control"
                                        placeholder="Judul Artikel" value="<?=$rs_artikel[0]->judul_artikel?>">
                                </div>
                                <div class="form-group">
                                    <label for="artikel">Isi Artikel</label>
                                    <textarea name="isi_artikel" id="isi_artikel" cols="50" rows="20"
                                        class="form-control" wordwrap="true"><?=$rs_artikel[0]->isi_artikel?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status_artikel">Status (Visible)</label>
                                    <select name="status_artikel" id="status_artikel" class="form-control"
                                        style=" background: rgba(0, 0, 0, 0.2);">
                                        <option <?=$rs_artikel[0]->status_artikel==""?"selected":"" ?> value="">Pilih
                                            Status</option>
                                        <option <?=$rs_artikel[0]->status_artikel=="1"?"selected":"" ?> value="1">Aktif
                                        </option>
                                        <option <?=$rs_artikel[0]->status_artikel=="0"?"selected":"" ?> value="0">Tidak
                                            Aktif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span class="btn btn-raised btn-round btn-primary btn-file">
                                        <span class="fileinput-new">Pilih Gambar</span>
                                        <input type="file" name="image" onchange="previewFile(this);" />
                                    </span>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <?php if($rs_artikel[0]->img_artikel!=""||$rs_artikel[0]->img_artikel!=null){?>
                                            <img id="previewImg"
                                                src="<?= base_url('uploads/').$rs_artikel[0]->img_artikel?>" alt="pic">
                                            <?php
            }else{
            ?>
                                            <img id="previewImg"
                                                src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png"
                                                alt="pic">
                                            <?php
            }
            ?>">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    </div>
                                </div>
                                <div class="container text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                        <script>
                        function previewFile(input) {
                            var file = $("input[type=file]").get(0).files[0];

                            if (file) {
                                var reader = new FileReader();

                                reader.onload = function() {
                                    $("#previewImg").attr("src", reader.result);
                                }

                                reader.readAsDataURL(file);
                            }
                        }
                        </script>
                </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>