<?php
declare(strict_types=1);

require 'class.php';


    printf('повышения бэкендера с ');
    $backend = new Dev(1);
    printf($backend->show()."\n");
    $backend->Up();
    echo 'до ';
    echo $backend->show()."\n";

    echo '|бэкендер хочет есть->';

    $backend->eat($e=1);

    printf('|бахнул дебаф офисного планктона    ');
    $backend->cofeeTime($cof);

?>
<br>
<?php
    echo 'фронтендер уровня  ';
        $frontend = new dev(1);
    echo $frontend->show()."\n";

    echo '|фронтендер хочет пить->';
    $backend->drink($d=2);
//     $frontend->work(2);

echo '<br>';
$dev1 = new Dev();

$dev2 = new Dev();
$dev1->work($dev2);

?>
<br>
<br>
<br>
<br>
<br>
