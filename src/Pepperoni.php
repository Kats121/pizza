<?php
namespace PizzaLib;

class PepperoniPizza extends Pizza {
    public function __construct() {
        parent::__construct('Пепперони', 'томатный соус', ['сыр', 'колбаса']);
    }
}