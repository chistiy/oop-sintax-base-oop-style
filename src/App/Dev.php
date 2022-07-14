<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App;

/*
 * This file is part of PHP CS Fixer.
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * классы и интерфейсы.
 */
// interface Primat // интерфейс примата
// {
//    public function eat(bool $e);
//
//    public function drink(bool $d);
// }
// trait OfPlank
// {
//    public function cofeeTime($cof): void
//    {
//        echo 'пьёт кофе ';
//    }
// }

// abstract class Human
// {
//    public string $name;
//
//    abstract public function work(self $work);
// }

class Dev extends Human implements primat
{
    use ofPlank;
    private $rank = [
        1 => 'junior',
        2 => 'middle',
        3 => 'senior',
        4 => 'lead',
    ];
    private int $rankState = 0;

    public function __construct(int $currentRank)
    {
        $this->rankState = $currentRank;
    }

    public function show(): void
    {
        echo $this->rank[$this->rankState];
    }

    public function Up(): void
    {
        ++$this->rankState;
    }

//    public function Down()
//    {
//        $this->rankState--;
//    }

    public function eat($e): void
    {
        if (1 === $e) {
            echo 'поел';
        } else {
            echo 'голодный';
        }

        // TODO: Implement eat() method.
    }

    public function drink($d): void
    {
        if (1 === $d) {
            echo 'попил';
        } else {
            echo 'жажда';
        }  // TODO: Implement drink() method.
    }

    public function work(Human $work): void
    {
        if (1 === $work) {
            printf('|пошёл на работу|');
        } elseif (2 === $work) {
            printf('| не пошел на работу|');
        } else {
            printf('');
        }
        // TODO: Implement work() method.
    }
}
