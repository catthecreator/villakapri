<?php 
class Cms611b7ae589b7d612392920_0df68ec6bb38d2731038b79933e03c43Class extends Cms\Classes\PartialCode
{
public function onStart()
{
    $this['categories'] = collect();
    $this['categories']->put('dupleksy', 'Дуплексы');
    $this['categories']->put('osobnyaki', 'Особняки');
    $this['categories']->put('flethausy', "Флэтхаусы");
}
}
