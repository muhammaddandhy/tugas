<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Nafik Uddin',
        //     'email' => 'nafikuddin37@gmail.com',
        //     'password' => bcrypt('admin123')
        // ]);

        // User::create([
        //     'name' => 'Khoirul Annas',
        //     'email' => 'aanka123@gmail.com',
        //     'password' => bcrypt('admin456')
        // ]);

        User::factory(10)->create();


        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing',
        ]);

        Category::create([
            'name' => 'Web Desaign',
            'slug' => 'web-desaign',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        post::factory(20)->create();

//         post::create([
//             'title' => 'Judul Pertama',
//             'slug' => 'judul-pertama',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
//             'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis non iusto facilis mollitia ab doloribus dolorum cum autem modi, libero cupiditate amet asperiores quos? Quibusdam impedit deleniti earum culpa ullam similique veritatis reiciendis hic est laborum? Recusandae dolorum quas rem tempora ut ipsam itaque voluptatum iusto iste, a, repellendus eligendi?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque corrupti, suscipit et culpa amet cum delectus aut sint placeat laudantium iste recusandae earum unde tenetur. Quibusdam illum sint sed hic beatae dicta sequi tenetur dolore ullam, aperiam cumque quos ut autem illo quas doloribus iure, placeat sapiente delectus temporibus! Quasi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quasi ab rerum, maxime necessitatibus nostrum totam assumenda odit magnam odio suscipit laudantium temporibus architecto blanditiis aliquam, alias nesciunt esse laboriosam facilis asperiores eaque! Itaque voluptas error quis voluptate maiores inventore, soluta ducimus rerum quos, laborum facilis. Veritatis accusamus placeat corrupti!</p>
// ',
//             'category_id' => 1,
//             'user_id' => 1
//         ]);

//         post::create([
//             'title' => 'Judul Kedua',
//             'slug' => 'judul-kedua',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
//             'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis non iusto facilis mollitia ab doloribus dolorum cum autem modi, libero cupiditate amet asperiores quos? Quibusdam impedit deleniti earum culpa ullam similique veritatis reiciendis hic est laborum? Recusandae dolorum quas rem tempora ut ipsam itaque voluptatum iusto iste, a, repellendus eligendi?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque corrupti, suscipit et culpa amet cum delectus aut sint placeat laudantium iste recusandae earum unde tenetur. Quibusdam illum sint sed hic beatae dicta sequi tenetur dolore ullam, aperiam cumque quos ut autem illo quas doloribus iure, placeat sapiente delectus temporibus! Quasi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quasi ab rerum, maxime necessitatibus nostrum totam assumenda odit magnam odio suscipit laudantium temporibus architecto blanditiis aliquam, alias nesciunt esse laboriosam facilis asperiores eaque! Itaque voluptas error quis voluptate maiores inventore, soluta ducimus rerum quos, laborum facilis. Veritatis accusamus placeat corrupti!</p>
// ',
//             'category_id' => 1,
//             'user_id' => 1
//         ]);

//         post::create([
//             'title' => 'Judul Ketiga',
//             'slug' => 'judul-ketiga',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
//             'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis non iusto facilis mollitia ab doloribus dolorum cum autem modi, libero cupiditate amet asperiores quos? Quibusdam impedit deleniti earum culpa ullam similique veritatis reiciendis hic est laborum? Recusandae dolorum quas rem tempora ut ipsam itaque voluptatum iusto iste, a, repellendus eligendi?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque corrupti, suscipit et culpa amet cum delectus aut sint placeat laudantium iste recusandae earum unde tenetur. Quibusdam illum sint sed hic beatae dicta sequi tenetur dolore ullam, aperiam cumque quos ut autem illo quas doloribus iure, placeat sapiente delectus temporibus! Quasi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quasi ab rerum, maxime necessitatibus nostrum totam assumenda odit magnam odio suscipit laudantium temporibus architecto blanditiis aliquam, alias nesciunt esse laboriosam facilis asperiores eaque! Itaque voluptas error quis voluptate maiores inventore, soluta ducimus rerum quos, laborum facilis. Veritatis accusamus placeat corrupti!</p>
// ',
//             'category_id' => 2,
//             'user_id' => 1
//         ]);

//         post::create([
//             'title' => 'Judul Keempat',
//             'slug' => 'judul-keempat',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
//             'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis non iusto facilis mollitia ab doloribus dolorum cum autem modi, libero cupiditate amet asperiores quos? Quibusdam impedit deleniti earum culpa ullam similique veritatis reiciendis hic est laborum? Recusandae dolorum quas rem tempora ut ipsam itaque voluptatum iusto iste, a, repellendus eligendi?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque corrupti, suscipit et culpa amet cum delectus aut sint placeat laudantium iste recusandae earum unde tenetur. Quibusdam illum sint sed hic beatae dicta sequi tenetur dolore ullam, aperiam cumque quos ut autem illo quas doloribus iure, placeat sapiente delectus temporibus! Quasi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quasi ab rerum, maxime necessitatibus nostrum totam assumenda odit magnam odio suscipit laudantium temporibus architecto blanditiis aliquam, alias nesciunt esse laboriosam facilis asperiores eaque! Itaque voluptas error quis voluptate maiores inventore, soluta ducimus rerum quos, laborum facilis. Veritatis accusamus placeat corrupti!</p>
// ',
//             'category_id' => 2,
//             'user_id' => 2
//         ]);
    }
}
