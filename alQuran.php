<?php
    include 'template/header.php';
    include 'template/topbar.php';
    include 'function.php';

    $curl = curl("https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json");

    // mengubah JSON menjadi array
    $data = json_decode($curl, TRUE);

    ?>


<body>
    <div class="bannerAlQuran">
        <h3>Al-Qur'an</h3>
        <p>Learn Quran <br> and Recite once everyday</p>
    </div>

    <main>
        <div class="contentAl-Quran">
            <div class="title">
                <h3>Daftar Surah</h3>
            </div>
            <div class="contentAlQuran-wrapper">
                <?php $i = 1; ?>
            <?php foreach ($data as $row){?>
                <a href="surah.php?id=<?=$i;?>">
                <div class="card">
                    <div class="content">
                        <div class="number">
                            <?= $i?>
                        </div>

                        <div class="details">
                            <div class="name">
                                <h3> <?= $row["name"];?></h3>
                            </div>
                            <ul>
                                <li><h4> <?= $row["number_of_ayah"];?></h4></li>
                                <li><h5> <?= $row["name_translations"]['id'];?></h5></li>
                            </ul>
                        </div>
                        <div class="surah">
                            <h3><?= $row["name_translations"]['ar'];?></h3>
                        </div>
                    </div>
                </div>
                </a>
                <?php $i++;?>
                <?php }?>
            </div>
        </div>
    </main>

</body>



<?php include 'template/footer.php'?>