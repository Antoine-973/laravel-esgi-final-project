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
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
            ],
            [
                'title' => "Achat",
                'description' => "Je le voudrais dans mon équipe pour le ménage"
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
        ];
        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je le voudrais dans mon équipe pour le ménage";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Remboursement";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Il a essayé de me tuer";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je le voudrais dans mon équipe pour des combats clandestins";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je le voudrais dans mon équipe pour des combats clandestins";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je le voudrais dans mon équipe pour le ménage";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je le voudrais dans mon équipe pour des combats clandestins";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Question qualité";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Peut-il me rendre heureux ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Renvoie du Pokémon";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Moi chui desu et pense renvoyer mon Pokémon, il es laid et ptit, ya un souci là.";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Renvoie du Pokémon";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Moi chui desu et pense renvoyer mon Pokémon, il es laid et ptit, ya un souci là.";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Renvoie du Pokémon";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Moi chui desu et pense renvoyer mon Pokémon, il es laid et ptit, ya un souci là.";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Renvoie du Pokémon";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Moi chui desu et pense renvoyer mon Pokémon, il es laid et ptit, ya un souci là.";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Déçu";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Tête et corps légèrement disproportionné voir « écrasé ». Si j’avais su, j’aurais choisis un autre modèle";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Excellent";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Excellent";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Excellent";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Excellent";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Excellent";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Excellent";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Excellent";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Excellent";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Excellent";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Excellent";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je suis très satisfaite de mon achat, ce petit Pokémon tout doux peut être un merveilleux cadeau";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Trop chere";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Prix trop élevé pour un simple Pokemon";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Trop chere";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Prix trop élevé pour un simple Pokemon";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Trop chere";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Prix trop élevé pour un simple Pokemon";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Trop chere";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Prix trop élevé pour un simple Pokemon";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Je le prend";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je le veux";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je voudrais l'acheter";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je voudrais l'acheter";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Nourriture";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Il mange beeaucoup ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je voudrais l'acheter";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je voudrais l'acheter";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je voudrais l'acheter";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je voudrais l'acheter";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je voudrais l'acheter";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Achat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Je voudrais l'acheter";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Problem";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago.";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Problem";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago.";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Problem";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago.";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Problem";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago.";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Problem";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago.ter";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Problem";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "When I bought this, I was expecting it to be the same solidity and quality as the previous ones I have purchased a year or so ago.";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "What a disappointment...";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Was not expecting this poor quality for the money I paid! ";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "What a disappointment...";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Was not expecting this poor quality for the money I paid! ";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "What a disappointment...";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Was not expecting this poor quality for the money I paid! ";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "What a disappointment...";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Was not expecting this poor quality for the money I paid!";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "What a disappointment...";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Was not expecting this poor quality for the money I paid! ";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "What a disappointment...";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Was not expecting this poor quality for the money I paid! ";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "What a disappointment...";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Was not expecting this poor quality for the money I paid! ";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Beau produit mais ne résiste pas à l’envoi .";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Le produit est joli es à l’air super mais malheureusement comme beaucoup est arrivé cassé malgré un emballage en bon état .";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Beau produit mais ne résiste pas à l’envoi .";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Le produit est joli es à l’air super mais malheureusement comme beaucoup est arrivé cassé malgré un emballage en bon état .";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Beau produit mais ne résiste pas à l’envoi .";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Le produit est joli es à l’air super mais malheureusement comme beaucoup est arrivé cassé malgré un emballage en bon état .";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Beau produit mais ne résiste pas à l’envoi .";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Le produit est joli es à l’air super mais malheureusement comme beaucoup est arrivé cassé malgré un emballage en bon état .";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "I love it";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Love this, colour matches my house perfectly";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "I love it";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Love this, colour matches my house perfectly";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "I love it";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Love this, colour matches my house perfectly";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "I love it";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Love this, colour matches my house perfectly";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "I love it";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Love this, colour matches my house perfectly";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "I love it";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Love this, colour matches my house perfectly";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "I love it";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Love this, colour matches my house perfectly";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "I love it";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Love this, colour matches my house perfectly";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

        $comment = new Comment();
        $comment->title = "Combat";
        $comment->slug = $slugify->slugify($comment->title);
        $comment->description = "Sait-il se battre à mort ?";
        $comment->product_id = Product::all()->random(1)->first()->id;
        $comment->user_id = User::all()->random(1)->first()->id;
        $comment->save();

    }
}
