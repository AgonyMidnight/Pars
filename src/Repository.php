<?php


class Repository
{
   private $array_date;
   private $count = 0;
   private $array_entity;
   private $parser;
   private $type_c;
   private $type_s;

    /**
     * @param mixed $array_entity
     */
    private function setArrayEntity(): void
    {
        $this->parser->getArrayDate();
        while ($this->parser->getArrayDate()) {
            $this->array_entity[] = new  Entity(
                $this->parser->array_date[0],
                $this->parser->array_date[1],
                $this->parser->array_date[2],
                $this->parser->array_date[3],
                $this->parser->array_date[4],
                $this->parser->array_date[5],
                $this->parser->array_date[6],
                $this->parser->array_date[7],
                $this->parser->array_date[8],
                $this->parser->array_date[9],
                $this->parser->array_date[10],
                $this->parser->array_date[11]);
                $this->count++;
        }
    }

   public function  __construct()
   {
        $this->parser = new Parser("export");
        $this->setArrayEntity();
   }

   public function get_positiv_quantity(int $condition){

       echo "<table border = '1'>";
       echo "<tr>
        <th>ID</th>
        <th>img</th>
        <th>Имя</th>
        <th>Тип</th>
        <th>Атриб.</th>
        <th>SKU</th>
        <th>Цена</th>
        <th>Кол-во</th>
        <th>Вид</th>
        <th>Статус</th>
        <th>Web</th>
        <th>Действие</th>
        </tr>
        ";
        $this->type_c = 0;
        $this->type_s = 0;
        foreach ($this->array_entity as $value) {
            if ($value->Quantity > $condition) {

                echo "<tr>
                <td>$value->ID</td>
                <td> <img src = '$value->Thumbnail' alt=''> </td>
                <td>$value->Name</td>
                <td>$value->Type</td>
                <td>$value->Attribute_Set</td>
                <td>$value->SKU</td>
                <td>$value->Price</td>
                <td>$value->Quantity</td>
                <td>$value->Visibility</td>
                <td>$value->Status</td>
                <td>$value->Websites</td>
                <td>$value->Action</td>
                </tr>
                ";
                if ($value->Type == "configurable") $this->type_c++;
                else if ($value->Type == "simple") $this->type_s++;
            }
        }
       echo "</table>";
       echo  "<br> Configurable: {$this->type_c}";
       echo  "<br> Simple: {$this->type_s}";
   }

    public function get_range_price(int $condition1,int $condition2){
        echo "<table border = '1'>";
        echo "<tr>
        <th>ID</th>
        <th>img</th>
        <th>Имя</th>
        <th>Тип</th>
        <th>Атриб.</th>
        <th>SKU</th>
        <th>Цена</th>
        <th>Кол-во</th>
        <th>Вид</th>
        <th>Статус</th>
        <th>Web</th>
        <th>Действие</th>
        </tr>
        ";
        $this->type_c = 0;
        $this->type_s = 0;
        foreach ($this->array_entity as $value){
            if($value->Price > $condition1 && $value->Price < $condition2){ //$value->Quantity > $condition
                echo "<tr>
                <td>$value->ID</td>
                <td> <img src = '$value->Thumbnail' alt=''> </td>
                <td>$value->Name</td>
                <td>$value->Type</td>
                <td>$value->Attribute_Set</td>
                <td>$value->SKU</td>
                <td>$value->Price</td>
                <td>$value->Quantity</td>
                <td>$value->Visibility</td>
                <td>$value->Status</td>
                <td>$value->Websites</td>
                <td>$value->Action</td>
                </tr>
                ";
                if ($value->Type == "configurable") $this->type_c++;
                else if ($value->Type == "simple") $this->type_s++;
            }
        }
        echo "</table>";
        echo  "<br> Configurable: {$this->type_c}";
        echo  "<br> Simple: {$this->type_s}";
    }

    public function get_find_work(string $condition){
        echo "<table border = '1'>";
        echo "<tr>
        <th>ID</th>
        <th>img</th>
        <th>Имя</th>
        <th>Тип</th>
        <th>Атриб.</th>
        <th>SKU</th>
        <th>Цена</th>
        <th>Кол-во</th>
        <th>Вид</th>
        <th>Статус</th>
        <th>Web</th>
        <th>Действие</th>
        </tr>
        ";
        $this->type_c = 0;
        $this->type_s = 0;
        foreach ($this->array_entity as $value){
            $find = strripos ($value->Name, $condition);
            if($find){
                echo "<tr>
                <td>$value->ID</td>
                <td> <img src = '$value->Thumbnail' alt=''> </td>
                <td>$value->Name</td>
                <td>$value->Type</td>
                <td>$value->Attribute_Set</td>
                <td>$value->SKU</td>
                <td>$value->Price</td>
                <td>$value->Quantity</td>
                <td>$value->Visibility</td>
                <td>$value->Status</td>
                <td>$value->Websites</td>
                <td>$value->Action</td>
                </tr>
                ";
                if ($value->Type == "configurable") $this->type_c++;
                else if ($value->Type == "simple") $this->type_s++;
            }

        }
        echo "</table>";
        echo  "<br> Configurable: {$this->type_c}";
        echo  "<br> Simple: {$this->type_s}";

    }
}