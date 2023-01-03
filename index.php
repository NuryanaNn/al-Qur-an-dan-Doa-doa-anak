
<?php 
include 'template/header.php';
include 'function.php';
include 'template/topbar.php';

$curl = curl("https://doa-doa-api-ahmadramadhan.fly.dev/api/");

// mengubah JSON menjadi array
$data = json_decode($curl, TRUE);

?>
<body>
    <div class="bannerIndex">
        <div class="title">
            <h3>Doa' - Do'a & Al-Quran</h3>
            <p>Lets Learn Everyday</p>
        </div>
        </div>
    <main>
</main>


<?php include 'template/footer.php';?>