<?php

/**
 * Interface Segregation Principle
 * Violation
 * Refactored
 */


// Violation Principle Example
interface Musician {
    public function changeStrings(): bool;
    public function readMusicSheet(): string;
    public function playInstrument(): string;
}

class Guitarist implements Musician {
    public function playInstrument(): string
    {
        return 'Play Guitar';
    }

    public function readMusicSheet(): string
    {
        return 'Do Re Mi Fa Sol';
    }

    public function changeStrings(): bool
    {
        // TODO: Implement changeStrings() method.
    }
}

class Saxophonist implements Musician {
    public function playInstrument(): string
    {
        return 'Play Saxophone';
    }

    public function readMusicSheet(): string
    {
        return 'Do Re Mi Fa Sol';
    }

    public function changeStrings(): bool
    {
        // No strings on a Saxophone
    }
}

class PlayMusic {
    public function play(Musician $musician): string
    {
        return $musician->playInstrument();
    }
}


// Refactored Version
interface Musician {
    public function readMusicSheet(): string;
    public function playInstrument(): string;
}

interface StringInstrument {
    public function changeStrings(): bool;
}

class Guitarist implements Musician, StringInstrument {
    public function playInstrument(): string
    {
        return 'Play Guitar';
    }

    public function readMusicSheet(): string
    {
        return 'Do Re Mi Fa Sol';
    }

    public function changeStrings(): bool
    {
        // TODO: Implement changeStrings() method.
    }
}

class Saxophonist implements Musician {
    public function playInstrument(): string
    {
        return 'Play Saxophone';
    }

    public function readMusicSheet(): string
    {
        return 'Do Re Mi Fa Sol';
    }
}

class PlayMusic {
    public function play(Musician $musician): string
    {
        return $musician->playInstrument();
    }
}
