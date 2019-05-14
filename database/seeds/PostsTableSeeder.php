<?php

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $author1 = App\User::create([
            'name' => 'John Smith',
            'email' => 'smith@test.com',
            'password' => Hash::make('password')
        ]);

        $author2 = App\User::create([
            'name' => 'Rob Zobrist',
            'email' => 'zobrist@test.com',
            'password' => Hash::make('password')
        ]);

        $category1 = Category::create([
            'name' => 'News'
        ]);

        $category2 = Category::create([
            'name' => 'Weather'
        ]);

        $category3 = Category::create([
            'name' => 'Business'
        ]);

        $category4 = Category::create([
            'name' => 'Sports'
        ]);

        $category5 = Category::create([
            'name' => 'Travel'
        ]);

        $post1 = $author2->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'content' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg'

        ]);

        $post2 = $author1->posts()->create([
            'title' => 'This is why it is time to ditch dress codes at work',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'content' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.',
            'category_id' => $category3->id,
            'image' => 'posts/2.jpg'
        ]);

        $post3 = $author2->posts()->create([
            'title' => 'Weather in London exceedingly hot',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'content' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.',
            'category_id' => $category2->id,
            'image' => 'posts/3.jpg'
        ]);

        $post4 = $author1->posts()->create([
            'title' => 'Let us go to Milan',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'content' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.',
            'category_id' => $category5->id,
            'image' => 'posts/4.jpg'
        ]);

        $tag1 = Tag::create([
            'name' => 'basketball'
        ]);

        $tag2 = Tag::create([
            'name' => 'soccer'
        ]);

        $tag3 = Tag::create([
            'name' => 'job'
        ]);

        $tag4 = Tag::create([
            'name' => 'leisure'
        ]);

        $tag5 = Tag::create([
            'name' => 'summer'
        ]);

        $tag6 = Tag::create([
            'name' => 'business'
        ]);

        $post1->tags()->attach([$tag3->id, $tag6->id]);

        $post2->tags()->attach([$tag6->id]);

        $post3->tags()->attach([$tag5->id]);

        $post4->tags()->attach([$tag4->id, $tag5->id]);

    }
}
