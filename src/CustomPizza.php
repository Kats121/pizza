<?php
namespace PizzaLib;


class CustomPizza extends PizzaStore {
    protected function createPizza(string $type): ?Pizza {
        switch (strtolower($type)) {
            case 'margarita':
                return new MargaritaPizza();
            case 'pepperoni':
                return new PepperoniPizza();
        }
    }
}