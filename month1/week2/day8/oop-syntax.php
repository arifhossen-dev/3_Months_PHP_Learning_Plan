<?php

class Playlist
{
    public $name;
    public $song;

    public function __construct($name, $song)
    {
        $this->name = $name;
        $this->song = $song;
    }
    public function shuffle(){
        shuffle($this->song);
    }
}

// $playlists = [];
$playlists = new Playlist("80s Headbangers", [
    'Back in black',
    'Are you ready',
    'Hells and Bells',
    'Highway to Hell'
]);
$playlists->shuffle();

// $playlists[] = new Playlist("James");
// $playlists[] = new Playlist("Alan-walker");
var_dump($playlists);
// $playlist->name = "Avash 21";
// echo $playlist->name;