<?php



class Post
{
    private static $blog_posts = [
        [
            'judul' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'nama' => 'Futma Nurhidayat',
            'isi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia dicta ducimus quasi maiores unde sit nulla perspiciatis dolorum, ratione exercitationem, natus labore explicabo pariatur. Ratione vitae, nemo ipsam asperiores dignissimos nihil recusandae inventore distinctio consectetur, magnam et iure corrupti dolorum quaerat jmolestiae maiores assumenda amet natus perferendis. Perferendis non illo praesentium impedit officia, eos voluptatem beatae! Culpa maxime natus quam architecto ipsa, praesentium voluptates harum debitis provident distinctio, necessitatibus vitae sunt iste, delectus quas sequi eligendi fugiat voluptas repellendus voluptatibus.',
            
        ],
        [
            'judul' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'nama' => 'Aleck sam',
            'isi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia dicta ducimus quasi maiores unde sit nulla perspiciatis dolorum, ratione exercitationem, natus labore explicabo pariatur. Ratione vitae, nemo ipsam asperiores dignissimos nihil recusandae inventore distinctio consectetur, magnam et iure corrupti dolorum quaerat molestiae maiores assumenda amet natus perferendis. Perferendis non illo praesentium impedit officia, eos voluptatem beatae! Culpa maxime natus quam architecto ipsa, praesentium voluptates harum debitis provident distinctio, necessitatibus vitae sunt iste, delectus quas sequi eligendi fugiat voluptas repellendus voluptatibus.'
        ],
        [
            'judul' => 'Judul Post Ketiga',
            "slug" => 'judul-post-ketiga',
            'nama' => 'Wilson lo siento',
            'isi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia dicta ducimus quasi maiores unde sit nulla perspiciatis dolorum, ratione exercitationem, natus labore explicabo pariatur. Ratione vitae, nemo ipsam asperiores dignissimos nihil recusandae inventore distinctio consectetur, magnam et iure corrupti dolorum quaerat molestiae maiores assumenda amet natus perferendis. Perferendis non illo praesentium impedit officia, eos voluptatem beatae! Culpa maxime natus quam architecto ipsa, praesentium voluptates harum debitis provident distinctio, necessitatibus vitae sunt iste, delectus quas sequi eligendi fugiat voluptas repellendus voluptatibus.'
        ]
        ];


        public static function all(){

            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);

        }
}
