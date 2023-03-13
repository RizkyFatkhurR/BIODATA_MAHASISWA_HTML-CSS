<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizky Fatkhur R</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
    $nama = "Rizky Fatkhur Rohman";
    $npm = "21081010051";
    $kota = "Madiun Jawa Timur";
    $selamat = "Selamat atang di website saya.";
    $info = "Berpengalaman dalam bidang Fotografi dan telah tersertifikasi dalam bidang Fotografi yang terdaftar pada LESKOFI yang merupakan lembaga sertifikasi kompetensi bidang Fotografi.";
    ?>

    <div class="main"> 

        <div class="img"></div>
        <link rel="stylesheet" type="text/css" href="Biodata.php">
        <h1> <?php echo $nama; ?></h1>
        <div class="text">
            <?php echo $npm ?><br/><strong><?php echo $kota?></strong>
        </div><br/>
        <p> 
            <strong><?php echo $selamat?></strong>
            <br>
            <?php echo $info?> </p>
            <div class="">
                <ul>
            <li><a href="https://instagram.com/rizkyfatkhurr?igshid=YmMyMTA2M2Y="><img src="ig.png" width="25px" height="25" ></a></li>
            <li><a href="https://www.facebook.com/rizky.f.rohman.7?mibextid=ZbWKwL"><img src="fb.png" width="25px" height="25" ></a></li>
        </ul>
        
    </div>

    </div>     

</body>
</html>