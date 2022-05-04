<?php
/**
 * классы и интерфейсы
 **/

interface Primat//интерфейс примата
{
    public function eat(bool $e);
    public function drink(bool $d);
}
trait OfPlank
{
    public function cofeeTime($cof)
    {
        echo 'пьёт кофе ';
    }
}

abstract class Human
{
    public string $name;
    abstract public function work(Human $work);
}


class Dev extends Human implements primat
{
    use ofPlank;
    private $rank = array(
        1=>'junior',
        2=>'middle',
        3=>'senior',
        4=>'lead'
    );
    private int $rankState = 0;
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

//    public function Down()
//    {
//        $this->rankState--;
//    }



    public function eat($e)
    {
        if ($e ==1) {
            echo 'поел';
        } else {
            echo 'голодный';
        }


        // TODO: Implement eat() method.
    }
    public function drink($d)
    {
        if ($d ==1) {
            echo 'попил';
        } else {
            echo 'жажда';
        } ; // TODO: Implement drink() method.
    }
    public function work( Human $work)
    {
        if ($work == 1) {
            printf('|пошёл на работу|');
        }
        else if($work == 2) {
            printf('| не пошел на работу|');
        }

        else{
            printf('');
        }
        // TODO: Implement work() method.
    }
}
?>