<div class="main-panel">
    <div class="content">
        <div class="container-fluid ">
            <?=$this->session->flashdata('massage')?>
            <?php foreach ($atransaksi as $hdh) {?>
            <div class="form-group">
                <label>ID Pegawai</label>
                <select name="id_peg" class="form-control">

                    <option value="<?=$hdh->id_pegawai ?>"><?= $hdh->id_pegawai ?></option>

                </select>
            </div>
            <div class="form-group">
                <label>ID Customer</label>
                <select name="id_cus" class="form-control">

                    <option value="<?=$hdh->id_cust ?>"><?= $hdh->id_cust ?></option>

                </select>
            </div>
            <div class="form-group">
                <label>ID Barang</label>
                <select name="id_bar" class="form-control">

                    <option value="<?=$hdh->id_barang ?>"><?= $hdh->id_barang ?></option>

                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Transaksi</label>
                <input placeholder="*Tolong di isi" type="text" class="form-control datepicker" name="tgl_trans">
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" name="quan" class="form-control" value="<?=$hdh->Qty ?>">
            </div>
            <div class="form-group">
                <label>Discount</label>
                <input type="text" name="dis" class="form-control" value="<?=$hdh->Disc ?>">
            </div>
            <div class="form-group">
                <label>Total Biaya</label>
                <input type="text" name="tobi" class="form-control" value="<?=$hdh->total_bayar ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php   }  ?>
    </div>
</div>