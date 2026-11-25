<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   public $posts = [
        ['id' => 1, 'title' => 'Oppenheimer', 'category' => 'Drammatico', 'rating' => 9, 'excerpt' => 'Nolan racconta il padre della bomba atomica con una regia magistrale.', 'review' => "Christopher Nolan firma un biopic monumentale su J. Robert Oppenheimer, il fisico che guidò il Progetto Manhattan. Il film alterna colore e bianco e nero, intrecciando la corsa alla bomba atomica con le conseguenze morali e politiche che ne seguirono. Cillian Murphy offre un'interpretazione intensa e tormentata, sostenuta da un cast corale impeccabile. Tre ore dense, che pongono una domanda scomoda: fin dove può spingersi la scienza?"],
        ['id' => 2, 'title' => 'Dune: Parte Due', 'category' => 'Fantascienza', 'rating' => 9, 'excerpt' => 'Un\'epopea visiva che supera il primo capitolo.', 'review' => "Denis Villeneuve porta a compimento l'adattamento del romanzo di Frank Herbert con un'epopea visivamente spettacolare. Paul Atreides si unisce ai Fremen e il film esplora potere, fede e destino con un ritmo più incalzante del primo capitolo. Fotografia, scenografie e colonna sonora di Hans Zimmer creano un'esperienza da vedere assolutamente sul grande schermo. Un seguito che supera il predecessore."],
        ['id' => 3, 'title' => 'Parasite', 'category' => 'Thriller', 'rating' => 10, 'excerpt' => 'Una satira sociale che mescola umorismo nero e tensione.', 'review' => "Bong Joon-ho costruisce una satira sociale feroce e imprevedibile sul divario tra ricchi e poveri. La famiglia Kim si infiltra poco alla volta nella vita dei facoltosi Park, tra umorismo nero e tensione crescente, fino a una svolta che lascia senza fiato. Regia millimetrica e simbolismo negli spazi (scale, finestre, semi-interrato). Vincitore dell'Oscar come miglior film, è un classico moderno."],
        ['id' => 4, 'title' => 'La La Land', 'category' => 'Musical', 'rating' => 8, 'excerpt' => 'Una storia d\'amore e di sogni con una colonna sonora indimenticabile.', 'review' => "Damien Chazelle racconta l'amore tra Mia, aspirante attrice, e Sebastian, pianista jazz, in una Los Angeles piena di colori e musica. Emma Stone e Ryan Gosling hanno una chimica irresistibile, e le canzoni (City of Stars su tutte) restano in testa. Dietro la patina da sogno c'è un film agrodolce sul prezzo delle ambizioni, con un finale indimenticabile."],
    ];

    public function welcome() {
    
    return view('welcome', ["all_posts" => $this->posts]);
}

public function detail($id){
     
foreach($this->posts as $post){
    if($post['id'] == $id){
        return view('detail-page', ["post" => $post]);
    }
}
}
}

