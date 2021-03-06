<h6 class="float-right btn-sm btn-primary ml-1 bg-info" onclick="window.location='<?=base_url('C_setup_artikel')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>   
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Artikel</h4>
    <form action="<?=base_url('C_setup_artikel/post_create')?>" method="POST" enctype="multipart/form-data">
    <form action="">
        <div class="card-body">
            <div class="form-group">
                    <label for="judul_artikel">Judul Artikel</label>
                    <input type="text" name="judul_artikel" id="judul_artikel" class="form-control" placeholder="Judul Artikel">
            </div>
            <div class="form-group">
                <label for="artikel">Isi Artikel</label>
                <textarea name="isi_artikel" id="isi_artikel" cols="50" rows="20" class="form-control" wordwrap="true"></textarea>
            </div>
            <div class="form-group">
                <label for="status_artikel">Status (Visible)</label>
                <select name="status_artikel" id="status_artikel" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="">Pilih Status</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
            <div class="form-group">
        <span class="btn btn-raised btn-round btn-primary btn-file">
          <span class="fileinput-new">Pilih Gambar</span>
          <input type="file" name="image" onchange="previewFile(this);"/>
        </span>
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
          <div class="fileinput-new thumbnail">
            <img id="previewImg" src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" alt="pic">
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail"></div>
        </div>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
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