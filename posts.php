<?php

/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */

include_once "functions.php";
include_once "post.php";

$random_post_count = getRandomPostCount(1,15); //1-15 Arasında rastgele bir tamsayı alıyoruz ve bunu random_post değişkenine atıyoruz
$latest_posts_get = getLatestPosts($random_post_count); //Postları bir değişken halinde alıyoruz
?>

<div>
    <?php foreach ($latest_posts_get as $id => $value): ?>
        
     <?php

     if ($value["type"] == "urgent"){
       $color = 'red';
     }
     elseif ($value["type"] == "warning"){
       $color = 'yellow';
     }
     elseif ($value["type"] == "normal"){
       $color = 'white';
     } 

   ?>
   <div style="background-color:<?php echo $color ?>;"><?php getPostDetails($id, $value['title']);?></div>
   <?php  endforeach; ?>

</div>


