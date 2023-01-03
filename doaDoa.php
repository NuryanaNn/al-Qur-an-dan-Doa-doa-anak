
<?php 
include 'template/header.php';
include 'function.php';
include 'template/topbar.php';

$curl = curl("https://doa-doa-api-ahmadramadhan.fly.dev/api/");

// mengubah JSON menjadi array
$data = json_decode($curl, TRUE);

?>
<body>
            <div class="banner">
                <div class="title">
                    <h3>Doa' - Do'a</h3>
                    <p>Lets Learn Doa</p>
                </div>
            </div>

    <main>
        <div class="content-doa">
            <div class="content-doa-wrapper">
                <?php foreach($data as $row){ ?>
                    <a href="doa.php?id=<?=$row["id"];?>">
                <div class="card">
                    <div class="overlay">
                        </div>
                        <div class="content-text">
                            <h3><td><?php echo $row["doa"]; ?></td></h3>
                            <p>Sesuai Sunah</p>
                        </div>
                </div>
                </a>
                <?php } ?>
    </main>


<?php include 'template/footer.php';?>