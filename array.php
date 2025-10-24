<?php

$post = [
    'post_autor' => 'epicgamer826',
    'time' => '3h',
    'content' => 'https://picsum.photos/400/500?random=1',
    'likes' => '735  likes',
    'description' => 'Hello Im uder the watter',
    'comments' => [
        ['autor' => 'John', 'content' => 'I am the first one to like, damn'],
        ['autor' => 'jirian', 'content' => 'How his probation'],
    ]
];

$post2 = [
    'post_autor' => 'nature_lila12',
    'time' => '18h',
    'content' => 'https://picsum.photos/400/500?random=2',
    'likes' => '198  likes',
    'description' => 'you so tuff twin',
    'comments' => [
        ['autor' => 'John', 'content' => 'this instagram is weird'],
        ['autor' => 'jirian', 'content' => 'Id travel around the world for turn signal'],
    ]

];

$post3 = [
    'post_autor' => 'line_lover_06',
    'time' => '13h',
    'content' => 'https://picsum.photos/400/500?random=3',
    'likes' => '1,324 likes',
    'description' => 'yesterdays photoshoot',
    'comments' => [
        ['autor' => 'John', 'content' => 'that looks awesome'],
        ['autor' => 'jirian', 'content' => 'Looking extra long today']
    ]
];


$posts = [$post, $post2, $post3];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingragram</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
foreach ($posts as $post) {
    ?>
    <div class="post">
        <div class="heading">
            <p id="post-author"><?= $post['post_autor'] ?></p>
            <p id="post-time"><?= $post['time'] ?></p>
        </div>
        <div class="content">
                <img src="<?= $post['content']?>" alt="post_content">
        </div>
        <div class="interactable">
            <p id="likes-count"><?=($post['likes'])?></p>
            <p id="post-description"><span><?=($post['post_autor'])?>:</span> <?=($post['description'])?></p>
            <h3 id="comments-heading">Comments:</h3>
            <?php foreach ($post['comments'] as $comment): ?>
                <p id="comment"><span><?= $comment['autor']?>:</span> <?= $comment['content'] ?></p>
            <?php endforeach;?>
        </div>
    </div>

    <?php
}
?>
</body>
</html>