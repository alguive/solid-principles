<?php

/**
 * Open Closed Principle
 * Violation
 * Refactored
 */


// Violation Principle Example
class Guitarist {

    public function playGuitar(): string
    {
        return 'Play Guitar';
    }
}

class Saxophonist {

    public function playSaxophone(): string
    {
        return 'Play Saxophone';
    }
}

class Musician {

    public function playInstrument($musician)
    {
        if ($musician instanceof Guitarist) {
            $musician->playGuitar();
        } elseif ($musician instanceof Saxophonist) {
            $musician->playSaxophone();
        }

        throw new Exception('Invalid musician type');
    }
}


// Refactored Version
interface Musician {
    public function playInstrument(): string;
}

class Guitarist implements Musician {
    public function playInstrument(): string
    {
        return 'Play Guitar';
    }
}

class Saxophonist implements Musician {
    public function playInstrument(): string
    {
        return 'Play Saxophone';
    }
}

class PlayMusic {
    public function play(Musician $musician): string
    {
        return $musician->playInstrument();
    }
}
