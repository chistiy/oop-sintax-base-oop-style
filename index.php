<?php

declare(strict_types=1);

interface primat {
    public function eat(bool $e);
    public function drink(bool $d);
}
trait ofPlank{
    function cofeeTime(){ echo 'drink cofee';}
}

abstract class human{
    public string $name;
//    public string $position;
    public static $rank = array(
        1=>'junior',
        2=>'middle',
        3=>'senior',
        4=>'lead'
    );

    abstract public function work(string $work);
}


class dev extends human implements primat{


public function eat( $e)
{
    if ($e ==1){
   echo 'поел';}
    else {
        echo 'голодный';
    }


    // TODO: Implement eat() method.
}
//какой же я блять тупой
public function drink($d)
{
    if ($d ==1){
        echo 'попил';}
    else {
        echo 'хочет пить    ';
    } ; // TODO: Implement drink() method.
}

    public function work($work)
    {
        $work = 'пошёл на работу';
        echo $work;
        // TODO: Implement work() method.
    }
    public function upRank($rank){
        if (isset($_POST['ranked'])){
            $rank = 1;
            $rank++;
        }
    }
    use ofPlank;
}
$backend = new dev();

//class backend extends dev{
//    use ofPlank;
//
//    static function upRank($rank){
//
//        if (isset($_POST['ranked']))
//        {   $rank = 1;
//            $rank++;
//
//        }
//
//    }
//
////    static function upRank($rank){
////        $rank = 1;
////        $rank++;
////    foreach ($rank as $item  => $item_count);
////    ("Item=" . $item . ", Value=" . $item_count);
////    echo $item;
////}
//}
//
//
//
//class frontend extends dev{
//
//
//use ofPlank;
//
//}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <input name="ranked" type="submit" value="повысить" />

</form>
<button> понизить</button>
<div>Переменная из php:<?php  ?>
</div>
</body>
</html>

