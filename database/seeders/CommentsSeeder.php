<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Comment;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->getSeeds();
        foreach ($data as $item) {
            $comment = new Comment();
            $comment->title = $item['title'];
            $comment->description = $item['description'];
            $comment->product_id = Product::all()->random(1)->first()->id;
            $comment->user_id = User::all()->random(1)->first()->id;
            $comment->save();
        }
    }

    private function getSeeds()
    {
        return [
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Remboursement",
                'description' => "Il a essayé de me tuer"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour des combats clandestins"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour des combats clandestins"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour des combats clandestins"
            ],
            [
                'title' => "Question qualité",
                'description' => "Peut-il me rendre heureux ?"
            ],
            [
                'title' => "Renvoie du Pokémon",
                'description' => "Moi chui desu et pense renvoyer mon Pokémon, il es laid et ptit, ya un souci là."
            ],
            [
                'title' => "Renvoie du Pokémon",
                'description' => "Moi chui desu et pense renvoyer mon Pokémon, il es laid et ptit, ya un souci là."
            ],
            [
                'title' => "Renvoie du Pokémon",
                'description' => "Moi chui desu et pense renvoyer mon Pokémon, il es laid et ptit, ya un souci là."
                ],
            [
                'title' => "Renvoie du Pokémon",
                'description' => "Moi chui desu et pense renvoyer mon Pokémon, il es laid et ptit, ya un souci là."
            ],
            [
                'title' => "Déçu",
                'description' => "Tête et corps légèrement disproportionné voir « écrasé ». Si j’avais su, j’aurais choisis un autre modèle"
            ],
            [
                'title' => "Excellent",
                'description' => "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau"
            ],
            [
                'title' => "Excellent",
                'description' => "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau"
 ],
            [
                'title' => "Excellent",
                'description' => "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau"
            ],
            [
                'title' => "Excellent",
                'description' => "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau"
            ],
            [
                'title' => "Excellent",
                'description' => "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau"
            ],
            [
                'title' => "Excellent",
                'description' => "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau"
                ],
            [
                'title' => "Excellent",
                'description' => "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau"
                ],
            [
                'title' => "Excellent",
                'description' => "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau"
                ],
            [
                'title' => "Excellent",
                'description' => "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau"
                ],
            [
                'title' => "Excellent",
                'description' => "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau"
            ],
            [
                'title' => "Trop chere",
                'description' => "Prix trop élevé pour un simple Pokemon"
            ],
            [
                'title' => "Trop chere",
                'description' => "Prix trop élevé pour un simple Pokemon"
            ],
            [
                'title' => "Trop chere",
                'description' => "Prix trop élevé pour un simple Pokemon"
            ],
            [
                'title' => "Trop chere",
                'description' => "Prix trop élevé pour un simple Pokemon"
            ],
            [
                'title' => "Je le prend",
                'description' => "Je le veux"
            ],
            [
                'title' => "Achat",
                'description' => "Je voudrais l'acheter"
            ],
            [
                'title' => "Achat",
                'description' => "Je voudrais l'acheter"
            ],
            [
                'title' => "Nourriture",
                'description' => "Il mange beeaucoup ?"
            ],
            [
                'title' => "Achat",
                'description' => "Je voudrais l'acheter"
            ],
            [
                'title' => "Achat",
                'description' => "Je voudrais l'acheter"
            ],
            [
                'title' => "Achat",
                'description' => "Je voudrais l'acheter"
            ],
            [
                'title' => "Achat",
                'description' => "Je voudrais l'acheter"
            ],
            [
                'title' => "Achat",
                'description' => "Je voudrais l'acheter"
            ],
            [
                'title' => "Achat",
                'description' => "Je voudrais l'acheter"
            ],
            [
                'title' => "Problem",
                'description' => "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago."
            ],
            [
                'title' => "Problem",
                'description' => "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago."
            ],
            [
                'title' => "Problem",
                'description' => "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago."
            ],
            [
                'title' => "Problem",
                'description' => "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago."
            ],
            [
                'title' => "Problem",
                'description' => "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago.ter"
            ],
            [
                'title' => "Problem",
                'description' => "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago."
            ],
            [
                'title' => "What a disappointment...",
                'description' => "Was not expecting this poor quality for the money I paid! "
            ],
            [
                'title' => "What a disappointment...",
                'description' => "Was not expecting this poor quality for the money I paid! "
            ],
            [
                'title' => "What a disappointment...",
                'description' => "Was not expecting this poor quality for the money I paid! "
            ],
            [
                'title' => "What a disappointment...",
                'description' => "Was not expecting this poor quality for the money I paid!"
            ],
            [
                'title' => "What a disappointment...",
                'description' => "Was not expecting this poor quality for the money I paid! "
            ],
            [
                'title' => "What a disappointment...",
                'description' => "Was not expecting this poor quality for the money I paid! "
            ],
            [
                'title' => "What a disappointment...",
                'description' => "Was not expecting this poor quality for the money I paid! "
            ],
            [
                'title' => "Beau produit mais ne résiste pas à l’envoi .",
                'description' => "Le produit est joli es à l’air super mais malheureusement comme beaucoup est arrivé cassé malgré un emballage en bon état ."
            ],
            [
                'title' => "Beau produit mais ne résiste pas à l’envoi .",
                'description' => "Le produit est joli es à l’air super mais malheureusement comme beaucoup est arrivé cassé malgré un emballage en bon état ."
            ],
            [
                'title' => "Beau produit mais ne résiste pas à l’envoi .",
                'description' => "Le produit est joli es à l’air super mais malheureusement comme beaucoup est arrivé cassé malgré un emballage en bon état ."
            ],
            [
                'title' => "Beau produit mais ne résiste pas à l’envoi .",
                'description' => "Le produit est joli es à l’air super mais malheureusement comme beaucoup est arrivé cassé malgré un emballage en bon état ."
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
            [
                'title' => "I love it",
                'description' => "Love this, colour matches my house perfectly"
            ],
            [
                'title' => "I love it",
                'description' => "Love this, colour matches my house perfectly"
            ],
            [
                'title' => "I love it",
                'description' => "Love this, colour matches my house perfectly"
            ],
            [
                'title' => "I love it",
                'description' => "Love this, colour matches my house perfectly"
            ],
            [
                'title' => "I love it",
                'description' => "Love this, colour matches my house perfectly"
            ],
            [
                'title' => "I love it",
                'description' => "Love this, colour matches my house perfectly"
            ],
            [
                'title' => "I love it",
                'description' => "Love this, colour matches my house perfectly"
            ],
            [
                'title' => "I love it",
                'description' => "Love this, colour matches my house perfectly"
            ],
            [
                'title' => "Combat",
                'description' => "Sait-il se battre à mort ?"
            ],
        ];
    }
}
