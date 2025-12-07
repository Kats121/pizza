<?php
namespace PizzaLib;

class Pepperoni extends Pizza {
    public function __construct() {
        parent::__construct('Пепперони', 'томатный соус', ['сыр', 'колбаса']);
    }
}