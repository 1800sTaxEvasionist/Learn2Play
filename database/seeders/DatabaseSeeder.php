<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\RequestCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jeffry',
            'username' => 'iamjeffry',
            'email' => 'jeffry016@binus.ac.id',
            'password' => bcrypt('password')
        ]);
            
        // User::create([
        //     'name' => 'Matikanetannhauser',
        //     'username' => 'matikanetannhauser',
        //     'email' => 'matikanetannhauser@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
                
        User::factory(5)->create();
        
        Category::create([
            'name' => 'Bloodborne',
            'slug' => 'bloodborne'
        ]);
        
        Category::create([
            'name' => 'Dark Souls: REMASTERED',
            'slug' => 'dark-souls-remastered'
        ]);
        
        Category::create([
            'name' => 'Dark Souls II: Scholar of the First Sin',
            'slug' => 'dark-souls-ii-scholar-of-the-first-sin'
        ]);
        
        Category::create([
            'name' => 'Dark Souls III',
            'slug' => 'dark-souls-iii'
        ]);
        
        Category::create([
            'name' => 'Elden Ring',
            'slug' => 'elden-ring'
        ]);
        
        Category::create([
            'name' => 'Sekiro: Shadows Die Twice',
            'slug' => 'sekiro-shadows-die-twice'
        ]);

        Post::factory(50)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere illum, ratione obcaecati exercitationem necessitatibus facilis voluptates iusto neque sit deleniti ut provident aliquid autem consequuntur a expedita, assumenda quo velit earum quia porro repellat! Cupiditate, maxime porro. Ab repudiandae beatae delectus fugiat tempore magnam sunt expedita explicabo voluptatum.</p><p>Quae inventore harum fugit amet voluptatibus deleniti reprehenderit voluptates suscipit, fuga nemo adipisci recusandae, tenetur dicta ullam est, voluptatem non ipsam veniam. Dolor culpa debitis possimus inventore molestias velit saepe amet rem sed eligendi, pariatur placeat quasi, alias fugiat totam consectetur? Similique, vitae quo dolorum harum voluptatum laudantium debitis a aspernatur tempore!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere illum, ratione obcaecati exercitationem necessitatibus facilis voluptates iusto neque sit deleniti ut provident aliquid autem consequuntur a expedita, assumenda quo velit earum quia porro repellat! Cupiditate, maxime porro. Ab repudiandae beatae delectus fugiat tempore magnam sunt expedita explicabo voluptatum.</p><p>Quae inventore harum fugit amet voluptatibus deleniti reprehenderit voluptates suscipit, fuga nemo adipisci recusandae, tenetur dicta ullam est, voluptatem non ipsam veniam. Dolor culpa debitis possimus inventore molestias velit saepe amet rem sed eligendi, pariatur placeat quasi, alias fugiat totam consectetur? Similique, vitae quo dolorum harum voluptatum laudantium debitis a aspernatur tempore!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere illum, ratione obcaecati exercitationem necessitatibus facilis voluptates iusto neque sit deleniti ut provident aliquid autem consequuntur a expedita, assumenda quo velit earum quia porro repellat! Cupiditate, maxime porro. Ab repudiandae beatae delectus fugiat tempore magnam sunt expedita explicabo voluptatum.</p><p>Quae inventore harum fugit amet voluptatibus deleniti reprehenderit voluptates suscipit, fuga nemo adipisci recusandae, tenetur dicta ullam est, voluptatem non ipsam veniam. Dolor culpa debitis possimus inventore molestias velit saepe amet rem sed eligendi, pariatur placeat quasi, alias fugiat totam consectetur? Similique, vitae quo dolorum harum voluptatum laudantium debitis a aspernatur tempore!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere illum, ratione obcaecati exercitationem necessitatibus facilis voluptates iusto neque sit deleniti ut provident aliquid autem consequuntur a expedita, assumenda quo velit earum quia porro repellat! Cupiditate, maxime porro. Ab repudiandae beatae delectus fugiat tempore magnam sunt expedita explicabo voluptatum.</p><p>Quae inventore harum fugit amet voluptatibus deleniti reprehenderit voluptates suscipit, fuga nemo adipisci recusandae, tenetur dicta ullam est, voluptatem non ipsam veniam. Dolor culpa debitis possimus inventore molestias velit saepe amet rem sed eligendi, pariatur placeat quasi, alias fugiat totam consectetur? Similique, vitae quo dolorum harum voluptatum laudantium debitis a aspernatur tempore!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
