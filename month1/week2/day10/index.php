<?php 
class Playlist{
    public function __construct(public $name, public array $song){
        //
    }
}
class Song{
    public function __construct(public string $name, public string $array){
        // 
    }
}

$songs = [
    new Song('My heart will go on', 'Celina Gomez'),
    new Song('My heart will go on', 'Celina Gomez'),
];

$playlists = new Playlist("90s movie song", $songs);
var_dump($playlists->song);