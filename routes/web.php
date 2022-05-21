<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('home', ["title" => "Home"]);

    //return view()
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rian",
        "email" => "rianwahyu26@gmail.com",

    ]);
});



// Route::get('/blog', function () {

//     return view('posts', ["title" => "Blog", "posts" => Post::all() ]);
// });

Route::get('/blog', [PostController::class, 'index']);

//halaman single posts

// Route::get('posts/{slug}', function ($slug) {
//     /* $blog_posts = [
//         [
//             "title" => "Judul Post Pertama",
//             "slug" => "Judul-post-pertama",
//             "author" => " Rian",
//             "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eligendi provident placeat sequi non quae quam ea obcaecati vel corrupti! Soluta, quam eaque. Deleniti aliquid ea voluptatum eaque. Atque deserunt praesentium debitis, cumque minima earum accusamus labore tempora inventore, recusandae quam consequatur cupiditate eos sunt dolorem rem! Error, temporibus aut. Nihil tempora illo at facilis molestiae recusandae temporibus sequi aut labore itaque cum facere corporis, mollitia veritatis, optio quam autem! Odio, nobis tenetur deserunt non eaque consequatur laudantium optio at."
//         ],

//         [
//             "title" => "Judul Post Kedua",
//             "slug" => "Judul-post-kedua",
//             "author" => "Dodit",
//             "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium natus eius quis? Quisquam fuga debitis modi fugit, nam nobis inventore nesciunt vitae iure culpa. Quibusdam nulla deserunt debitis aperiam at eaque fugiat rerum est veniam temporibus delectus, porro sequi quis eveniet! Animi sint quaerat accusantium tempora corporis nobis expedita nulla sit deleniti voluptate eum, dolores eaque iste laborum doloribus? Cupiditate repellendus dolores accusamus est unde officia sequi iure cumque magnam, amet pariatur debitis doloremque a vel id odit mollitia dignissimos similique omnis excepturi provident minima nesciunt distinctio exercitationem. Qui cum ut quod soluta voluptatibus reiciendis tempora ab totam? Quod, quia."
//         ],
//     ]; */

//     /* $newPost = [];
//     foreach ($blog_posts as $post) {
//         if ($post["slug"] === $slug) {
//             $newPost = $post;
//         }
//     } */

//     /* return view('post', ["title" => "Single Post", "post" => $newPost]); */
//     return view('post', ["title" => "Single Post", "post" => Post::find($slug) ]);
//     return view('post', ["title" => "Single Post", "post" => Post::find($slug) ]);
// });


// Route::get('posts/{slug}', [PostController::class, 'show']);
//Route::get('posts/{post}', [PostController::class, 'show']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
