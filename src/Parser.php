<?php


class Parser
{
    private $data_file;
    private  $name_file;
    public $array_date;

    /**
     * @return mixed
     */
    public function getArrayDate() : bool
    {
        return (boolean)($this->array_date = fgetcsv($this->data_file, 1000, ',')) ;
    }


    /**
     * Parser constructor.
     */
    public function __construct(string $name)
    {
        $this->name_file = $name.".csv";
        $this->data_file = fopen("{$this->name_file}", "r");
        if (!$this->data_file) echo "File not find";
    }


}