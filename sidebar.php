<?php 
if(!isset($_SESSION)){ 
  session_start(); 
} 

function isMenuAdmin() {
  return isset($_SESSION['role']) && $_SESSION['role'] == 'admin';
}

function isMenuPengadaan() {
  return isset($_SESSION['role']) && $_SESSION['role'] == 'pengadaan';
}

?>


<link rel="stylesheet" href="logo.css">

<div class="logo">
  <div style="text-align: center;">
    <img src="image/BSJ.jpg" alt="Logo" style="width:80px">
    <h1 style="color: white; font-size: 14px; text-align: center; display: block">PT. BARRIZ SANTUN JAYA</h1>
  </div>
  <br/>
  <br/>
  <br/>
  
  <?php if(isMenuAdmin()) { ?>
  <a href="index.php"><i class="fa-solid fa-house"></i> Beranda</a>
  <?php } ?>
  
  <button class="dropdown-btn"><i class="fa-solid fa-folder-open"></i> Pengguna
      <i class="fa fa-caret-down"></i>
  </button>

  <div class="dropdown-container">
  <?php if(isMenuAdmin()) { ?>
  <a href="menu_pengguna.php"></i>Input pengguna</a>
  <?php } ?>
  <a href="data_pengguna.php">Data pengguna</a>
  </div>

  <button class="dropdown-btn"><i class="fa-solid fa-folder-open"></i> Obat
      <i class="fa fa-caret-down"></i>
  </button>

  <div class="dropdown-container">
  <?php if(isMenuAdmin()) { ?>
  <a href="input_obat.php"></i>Input obat</a>
  <?php } ?>
  <a href="data_obat.php">Data obat</a>
  </div>

  <button class="dropdown-btn"><i class="fa-solid fa-folder-open"></i> Penjualan
      <i class="fa fa-caret-down"></i>
  </button>
  
  <div class="dropdown-container">
    <?php if(isMenuAdmin()) { ?>
    <a href="input_penjualan.php">Input penjualan</a>
    <?php } ?>
    <a href="data_penjualan.php">Data penjualan</a>
  </div>

  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
</div>

  <?php if(isMenuPengadaan()) { ?>
  <a href="peramalan.php"><i class="fa-solid fa-chart-line"></i> Peramalan</a>
  <?php } ?>
  
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>

