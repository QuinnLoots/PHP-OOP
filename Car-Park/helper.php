<?php

class Car
{
    public $regNum;
    public $dateCirc;
    public $mileage;
    public $model;
    public $brand;
    public $color;
    public $weight;
    public $photoLink;

    public function __construct($regNum, $dateCirc, $mileage, $model, $brand, $color, $weight, $photoLink)
    {
        $this->regNum = $regNum;
        $this->dateCirc = $dateCirc;
        $this->mileage = $mileage;
        $this->model = $model;
        $this->brand = $brand;
        $this->color = $color;
        $this->weight = $weight;
        $this->photoLink = $photoLink;

        if ($model == 'Audi') {
            $this->reserved = 'reserved';
        } else {
            $this->reserved = 'free';
        }

        if ($weight >= 3500) {
            $this->type = 'Commercial';
        } else {
            $this->type = 'utility';
        }

        $countryCode = substr($regNum, 0, 2);
        switch ($countryCode) {
            case 'BE':
                $this->country = 'Belgium';
                break;
            case 'FR':
                $this->country = 'France';
                break;
            case 'DE':
                $this->country = 'Germany';
                break;
        }

        $this->determineUsage();
        $currentYear = date('Y');
        $this->age = ($currentYear - $dateCirc);
    }

    public function determineUsage()
    {
        if ($this->mileage >= 100000) {
            $this->usage = 'high';
        } else {
            $this->usage = 'low';
        }
    }

    public function drive()
    {
        $this->mileage = $this->mileage + 100000;
        $this->determineUsage();
    }

    public function showData()
    {
        echo '<table border="1">'.'<tr>
        <th>Reg num</th>
        <th>Circ Date</th> 
        <th>Mileage</th>
        <th>Model</th>
        <th>Brand</th>
        <th>Color</th>
        <th>Weight</th>
        <th>Type</th>
        <th>Country</th>
        <th>Age</th>
        <th>Usage</th>
        <th>Reserved</th>
        <th>Photo</th>
      </tr>
      <tr>
        <td>'.$this->regNum.'</td>
        <td>'.$this->dateCirc.'</td>
        <td>'.$this->mileage.'</td>
        <td>'.$this->model.'</td>
        <td>'.$this->brand.'</td>
        <td>'.$this->color.'</td>
        <td>'.$this->weight.'</td>
        <td>'.$this->type.'</td>
        <td>'.$this->country.'</td>
        <td>'.$this->age.'</td>
        <td>'.$this->usage.'</td>
        <td>'.$this->reserved.'</td>
        <td><img src="'.$this->photoLink.'"style="width:500px;"></td>
        

      </tr>'.'</table>';
    }
}
