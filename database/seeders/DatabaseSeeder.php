<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        /* User::create([
            'name' => 'Rian Wahyu',
            'email' => 'rianwahyu26@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Yusliana Gadis',
            'email' => 'yuslianagadis@gmail.com',
            'password' => bcrypt('12345')
        ]); */


        Category::create([
            'name' => 'Web Programming',
            'slug' =>'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' =>'personal'
        ]);


        Post::factory(20)->create();

        /* Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae qui exercitationem inventore nulla placeat expedita',
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae qui exercitationem inventore nulla placeat expedita corporis soluta labore itaque facilis illum aliquid incidunt, aperiam officia minima velit quisquam fugit deserunt adipisci quis, corrupti obcaecati. Voluptatum, perspiciatis recusandae illum, nobis iure deserunt culpa ut mollitia quas dolore eligendi nulla quis sapiente omnis repellendus quia provident. Facere minus natus praesentium hic vitae expedita nostrum, consectetur incidunt, laborum cum ipsum impedit quasi iusto ipsam, voluptate voluptates. Ad molestias tempora eligendi. Consequuntur sapiente temporibus error, quibusdam distinctio quia dolor eius tenetur molestiae inventore alias reprehenderit quam cumque necessitatibus sequi porro magnam laboriosam qui excepturi.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae qui exercitationem inventore nulla placeat expedita',
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae qui exercitationem inventore nulla placeat expedita corporis soluta labore itaque facilis illum aliquid incidunt, aperiam officia minima velit quisquam fugit deserunt adipisci quis, corrupti obcaecati. Voluptatum, perspiciatis recusandae illum, nobis iure deserunt culpa ut mollitia quas dolore eligendi nulla quis sapiente omnis repellendus quia provident. Facere minus natus praesentium hic vitae expedita nostrum, consectetur incidunt, laborum cum ipsum impedit quasi iusto ipsam, voluptate voluptates. Ad molestias tempora eligendi. Consequuntur sapiente temporibus error, quibusdam distinctio quia dolor eius tenetur molestiae inventore alias reprehenderit quam cumque necessitatibus sequi porro magnam laboriosam qui excepturi.',
            'category_id' => 1,
            'user_id' => 1,
        ]);


        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae qui exercitationem inventore nulla placeat expedita',
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae qui exercitationem inventore nulla placeat expedita corporis soluta labore itaque facilis illum aliquid incidunt, aperiam officia minima velit quisquam fugit deserunt adipisci quis, corrupti obcaecati. Voluptatum, perspiciatis recusandae illum, nobis iure deserunt culpa ut mollitia quas dolore eligendi nulla quis sapiente omnis repellendus quia provident. Facere minus natus praesentium hic vitae expedita nostrum, consectetur incidunt, laborum cum ipsum impedit quasi iusto ipsam, voluptate voluptates. Ad molestias tempora eligendi. Consequuntur sapiente temporibus error, quibusdam distinctio quia dolor eius tenetur molestiae inventore alias reprehenderit quam cumque necessitatibus sequi porro magnam laboriosam qui excepturi.',
            'category_id' => 2,
            'user_id' => 1,
        ]);


        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae qui exercitationem inventore nulla placeat expedita',
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae qui exercitationem inventore nulla placeat expedita corporis soluta labore itaque facilis illum aliquid incidunt, aperiam officia minima velit quisquam fugit deserunt adipisci quis, corrupti obcaecati. Voluptatum, perspiciatis recusandae illum, nobis iure deserunt culpa ut mollitia quas dolore eligendi nulla quis sapiente omnis repellendus quia provident. Facere minus natus praesentium hic vitae expedita nostrum, consectetur incidunt, laborum cum ipsum impedit quasi iusto ipsam, voluptate voluptates. Ad molestias tempora eligendi. Consequuntur sapiente temporibus error, quibusdam distinctio quia dolor eius tenetur molestiae inventore alias reprehenderit quam cumque necessitatibus sequi porro magnam laboriosam qui excepturi.',
            'category_id' => 2,
            'user_id' => 2,
        ]); */
    }

}
