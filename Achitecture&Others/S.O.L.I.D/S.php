<?php

/**
 * SRP = Single Responsibility Principle
 * 
 * This principle says that a class just have one responsibility, 
 * and one reason to change (this also correspond for functions and methods).
 * 
 * The first example shows the wrong way to create classes and
 * in the second example it shows how to do it correctly.
 * 
 * Google Definition:
 * 
 * “A class should have only one reason to change.” Every module or class should have responsibility
 * over a single part of the functionality provided by the software, and that responsibility should be entirely encapsulated by the class.
*/

# First Example
class OrderEX 
{
    public function calculateTotalSumEX() {/*...*/}
    public function getItemsEX() {/*...*/}
    public function getItemCountEX() {/*...*/}
    public function addItemEX($itemEX) {/*...*/}
    public function deleteItemEX($itemEX) {/*...*/}

    public function printOrderEX() {/*...*/}
    public function showOrderEX() {/*...*/}

    public function loadEX() {/*...*/}
    public function saveEX() {/*...*/}
    public function updateEX() {/*...*/}
    public function deleteEX() {/*...*/}
}

# Second Example
class Order
{
    public function calculateTotalSum() {/*...*/}
    public function getItems() {/*...*/}
    public function getItemCount() {/*...*/}
    public function addItem($item) {/*...*/}
    public function deleteItem($item) {/*...*/}
}

class OrderViewer
{
    public function printOrder() {/*...*/}
    public function showOrder() {/*...*/}
}

class OrderRepository
{
    public function load() {/*...*/}
    public function save() {/*...*/}
    public function update() {/*...*/}
    public function delete() {/*...*/}
}