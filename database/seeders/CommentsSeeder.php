<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Comment;
use Cocur\Slugify\Slugify;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugify = new Slugify();

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

    }
}
