<?php

class PlayMusic
{
    public function play(MusicInterface $music): string
    {
        return $music->playInstrument();
    }
}
