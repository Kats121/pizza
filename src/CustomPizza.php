<?php
namespace PizzaLib;


class CustomPizzaStore extends PizzaStore {
    protected function createPizza($type) {
        switch (strtolower($type)) {
            case 'margherita':
                return new MargaritaPizza();
            case 'pepperoni':
                return new PepperoniPizza();
        }
    }
}