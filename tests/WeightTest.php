<?php


use MHT\MyanmarNum\MyanmarNumClass;

it('can test', function () {
    $pounds = MyanmarNumClass::kilograms(100)->toPound();
    expect($pounds)->toEqual(220.46);
});
