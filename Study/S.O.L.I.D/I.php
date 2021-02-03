<?php

/**
 * ISP = Integration Segregation Principle
 * 
 * This principle says that a class
 * should not be required to implement
 * interfaces and methods that will not be used.
 * 
 * Following the same patten as OCP and SPR.
 * 
 * Google Definition
 * 
 * In the field of software engineering, the interface-segregation principle (ISP)
 * states that no client should be forced to depend on methods it does not use. ... 
 * ISP is one of the five SOLID principles of object-oriented design, similar to the High Cohesion Principle of GRASP.
*/

# First Example
interface BirdsEX
{
    public function setPositionEX(float $longitudeEX, float $latitudeEX);
    public function setAltitudeEX(float $altitudeEX);
    public function renderEX();
}

class ParrotEX implements BirdsEX
{
    public function setPositionEX(float $longitudeEX, float $latitudeEX) {/*...*/}

    public function setAltitudeEX(float $altitudeEX) {/*...*/}

    public function renderEX() {/*...*/}
}

class PenguinsEX implements BirdsEX
{
    public function setPositionEX(float $longitudeEX, float $latitudeEX) {/*...*/}

    public function setAltitudeEX(float|int $altitudeEX) {
        // nothing ... Penguins don't fly
    }

    public function renderEX() {/*...*/}
}

# Second Example
interface Birds
{
    public function setPosition(float $longitude, float $latitude);
    public function render();
}

interface FlyingBirds extends Birds
{
    public function setAltitude(float|int $altitude);
}

class Parrot implements FlyingBirds
{
    public function setPosition(float $longitude, float $latitude) {/*...*/}
    public function setAltitude(float|int $altitude) {/*...*/}
    public function render() {/*...*/}
}

class Penguins implements Birds
{
    public function setPosition(float $longitude, float $latitude) {/*...*/}
    public function render() {/*...*/}
}