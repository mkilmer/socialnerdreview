<?php
    // dpm($content);

    $type = $content['field_type']['#items'][0]['value'];
    $user = user_load($node->uid);

    $comments = render($content['comments']);
    $body = $content['body']['#items'][0]['value'];
    $image =  '/sites/default/files/field/image/' .  $content['field_image']['#items'][0]['filename'];
    $video = $content['field_video_embed']['#items'][0]['value'];
    $upload = '<a href="/sites/default/files/podcasts/'.$content['field_field_upload']['#items'][0]['filename'] . '" target="_blank" class="download-btn" style="float:left">Download Podcast</a>';
    if ($submitted) {
        $submittedOutput = "<div class='submitted'><i>Posted: " . date( "F j, Y",$node->created) . ' by <span style="color: #cc0000">' . $user->name . '</span></i></div>';
    }
    $output = '';


    switch ($type){
        case 'video':
            $output = '<div class="videoWrapper">' .  $video . '</div>' . $submittedOutput . $body;
            break;
        case 'review':
            $output = $submittedOutput . $body;
            break;
        case 'podcast':
            $output = '<div class="podcast-wrapper clearfix"><img class="bodyImage" src="' . $image . '">';
            $output .= $submittedOutput . $body . $upload .'</div>';
            break;
        case 'article':
            $output = $submittedOutput . $body;
            break;
    }



    echo $output;
    echo $comments;





