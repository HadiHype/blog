<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class PostTrial
{
    public $title;
    public $excerpt;
    public  $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function find($slug) {
        $posts = static::all()->firstWhere('slug', $slug);

        return $posts;
    }

    public static function findOrFail($slug) {
        $posts = static::all()->firstWhere('slug', $slug);

        if (!$posts)
            throw new ModelNotFoundException();

        return $posts;

    }

    public static function all() {

        return cache()->rememberForever('posts.all', function() {
            return collect(File::files(resource_path("posts/")))
                ->map(fn($file) => $document = YamlFrontMatter::parseFile($file))
                ->map(fn ($document) => new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug,
                ))->sortByDesc('date');
        });

    }
}
