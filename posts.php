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

$random_post_count = getRandomPostCount(1,15); //1-15 Arasında rastgele bir tamsayı alıyoruz ve bunu random_post değişkenine atıyoruz
$latest_posts_get = getLatestPosts($random_post_count); //Postları bir değişken halinde alıyoruz


foreach ($latest_posts_get as $id => $value){ //Postları id key değerine ve value değerlerine göre bir for loopa alıyoruz.
  $title = $value["title"]; //post.php deki title değerimiz buradaki key value (title) değerimiz olarak belirleniyor
  $type = $value["type"]; // post.php deki type değerimiz buradaki key value (type) değerimiz olarak belirleniyor
  include "post.php"; //post.php yi dahil ediyoruz. For loop sayesinde posts.php açıldığında 1-15 arasında değeri belirlenmiş postlarımız ekrana basılıyor.
}





