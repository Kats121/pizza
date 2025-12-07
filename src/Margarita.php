<?php
namespace PizzaLib;

class Margarita extends Pizza {
    public function __construct() {
        parent::__construct('Маргарита', 'томатный соус', ['сыр']);
    }
}