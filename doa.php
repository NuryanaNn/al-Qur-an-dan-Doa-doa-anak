
<?php 
    include 'template/header.php';
    include 'function.php';
    include 'template/topbar.php';

    if(isset($_GET['id'])){
        $id    =$_GET['id'];
    }
    $curl = curl("https://doa-doa-api-ahmadramadhan.fly.dev/api/$id");

// mengubah JSON menjadi array
$data = json_decode($curl, TRUE);


?>
<body>
    <?php foreach($data as $row){ ?>
        <div class="bannerDoa">
            <div class="overlay">
                <h3><?php echo $row["doa"];?></h3>
                <h4>ِبِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيْم</h4>
            </div>
        </div>


    <main class="doa-details">
        <div class="content">
            <div class="card">
                <div class="nav-doa">
                    <div class="number"><p><?=$row['id']?></p></div>
                    <ul class="details">
                        <li><ion-icon name="book-outline"></ion-icon></li>
                        <li><ion-icon name="share-social-outline"></ion-icon></li>
                        <li><ion-icon name="bookmarks-outline"></ion-icon></li>
                    </ul>
                </div>
                <div class="details-ayat">
                <h2><strong><?php echo $row["ayat"] ?></strong></h2>
                <h3><?php echo $row["latin"] ?></h3>
                <p><i> Artinya : <?php echo $row["artinya"] ?></i></p>
                </div>
                </div>
            </div>
        </div>
    </main>
    
<?php } ?>

<?php
    include 'template/footer.php';
    ?>