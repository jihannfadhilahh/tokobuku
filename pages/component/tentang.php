 <!-- Start All Title Box -->
 <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>TENTANG KAMI</h2>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Tentang Kami</li>
                    </ul>
    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-10">
                    <?php foreach($db->tentang_kami() as $d): ?>
                    <h2 class="noo-sh-title"> <span><?= $d->judul_informasi ?></span>:</h2>
                   <?= $d->keterangan ?>
                    <?php endforeach ?>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-thumbnail img-fluid" src="images/about-img.jpg" alt="" />
                    </div>
                </div> -->
            </div>
         
        </div>
    </div>
    <!-- End About Page -->