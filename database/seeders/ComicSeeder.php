<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Illuminate\Support\Str;

class ComicSeeder extends Seeder
{
    public function run(): void
    {
        $comic_array = config('comics');

        foreach($comic_array as $comic) {
            $new_comic = new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->slug = $this->generateSlug($new_comic->title);
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $new_comic->save();
        }
    }

    private function generateSlug($string){


        $slug = Str::slug($string, '-');
        $original_slug = $slug;


        $exists = Comic::where('slug', $slug)->first();


        $c = 1;


        while($exists){
            $slug = $original_slug . '-' . $c;
            $exists = Comic::where('slug', $slug)->first();
            $c++;
        }

        return $slug;
    }
}
