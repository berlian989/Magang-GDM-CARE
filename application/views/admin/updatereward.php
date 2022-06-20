<div class="main-panel">
    <div class="content">
        <div class="container-fluid ">
            <div class="container">
                <div class="row flex-lg-nowrap">
                    <div class="col">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="e-profile">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a href="" class="active nav-link">Edit
                                                        Transaksi</a></li>
                                            </ul>
                                            <div class="tab-content pt-3">
                                                <div class="tab-pane active">
                                                    <?php foreach ($hadiah as $hdh) {?>
                                                    <?= form_open_multipart('admin/update_hadiah');?>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Nama Hadiah</label>
                                                                        <input type="hidden" name="id"
                                                                            class="form-control"
                                                                            value="<?=$hdh->id_hadiah ?>">
                                                                        <input type="text" name="nama"
                                                                            class="form-control"
                                                                            value="<?=$hdh->nama_hadiah ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Point</label>
                                                                        <input type="text" name="poin"
                                                                            class="form-control"
                                                                            value="<?=$hdh->point_hadiah ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label>Gambar</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input"
                                                                                id="image" name="image"
                                                                                value="<?=$hdh->gambar_hadiah ?>">
                                                                            <label class="custom-file-label"
                                                                                for="image">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                Changes</button>
                                                        </div>
                                                    </div>

                                                    </form>
                                                    <?php   }  ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>