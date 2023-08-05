<html>
    <head>

    </head>

<body style="background-color:darkgray;">
 <div >
   <p>
       <?php
         $adsoyad =$_POST["Username"];
         $sifre =$_POST["Password"];
         if($adsoyad && $sifre) 
         {
            if($adsoyad == "b221210100@sakarya.edu.tr" && $sifre=="b221210100")
            {  
                echo "GİRİŞ BAŞARILI ". $adsoyad;
        
            }
            else
            {
                header("location:giriş.html"); 
        
            }
         } 
         else 
         {
          header("location:giris.html"); 
         }
       ?>
   </p>
 </div>

</body>
</html>
