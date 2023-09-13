
<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SISFO TPA</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url("index.php/"); ?>">Beranda</a></li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Lembaga <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url("index.php/user/daftarlembaga"); ?>">Aktif</a></li>
          <li><a href="<?php echo base_url("index.php/user/daftarlembagatidakaktif"); ?>">Tidak Aktif</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url("index.php/user/daftardonatur"); ?>">Donatur</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pendaftaran <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url("index.php/user/registrasiguru"); ?>">Guru</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url("index.php/lembaga/login"); ?>"><span class="glyphicon glyphicon-log-in"></span> Login Lembaga</a></li>
    </ul>
  </div>
</nav>
  

<div class="header" style="background-image: url('<?php echo base_url();?>asset/image/background.jpg');">
	<div class="container">
		<h2 class="bgdark site-name">Taman Pendidikan Al-Quran</h2>
		<p class="bgdark site-description">Taman Pendidikan Al-Quran</p>
	</div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">KEC.GILIRENG</a>
    </div>
  </div>
</nav>
