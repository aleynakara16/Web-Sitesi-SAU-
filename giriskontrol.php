<?php
$adsoyad =$_POST["Username"];
$sifre =$_POST["Password"];
if($adsoyad && $sifre) // veriler boş değilse buradan devam eder
{
    if($adsoyad == "b211210004@sakarya.edu.tr" && $sifre=="b211210004")
    {  
        echo "hoşgeldin". $adsoyad;

       header("location:anasayfa.html"); 
    }
    else
    {
        header("location:giriş.html"); 

    }
} 
else 
{
header("location:giris.html"); // veriler boşsa sayfaya geri gönderir
}

?>