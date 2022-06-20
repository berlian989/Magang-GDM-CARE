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
                                                class=" nav-link">Aktivasi User</a></li>
                                        <li class="nav-item"><a href="http://localhost/pm/admin/editbiodatauser"
                                                class="active nav-link">Biodata User</a></li>
                                    </ul>

                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <div class="table100 ver1 ">
                                                <div class="table100-head">
                                                    <table>
                                                        <thead>
                                                            <tr class="row100 head">
                                                                <th class="cell100 column1">Name</th>
                                                                <th class="cell100 column2">Email</th>
                                                                <th class="cell100 column3">Action</th>

                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="table100-body js-pscroll" style="height:350px">
                                                    <table>
                                                        <tbody>
                                                            <?php foreach ($customer as $ctr) :?>
                                                            <tr class="row100 body">
                                                                <td class="cell100 column1">
                                                                    <?php echo $ctr->nama_lengkap ?></td>
                                                                <td class="cell100 column2" name="email">
                                                                    <?php echo $ctr->email ?></td>
                                                                <td class="cell100 column3">
                                                                    <?= anchor('admin/updatebiouser/'
                                    .$ctr->id_cust, '<button class="btn btn-success"> Edit  </button>') ?>
                                                                    <?= anchor('admin/hapususer/'
                                    .$ctr->id_cust, '<button class="btn btn-danger" > Delete  </button>') ?>
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
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>