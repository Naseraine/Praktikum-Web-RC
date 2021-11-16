<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buah Dadakan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
  background-image: url('asset/background_fruit.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

</style>
<body>
    <div class="wrap">
		<div class="header">			
			<h1>Toko Buah Dadakan</h1>
			<p>Menjual Buah Yang Lagi Musim Aja , Ga Banyak!</p>
		</div>

    <div class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="http://wa.me/0895320292922">Kontak</a></li>
				<li><a href="https://instagram.com/naseraine">IG</a></li>
				<li><a href="https://github.com/naseraine">Github</a></li>
						
			</ul>
		</div>

    <section>
        <div class="content">
            <form action="data_proses.php" method="POST" id="proses_belanja" name="belanja" enctype="multipart/form">
                <label for="">1.Mangga Rp 15.000/Kg </label><br>
                <img src="asset/mangga.jpg" alt="mangga" style="width:150px;height:100px;"><br>
                <p>Banyak Buah Per-Kilo?</p><input type="number" id="mangga" onchange="Harga()" name="mangga"> <br><br>
                <label for="">2.Jambu Rp 13.000/Kg  </label><br>
                <img src="asset/jambu.jpg" alt="jambu" style="width:150px;height:100px;"><br>
                <p>Banyak Buah Per-Kilo?</p><input type="number" id="jambu" onchange="Harga()" name="jambu"> <br><br>
                <label for="">3.Salak Rp 10.000/Kg  </label><br>
                <img src="asset/salak.jpg" alt="salak" style="width:150px;height:100px;" ><br>
                <p>Banyak Buah Per-Kilo?</p><input type="number" id="salak" onchange="Harga()" name="salak"> <br><br>
                <label for="">Harga Total Belanjaan RP : </label>
                <input type="text" id="total" name="total" readonly> <br>
                <button type="submit" name="">Submit</button>
            </form>
        </div>
    </section>
</body>
<script>
    function Harga(){
        var total = document.getElementById("total");
        var mangga = document.getElementById("mangga").value*15000;
        var jambu = document.getElementById("jambu").value*13000;
        var salak = document.getElementById("salak").value*10000;
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
    
</script>
</html>