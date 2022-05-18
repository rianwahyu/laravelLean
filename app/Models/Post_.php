<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => " Rian",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eligendi provident placeat sequi non quae quam ea obcaecati vel corrupti! Soluta, quam eaque. Deleniti aliquid ea voluptatum eaque. Atque deserunt praesentium debitis, cumque minima earum accusamus labore tempora inventore, recusandae quam consequatur cupiditate eos sunt dolorem rem! Error, temporibus aut. Nihil tempora illo at facilis molestiae recusandae temporibus sequi aut labore itaque cum facere corporis, mollitia veritatis, optio quam autem! Odio, nobis tenetur deserunt non eaque consequatur laudantium optio at."
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Dodit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium natus eius quis? Quisquam fuga debitis modi fugit, nam nobis inventore nesciunt vitae iure culpa. Quibusdam nulla deserunt debitis aperiam at eaque fugiat rerum est veniam temporibus delectus, porro sequi quis eveniet! Animi sint quaerat accusantium tempora corporis nobis expedita nulla sit deleniti voluptate eum, dolores eaque iste laborum doloribus? Cupiditate repellendus dolores accusamus est unde officia sequi iure cumque magnam, amet pariatur debitis doloremque a vel id odit mollitia dignissimos similique omnis excepturi provident minima nesciunt distinctio exercitationem. Qui cum ut quod soluta voluptatibus reiciendis tempora ab totam? Quod, quia."
        ],
    ];

    public static function all()
    {
        // return self::$blog_posts;
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        //$posts = self::$blog_posts;
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     } 
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
