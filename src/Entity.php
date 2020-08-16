<?php


declare(strict_types=1);

class Entity
{
    //12
    public $ID;
    public $Thumbnail;
    public $Name;
    public $Type;
    public $Attribute_Set;
    public $SKU;
    public $Price;
    public $Quantity;
    public $Visibility;
    public $Status;
    public $Websites;
    public $Action;
    private $img_plug;

    /**
     * @param mixed $img_plug
     */
    private function setImgPlug(): void
    {
        $this->img_plug =  urlencode ("https://lamcdn.net/lookatme.ru/post_image-image/sIaRmaFSMfrw8QJIBAa8mA-article.png");
    }
    /**
     * Entity constructor.
     */
    public function __construct(string $ID, string $Thumbnail, string $Name, string $Type, string $Attribute_Set, string $SKU, int $Price, int $Quantity,
                                string $Visibility, string $Status, string $Websites, string $Action)
    {
        $this-> ID = $ID;
        $this-> Thumbnail = $Thumbnail;
        $this-> Name = $Name;
        $this-> Type = $Type;
        $this-> Attribute_Set = $Attribute_Set;
        $this-> SKU = $SKU;
        $this-> Price = $Price;
        $this-> Quantity = $Quantity;
        $this-> Visibility = $Visibility;
        $this-> Status = $Status;
        $this-> Websites = $Websites;
        $this-> Action = $Action;
       // $this->set_img_plug();
    }

    private function set_img_plug(){                        //нерабочая ф-я
       if(!file_get_contents($this->Thumbnail)) {           //file_get_contents показывал фокусы
           $this->setImgPlug();                             //которые не фиксиились
           $this->Thumbnail = $this->img_plug;
       }
}
}