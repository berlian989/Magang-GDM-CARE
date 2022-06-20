<div class="main-panel">
    <div class="content">
        <div class="container-fluid ">

            <div class="row flex-lg-nowrap">
                <div class="col">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="http://localhost/pm/admin"
                                                class="active nav-link">Aktivasi User</a></li>
                                        <li class="nav-item"><a href="http://localhost/pm/admin/editbiodatauser"
                                                class="nav-link">Biodata User</a></li>
                                    </ul>

                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <div class="table100 ver1">
                                                <div class="table100-head">
                                                    <table>
                                                        <thead>
                                                            <tr class="row100 head">
                                                                <th class="cell100 column1">Name</th>
                                                                <th class="cell100 column2">Email</th>
                                                                <th class="cell100 column3">no telp</th>
                                                                <th class="cell100 column4">Aktivasi</th>
                                                                <th class="cell100 column5">Action</th>

                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="table100-body js-pscroll" style="height:350px">
                                                    <table>
                                                        <tbody>
                                                            <?php foreach ($customer as $ctr) :?>
                                                            <tr class="row100 body">
                                                                <td class="cell100 column1"><?= $ctr->nama_lengkap ?>
                                                                </td>
                                                                <td class="cell100 column2" name="email">
                                                                    <?= $ctr->email ?></td>
                                                                <td class="cell100 column3"><?= $ctr->no_telp ?></td>
                                                                <td class="cell100 column4"><?php
                                    if ($ctr->is_active==1) {
                                        echo "Aktif";
                                    } else {
                                        echo "Belum Aktif";
                                    }?></td>
                                                                <td class="cell100 column5">
                                                                    <?= anchor('admin/aktif/'
                                    .$ctr->id_cust, '<button class="btn btn-success"> Aktif </button>') ?>
                                                                    <?= anchor('admin/nonaktif/'
                                    .$ctr->id_cust, '<button class="btn btn-danger" > Nonaktif </button>') ?>
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