<?php 
session_start();
session_destroy();
echo"<script>alert('Anda berhasil Logout ')</script>";
echo"<script>window.location='..';</script>";
 ?>