<?php

declare(strict_types=1);

interface primat {
    public function eat(bool $e);
    public function drink(bool $d);
}
trait ofPlank{
    function cofeeTime($cof){ echo 'drink cofee';}
}

abstract class human{
    public string $name;
//    public string $position;

    abstract public function work(string $work);
}


class dev extends human implements primat{
    use ofPlank;
    public  $rank = array(
        1=>'junior',
        2=>'middle',
        3=>'senior',
        4=>'lead'
    );
        public int $rankState = 0;

        public function __construct(int $currentRank)
        {
      $this->rankState = $currentRank;
            }
    public function show()
    {
        echo $this->rank[$this->rankState];
    }

    public function Up()
    {
        $this->rankState++;
    }

    public function Down()
    {
        $this->rankState--;
    }



public function eat( $e)
{
    if ($e ==1){
   echo 'поел';}
    else {
        echo 'голодный';
    }


    // TODO: Implement eat() method.
}
public function drink($d)
{
    if ($d ==1){
        echo 'попил';}
    else {
        echo 'хочет пить    ';
    } ; // TODO: Implement drink() method.
}
  use ofPlank;
    public function work($work)
    {
        $work = 'пошёл на работу';
        // TODO: Implement work() method.
    }


} echo 'повышения бэкендера с ';
$backend = new dev(1,);
echo $backend->show()."\n";
$backend->Up();
echo 'до ';
echo $backend->show()."\n";

//var_dump($backend);
?>
<br><?php
echo 'фронтендер уровня  ';
$frontend = new dev(1,);
echo $frontend->show()."\n";
?>
<br>
<br>
<br>
<br>
<br><?php
//foreach (rank as $key => $key_mame){
//    echo $key_mame;
//    echo $key;
//
//}


//print_r($backend);
// if (isset($_POST['ranked'])){
//          $backend->rank++;
//        }
//foreach (rank as $item  => $item_count);
//    ("Item=" . $item . ", Value=" . $item_count);
//    echo $item ;
//
//

?>




