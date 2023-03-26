<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=b893c632&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1> FILM  </h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="gambar1.webp" class="card-img-top" height="300px">
      <div class="card-body">
        <h5 class="card-title">ANNE 2018 </h5>
        <p class="card-text">A mentally ill woman with a severe personalty disorder develops a strange relationship with her dolls. She becomes victim to insomnia and even self-mutilation leaving her son to unfold the… See more »
Joseph Mazzaferro
Melissa Daddio, Michael Kenneth Fahr, John Kyle, Joseph Mazzaferro, Natalie Pitcher
16 Mar 2018 (United States)</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar2.webp" class="card-img-top" height="300px">
      <div class="card-body">
        <h5 class="card-title">LOVE SIMON</h5>
        <p class="card-text">Simon Spier keeps a huge secret from his family, his friends, and all of his classmates: he’s gay. When that secret is threatened, Simon must face everyone and come to terms with his… See more »
Greg Berlanti
Nick Robinson, Jennifer Garner, Josh Duhamel, Katherine Langford, Alexandra Shipp
16 Mar 2018 (United States)</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar3.webp" class="card-img-top" height="300px">
      <div class="card-body">
        <h5 class="card-title">SAKRA</h5>
        <p class="card-text">Sakra (2023)
New adaptation of Louis Cha’s wuxia novel Demi-Gods and Semi-Devils.
Donnie Yen, Kenji Tanigaki, Andrew Yan Hua
Donnie Yen, Yukee Chen, Liu Yase, Kara Hui, Wu Yue, Eddie Cheung, Grace Wong, Do Yuming, Ray Lui, Tsui Siu-Ming, Cai Xiangyu, Michelle Hu, Zhao Huawei, Yu Kang, Xu Xiangdong, Yuen Cheung-Yan</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar4.jpg" class="card-img-top" height="300px">
      <div class="card-body">
        <h5 class="card-title">7 Guardians Of The Tomb</h5>
        <p class="card-text">Kimble Rendall
Kelsey Grammer, Kellan Lutz, Bingbing Li, Yasmin Kassim, Stef Dawson
19 Jan 2018 (China, Australia, Russia, Thailand)</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar5.webp" class="card-img-top" height="300px">
      <div class="card-body">
        <h5 class="card-title">Another Soul</h5>
        <p class="card-text">A couple on the run battle to save their daughter from possession by a demon.
Paul Chau
Anthony Misiano, Tia Link, Rebecca Lovett, Wyatt Kuether, Maura Grady
25 May 2018 (United States)</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar6.webp" class="card-img-top" height="300px">
      <div class="card-body">
        <h5 class="card-title">Red Water</h5>
        <p class="card-text">Due to changes in ocean currents, shark activity appeared near a certain diving area, but the traces are unknown. Doctor Shen Xin was invited to attend the birthday party of his cousin Liu Yiran, but by accident, he got involved in the emotional farce of his cousin boyfriend Zhou Tianming and his female boss He Wendy. As everyone knows, the four strayed into the shark-infested place, and the bloodthirsty hunt was staged. In order to save everyone’s lives, Shen Xin started a desperate contest with the bloodthirsty sharks, fighting for the sharks.
Huang Zhaosheng
Zhao Yihuan, Tao Huang, Hong Shuang, Xie Yiqing</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
