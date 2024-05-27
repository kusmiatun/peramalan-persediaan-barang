
<link rel="stylesheet" href="logo.css">

<div class="logo">
  <img src="BSJ.jpg" alt="Logo" style="width:80px"><h1>PT. BARRIZ SANTUN JAYA</h1>
  <br/>
  <br/>
  <br/>
  <a href="beranda.php"><i class="fa-solid fa-house"></i> Beranda</a>
  <a href="menu_pengguna.php"><i class="fa-solid fa-users"></i> Pengguna</a>
  <button class="dropdown-btn"><i class="fa-solid fa-folder-open"></i> Penjualan
      <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="input_penjualan.php">Input penjualan</a>
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

  <a href="#Peramalan"><i class="fa-solid fa-chart-line"></i> Peramalan</a>
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

