class Animals
{

    public $habitat, $nutrition;

    public function set_habitat($habitat)
    {
        $this->habitat = $habitat;
        return $this;
    }

    public function set_nutrition($nutrition)
    {
        $this->nutrition = $nutrition;
        return $this;
    }

    public function get_habitat()
    {
        return $this->habitat;
    }

    public function get_nutrition()
    {
        return $this->nutrition;
    }

    public function get_info()
    {
        return ' Habitat : ' . $this->habitat . "," . ' Nutrition : '  . $this->nutrition ;
    }
}

class Mammals extends Animals
{
    public $size,$sort;

    public function set_sort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    public function set_size($size)
    {
        $this->size = $size;
        return $this;
    }

    public function get_size()
    {
        return $this->size;
    }

    public function get_sort()
    {
        return $this->sort;
    }

    public function get_info()
    {
        return parent::get_info() . ','.' Size : '. $this->size . ',' .' Sort : ' . $this->sort ;
    }
}

class Cat extends Mammals
{
    protected $color, $name, $breed;

    public function set_breed($breed)
    {
        $this->breed = $breed;
        return $this;
    }

    public function set_name($name)
    {
        $this->name = $name;
        return $this;
    }

    public function set_color($color)
    {
        $this->color = $color;
        return $this;
    }

    public function get_color()
    {
        return $this->color;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_breed()
    {
        return $this->breed;
    }

    public function get_info()
    {
        return parent::get_info() . ' Color : ' . $this->color .','. ' Name : '  . $this->name . ','.  ' Breed : '. $this->breed ;
    }
}

$myCat = new Cat();
$myCat
    ->set_habitat('Home')
    ->set_nutrition('Meet')
    ->set_size('Small')
    ->set_sort('Cat')
    ->set_color('Grey')
    ->set_name('NaN')
    ->set_breed('Мейн Кун');
echo $myCat->get_info();
