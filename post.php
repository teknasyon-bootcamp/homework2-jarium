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


if (!isset($id)){ //id yoksa belirleme
     $id = 1;
}
if (!isset($title)){ //title yoksa belirleme
    $title = "Cthulhu's Unknown Secrets";
}
if (!isset($type)){ //type(renk) yoksa belirleme
    $type = "urgent";
}
switch ($type){ //Switch ile renk belirlemesi yapacağız
    case "urgent": //Urgent ise color değişkeni kırmızı olur
        $color = "red";
        break ;
    case "warning": //Warning ise color değişkeni sarı olur
        $color = "yellow";
        break;
    case "normal": //Normal ise color değişkeni beyaz olur
        $color = "white";
        break;
}
?> <div style="background-color:<?php echo $color ?>;"><?php getPostDetails($id,$title);?></div> <?php //Ekrana değerimiz bastırılır




