<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */

include_once "functions.php";

//Eğer id, title, type yoksa değerlerini belirliyoruz

if (!isset($id)){ //id yoksa belirleme
    $id = 1;
}
if (!isset($type)){ //type(renk) yoksa belirleme
    $type = "urgent";
    $color = "red";
}
if (!isset($title)){ //title yoksa belirleme
    $title = "Cthulhu's Unknown Secrets";
}
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])): //Eğer bu dosyaya erişilmek istenirse, default değerler olarak belirlediğimiz şekilde 1 adet article değeri gösterilir.
 ?> <div style="background-color:<?php echo $color ?>;"><?php getPostDetails($id,$title);?></div>
<?php endif ?>




