<div class="main-panel">
    <div class="content ">
        <div class="container-fluid">
            <?=$this->session->flashdata('massage')?>
            <div class="cardpoint">
                <i class="fa fa-gift" aria-hidden="true"></i>
                <a>Point : <?= $login['poin']; ?></a>
            </div>
            <div class="card"
                style=" padding-left:80px; padding-top:20px; padding-bottom:20px; margin-bottom:50px; border-top-right-radius: 10px">
                <div class="row">
                    <?php foreach ($hadiah as $hdh) :?>
                    <div class="cardhadiah">
                        <div style="font-weight: bold"><a><?php echo $hdh->nama_hadiah ?></a></div>
                        <div class="kartudalamhadiah">
                            <img class="hadiahgambar"
                                src="<?php echo base_url()?>assets/img/hadiah/<?php echo $hdh->gambar_hadiah ?>">
                            <a>Point : <?php echo $hdh->point_hadiah ?></a>
                        </div>
                        <?= anchor('user/tukar_hadiah/'
                                    .$hdh->id_hadiah, '<div> 
									<button class="btn redeem-btn btn-sm">Tukar</button></div>') ?>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>