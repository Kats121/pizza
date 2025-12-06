<?php
namespace PizzaLib;

class MargaritaPizza extends Pizza {
    public function __construct() {
        parent::__construct('Маргарита', 'томатный соус', ['сыр']);
    }
}