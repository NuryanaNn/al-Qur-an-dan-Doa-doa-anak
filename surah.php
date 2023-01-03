
<?php 
    include 'template/header.php';
    include 'function.php';
    include 'template/topbar.php';

    if(isset($_GET['id'])){
        $id    =$_GET['id'];
    }
    $curl = curl("https://raw.githubusercontent.com/penggguna/QuranJSON/master/surah/$id.json");

// mengubah JSON menjadi array
$data = json_decode($curl, TRUE);


?>


<body>
    <div class="bannerSurah">
        <h3><?= $data["name"]?></h3>
        <h5><?= $data["name_translations"]['id'];?></h5>
        <ul class="place">
            <li><?= $data['place']?></li>
            <li><?= $data['number_of_surah']?></li>
            <li><?= $data['type']?></li>
        </ul>
        <p>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيْم</p>
    </div>

    <main>
        <div class="contentAyat">
            <div class="title">
            </div>
            <div class="contentAyat-wrapper">
                <div class="ayat-wrapper">
                <div class="murotal">
                    <div class="murotal-card">
                        <p><?= $data['recitations']['0']['name']?></p>
                        <audio controls>
                        <source src="<?= $data['recitations']['0']['audio_url']?>" type="audio/mpeg">
                        </audio>
                    </div>
                    <div class="murotal-card">
                    <p><?= $data['recitations']['1']['name']?></p>
                        <audio controls>
                        <source src="<?= $data['recitations']['1']['audio_url']?>" type="audio/mpeg">
                        </audio>
                    </div>
                    <div class="murotal-card">
                    <p><?= $data['recitations']['2']['name']?></p>
                        <audio controls>
                        <source src="<?= $data['recitations']['2']['audio_url']?>" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
                    <?php $i = 0;?>
                    <?php foreach($data['verses'] as $row){?>
                        <div class="card">
                            <div class="nav-surah">
                                <div class="ayat"><?= $data['verses'][$i]['number']?></div>
                                <div class="details">
                                    <ul>
                                        <li><ion-icon name="book-outline"></ion-icon></li>
                                        <li><ion-icon name="share-social-outline"></ion-icon></li>
                                        <li><ion-icon name="bookmarks-outline"></ion-icon></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="textayat"><h3><?= $data['verses'][$i]['text']?></h3></div>
                            <div class="translation"><h4><?= $data['verses'][$i]['translation_id']?></h4></div>
                        </div>
                        <?php $i++?>
                        <?php }?>
                </div>
        </div>
    </main>

</body>


<?php
    include 'template/footer.php';
    ?>