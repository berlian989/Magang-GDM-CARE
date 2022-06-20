<div class="main-panel">
    <div class="content">
        <div class="container-fluid ">
            <?=$this->session->flashdata('massage')?>
            <?php foreach ($hadiah as $hdh) {?>
            <?= form_open_multipart('admin/update_hadiah');?>
            <div class="form-group">
                <label>Nama Hadiah</label>
                <input type="hidden" name="id" class="form-control" value="<?=$hdh->id_hadiah ?>">
                <input type="text" name="nama" class="form-control" value="<?=$hdh->nama_hadiah ?>">
            </div>
            <div class="form-group">
                <label>Point</label>
                <input type="text" name="poin" class="form-control" value="<?=$hdh->point_hadiah ?>">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php   }  ?>
    </div>
</div>