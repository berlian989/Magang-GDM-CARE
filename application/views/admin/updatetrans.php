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
                                                    <?php foreach ($atransaksi as $ctr) {?>
                                                    <?php foreach ($atransaksi1 as $ctr1) {?>
                                                    <?php echo form_open_multipart('admin/update_transaksi');?>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Id Pegawai</label>
                                                                        <input class="form-control" type="hidden"
                                                                            name="id" value="<?=$ctr->id_transaksi ?>">
                                                                        <input class="form-control" type="text"
                                                                            name="id_peg"
                                                                            value="<?=$ctr->id_pegawai ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Id Customer</label>
                                                                        <input class="form-control" type="text"
                                                                            name="id_cus" value="<?=$ctr->id_cust ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label>Id Barang</label>
                                                                        <input class="form-control" type="text"
                                                                            name="id_bar" placeholder="*Tolong di isi"
                                                                            value="<?=$ctr1->id_barang ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Tanggal Transaksi</label>
                                                                        <input class="form-control datepicker"
                                                                            type="text" name="tgl_trans"
                                                                            placeholder="*Tolong di isi"
                                                                            value="<?=$ctr->tanggal ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label>Quantity</label>
                                                                        <input class="form-control" type="text"
                                                                            name="quan" placeholder="*Tolong di isi"
                                                                            value="<?=$ctr1->Qty ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Disc</label>
                                                                        <input class="form-control" type="text"
                                                                            name="dis" placeholder="*Tolong di isi"
                                                                            value="<?=$ctr1->Disc ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label>Total Bayar</label>
                                                                        <input class="form-control" type="text"
                                                                            name="tobi" placeholder="*Tolong di isi"
                                                                            value="<?=$ctr1->Total_bayar ?>">
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