<?php
if(@$_GET['halaman']=='pilih_menu'){
       include "halaman/6_dasar_pilih_menu.php";
}
else if (@$_GET['halaman']=='edit_data_diri'){
       include "halaman/4_edit_data_diri.php";
}
else if (@$_GET['halaman']=='riwayat_menu_makan'){
       include "halaman/12_riwayat_menu_makan.php";
}
else if (@$_GET['halaman']=='detail_menu_makan'){
       include "halaman/13_detail_menu_makan.php";
}
else if (@$_GET['halaman']=='hapus_data_menu'){
       include "halaman/14_hapus_data_menu.php";
}
else if (@$_GET['halaman']=='delete_menu'){
       include "halaman/15_delete_menu.php";
}
else {
       include "halaman/2_data.php";
}
?>