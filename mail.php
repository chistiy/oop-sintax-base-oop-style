<?php declare(strict_types=1);
class mail
{
    public $name;
    public $color;
    public $sex;
    public $age;

    public function __construct($name, $age = '', $sex = 'boy')
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->color = 'yello';
    }

    public function eat(): void
    {
        echo $this->name.'Хочу съесть';
    }

    public function xinxi(): void
    {
        echo $this->name.' is '.$this->sex.' and age is '.$this->age.' fuse is '.$this->color;
    }

    public function zuoyong(): void
    {
        // Подобно этому внутреннему вызову, это эквивалентно введению кода eat () в zuoyong () вместо перехода к eat () для продолжения выполнения
        // Если это URL типа http: // localhost / zuoyong? Food = xigua для вызова zuoyong ()
        // Затем eat () может напрямую получить параметр url через $ _GET ['food'], потому что внутри функции можно использовать глобальные переменные
        $this->eat();
    }
}

$son = new person('kto-to', 25, 'girl'); // Передаваемый здесь параметр должен соответствовать порядку параметров в методе построения класса
// $son->xinxi();//cuihua is girl and age is 25 fuse is yello
$son->name = 'Тиан Ню';
$son->eat(); // Тянь Ню хочет поесть
?>
<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="__URL__" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>
