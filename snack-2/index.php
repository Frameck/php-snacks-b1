<?php

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $keys = array_keys($posts);

    for ($i=0; $i < count($keys); $i++) {
        $date = $keys[$i];

        echo "<h2>{$date}</h2>";

        for ($j=0; $j < count($posts[$date]); $j++) {
            $post = $posts[$date][$j];
    
            echo "
                <div>
                    <span>{$post['title']}</span>
                    <br>
                    <span>Autore: {$post['author']}</span>
                    <br>
                    <span>Testo: {$post['text']}</span>
                </div>
                <br>
            ";
        };
    };


    // foreach ($posts as $key => $value) {
    //     echo "<h2>{$key}</h2>";

    //     for ($i=0; $i < count($value); $i++) {
    //         $post = $value[$i];

    //         echo "
    //             <div>
    //                 <span>{$post['title']}</span>
    //                 <br>
    //                 <span>Autore: {$post['author']}</span>
    //                 <br>
    //                 <span>Testo: {$post['text']}</span>
    //             </div>
    //             <br>
    //         "; 
    //     }
    // };

?>