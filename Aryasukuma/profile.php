<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
  <style>
    section#box-profile{
      position: relative;
      width: 80%;
      min-height: 250px;
      margin-left: 10%;
      margin-right: 10%;
      margin-top: 60px;
      border-radius: 6px;
      background-color: #fff;
      box-shadow: 0 0 7px 0px rgba(136, 136, 136, 0.2)
    }
  </style>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">PT PENCARI JODOH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="prudoct.php">Back</a>
      </li>
  </div>
</nav>
  <section id="box-profile">
    <div class="img-profile">
      <div class="photo" style="background-image:url(img/1.jpg)"></div>  
    </div>
    <div class="description">
      <h1>Arya Kusuma</h1>
      <p>New Programer</p>
      <a href="#" class="button bg-green">Contact</a>
      <a href="#" class="button border-blue">Resume</a>
    </div>
    <div class="information">
      <div class="data">
        <p class="field">Tempat Lahir</p>
        <p class="text-gray">Jakarta</p>
      </div>
      <div class="data">
        <p class="field">Tanggal Lahir</p>
        <p class="text-gray">11 Maret 2002</p>
      </div>
      <div class="data">
        <p class="field">Umur</p>
        <p class="text-gray">18</p>
      </div>
      <div class="data">
        <p class="field">Hobi</p>
        <p class="text-gray">Game</p>
      </div>
      <div class="data">
        <p class="field">Email</p>
        <p class="text-gray">array</p>
      </div>
    </div>
  </section>
  <section>
    <form method="#" action="#">
      <div>
        <label>Nama</label>
        <input type="text" name="nama" 
        placeholder="Masukan Nama Anda">
      </div>
      <div>
        <label>Role</label>
        <input type="text" name="role">
      </div>
      <div>
        <label>Tempat Lahir</label>
        <input type="text" name="tempatlahir">
      </div>
      <div>
        <label>Tanggal Lahir</label>
        <input type="text" name="tanggallahir">
      </div>
      <div>
        <label>Umur</label>
        <input type="number" name="umur">
      </div>
      <div>
        <label>Hobi</label>
        <input type="text" name="hobi">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email">
      </div><div>
        <input type="submit" name="submit" valeu="SUBMIT">
      </div>
    </from>
  </section>
  
</body>
</html>