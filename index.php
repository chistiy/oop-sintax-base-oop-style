<?php

declare(strict_types=1);

interface Primat {
    public function eat(bool $e);
    public function drink(bool $d);
}
trait ofPlank{
    function cofeeTime($cof){ echo 'пьёт кофе ';}
}

abstract class Human{
    public string $name;
    abstract public function work(string $work);
}


class Dev extends Human implements primat{
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
        echo 'жажда';
    } ; // TODO: Implement drink() method.
}
  use ofPlank;
    public function work($work)
    {
        $work = 'пошёл на работу';
        // TODO: Implement work() method.
    }


} echo 'повышения бэкендера с ';
$backend = new Dev(1,);
echo $backend->show()."\n";
$backend->Up();
echo 'до ';
echo $backend->show()."\n";
echo '|бэкендер хочет есть->';
$backend->eat($e=1);
//var_dump($backend);
echo '|бахнул дебаф офисного планктона    ';
$backend->cofeeTime(cof );
?>
<br><?php
echo 'фронтендер уровня  ';
$frontend = new dev(1,);
echo $frontend->show()."\n";
echo '|фронтендер хочет пить->';
$backend->drink($d=2);
?>
<br>
<br>
<br>
<br>
<br>



