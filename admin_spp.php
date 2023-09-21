<?php
include("inc_header.php");
if(!in_array("spp", $_SESSION['admin_akses'])){
    echo "kamu tidak punya akses";
    include("inc_footer.php");
    exit();
}
?>
<h1>Halaman SPP</h1>
Selamat Datang Di Halaman SPP
<?php
include("inc_footer.php");
?>