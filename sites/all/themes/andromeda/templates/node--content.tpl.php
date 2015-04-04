<?php
    dpm($content);

    $type = $content['field_type']['#items'][0]['value'];
    $user = user_load($node->uid);

    $comments = render($content['comments']);
    $body = $content['body']['#items'][0]['value'];
    $image =  '/sites/default/files/field/image/' .  $content['field_image']['#items'][0]['filename'];
    $video = $content['field_video_embed']['#items'][0]['value'];
    $output = '';


    switch ($type){
        case 'video':
            $output = '<div class="videoWrapper">' .  $video . '</div>' . $body;
            break;
        case 'review':
            echo 'This is a review type dawg';
            $output = $body;
            break;
        case 'podcast':
            $output = $body;
            break;
        case 'article':
            $output = $body;
            break;
    }


    if ($submitted) {
         echo "<div class='submitted'><i>Posted: " . date( "F j, Y",$node->created) . ' by <span style="color: #cc0000">' . $user->name . '</span></i></div>';
    }
    echo $output;
    echo $comments;





