<?php


namespace App\Twig;


use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {

        return [
            new TwigFilter('checkInArray', [$this, 'checkInArray']),
        ];
    }

    public function checkInArray($arr, $val)
    {
        return in_array($val, $arr);
    }

}