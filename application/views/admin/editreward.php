	<div class="main-panel">
	    <div class="content">
	        <div class="container-fluid ">
	            <?=$this->session->flashdata('massage')?>
	            <div class="row flex-lg-nowrap">
	                <div class="col">
	                    <div class="row">
	                        <div class="col mb-3">
	                            <div class="card">
	                                <div class="card-body">

	                                    <ul class="nav nav-tabs">
	                                        <li class="nav-item"><a href="http://localhost/pm/admin"
	                                                class="active nav-link">Edit Reward</a></li>
	                                        <button type="submit" class="btn btn-primary" style="margin-left: 764px;"
	                                            data-toggle="modal" data-target="#exampleModal">Tambah data</button>

	                                    </ul>

	                                    <div class="tab-content pt-3">
	                                        <div class="tab-pane active">
	                                            <div class="table100 ver1">
	                                                <div class="table100-head">
	                                                    <table>
	                                                        <thead>
	                                                            <tr class="row100 head">
	                                                                <th class="cell100 column1">Nama Hadiah</th>
	                                                                <th class="cell100 column2">Point</th>
	                                                                <th class="cell100 column3">Nama Gambar</th>
	                                                                <th class="cell100 column4">Action</th>
	                                                            </tr>
	                                                        </thead>
	                                                    </table>
	                                                </div>
	                                                <div class="table100-body js-pscroll" style="height:350px">
	                                                    <table>
	                                                        <tbody>
	                                                            <?php foreach ($hadiah as $hdh) :?>
	                                                            <tr class="row100 body">
	                                                                <td class="cell100 column1"><?= $hdh->nama_hadiah ?>
	                                                                </td>
	                                                                <td class="cell100 column2"><?= $hdh->point_hadiah ?>
	                                                                </td>
	                                                                <td class="cell100 column3"><img class="hadiahgambar1"
	                                                                        src="<?php echo base_url()?>assets/img/hadiah/<?php echo $hdh->gambar_hadiah ?>">
	                                                                </td>
	                                                                <td class="cell100 column4"><?= anchor('admin/hapus_hadiah/'
                                    .$hdh->id_hadiah, '<div class="btn btn-danger btn-sm"> 
									<i class="fa fa-trash"></i></div>') ?>
	                                                                    <?= anchor('admin/edit_hadiah/'
                                    .$hdh->id_hadiah, '<div class="btn btn-success btn-sm"> 
									<i class="fa fa-edit"></i></div>') ?>
	                                                                </td>
	                                                            </tr>
	                                                            <?php endforeach;?>
	                                                        </tbody>
	                                                    </table>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- Modal -->
	                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
	                                aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                <div class="modal-dialog" role="document">
	                                    <div class="modal-content">
	                                        <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
	                                            <button type="button" class="close" data-dismiss="modal"
	                                                aria-label="Close">
	                                                <span aria-hidden="true">&times;</span>
	                                            </button>
	                                        </div>
	                                        <div class="modal-body" style="background-color: #2fe9b1;">
	                                            <?= form_open_multipart('admin/tambah_hadiah');?>
	                                            <div class="form-group">
	                                                <label>Nama Hadiah</label>
	                                                <input type="text" name="nama" class="form-control">
	                                            </div>
	                                            <div class="form-group">
	                                                <label>Point</label>
	                                                <input type="text" name="poin" class="form-control">
	                                            </div>
	                                            <div class="form-group">
	                                                <label>Gambar</label>
	                                                <div class="custom-file">
	                                                    <input type="file" class="custom-file-input" id="image"
	                                                        name="image">
	                                                    <label class="custom-file-label" for="image">Choose file</label>
	                                                </div>
	                                            </div>
	                                            <div class="modal-footer">
	                                                <button type="button" class="btn btn-secondary"
	                                                    data-dismiss="modal">Close</button>
	                                                <button type="submit" class="btn btn-primary">Save changes</button>
	                                            </div>
	                                            </form>
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