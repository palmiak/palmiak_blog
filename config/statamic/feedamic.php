<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    |
    | Ability to define Atom and RSS feed routes.
    |
    | The key is the feed type, and the value is the route.
    |
    | By default, an atom and RSS 2.0 feed will be generated.
    |
    | Remove from the array to disable a specific feed type.
    |
    */

    'routes' => [
        'atom' => '/feed/atom',
        'rss'  => '/feed'
    ],


    /*
    |--------------------------------------------------------------------------
    | Collections
    |--------------------------------------------------------------------------
    |
    | An array of collections to include in the feed.
    |
    */

    'collections' => [
        'posts'
    ],


    /*
    |--------------------------------------------------------------------------
    | Cache Key
    |--------------------------------------------------------------------------
    |
    | The base cache key for output. Will be cached forever until EventSaved is fired.
    |
    */

    'cache' => 'statamic-xml-sitemap',


    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The title for the feed
    |
    */

    'title' => 'Maciek Palmowski blog',


    /*
    |--------------------------------------------------------------------------
    | Description
    |--------------------------------------------------------------------------
    |
    | The description (RSS) or subtitle (Atom) for the feed
    |
    */

    'description' => 'My small little blog about WordPress, CI/CD, and Technology',


    /*
    |--------------------------------------------------------------------------
    | Summary
    |--------------------------------------------------------------------------
    |
    | A list of blueprint fields to look at to try to build the "summary" for the feed.
    |
    | This is ordered - the first field will be looked first, then the second, etc.
    |
    | When content is found, it will be used, and other fields will be ignored.
    |
    */

    'summary' => [
        'intro',
    ],


    /*
    |--------------------------------------------------------------------------
    | Image
    |--------------------------------------------------------------------------
    |
    | Configuration options for the image to be injected in to the "summary" for the entry.
    |
    | This only applies when Summary is being used.
    |
    | The Fields behave like summary - a cascading list of image fields to look at. You can specify the width
    | and height too to use for the image generation. If omitted, will be 1280 x 720.
    |
    | Disable this by setting to false.
    |
    */

    'image' => [
        'fields' => [
            'thumbnail',
        ],
        'width'  => 1280,
        'height' => 720
    ],


    /*
    |--------------------------------------------------------------------------
    | Author
    |--------------------------------------------------------------------------
    |
    | Sets the lookup of an author field.
    |
    | Set to "false" to disable looking for author details.
    |
    | If used,
    |   "handle" defines the blueprint reference to the author, a Statamic user
    |   "email", when true, will output the <email> for atom feeds
    |   "name", a pattern to use to build the name output
    |
    | For "name", each handle is in square brackets, and is used to concatenate fields if you are using
    | or want to customise the name output. For example, "[name_first] [name_last]" would pick "name_first"
    | and "name_last" from the User.
    |
    */

    'author' => [
        'handle' => 'author',

        // true to include the email in the feed, false to exclude - atom only
        'email'  => false,

        // the name pattern to use for the author name
        'name'   => 'name',
    ],


    /*
    |--------------------------------------------------------------------------
    | Copyright
    |--------------------------------------------------------------------------
    |
    | A string to output to the <copyright> (RSS) or <rights> (Atom) feed.
    |
    | False will exclude this element.
    |
    */

    'copyright' => false,


    /*
    |--------------------------------------------------------------------------
    | Language
    |--------------------------------------------------------------------------
    |
    | Marks the feed as being in a specific language.
    |
    | As Atom, using xml:lang, can use more language definitions than the RSS specification, refer to the
    | RSS specification for suitable codes:
    |   https://www.rssboard.org/rss-language-codes
    |
    */

    'language' => 'en'
];
