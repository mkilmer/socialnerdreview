<?php


        // dpm($content);

        $type = $content['field_type']['#items'][0]['value'];

        $image =  '/sites/default/files/field/image/' .  $content['field_image']['#items'][0]['filename'];


        switch ($type){
            case 'video':
                echo 'This is a video type dawg';
                break;
            case 'review':
                echo 'This is a review type dawg';
                break;
            case 'podcast':
                echo 'This is a podcast type dawg';
                break;
            case 'article':
                echo 'This is a article type dawg';
                break;
        }

    ?>





