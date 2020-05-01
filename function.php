<?php

function input($url)
{
    $inputs = explode("/", $url);
    if ($inputs[2] != "www.instagram.com") {
        return "Invalid Url";
    }
    $objek = getIg($inputs[4]);
    if ($objek == NULL) {
        return "Cannot Fetch data";
    } elseif ($objek->graphql->shortcode_media->is_video == NULL) {
        $hasilnya = $objek->graphql->shortcode_media->display_url;
        return '<a type="button" class="btn btn-secondary" href="' . $hasilnya . '" download>Download Photos!</a>';
    } elseif ($inputs[3] == "tv") {
        $hasilnya = $objek->graphql->shortcode_media->video_url;
        return '<a type="button" class="btn btn-secondary" href="' . $hasilnya . '" download>Download IG TV!</a>';
    } else {
        $hasilnya = $objek->graphql->shortcode_media->video_url;
        return '<a type="button" class="btn btn-secondary" href="' . $hasilnya . '" download>Download Videos!</a>';
    }
}




function getIg($input)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.instagram.com/p/" . $input . "/?__a=1");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $output = json_decode($output);
    return $output;
}
// print_r($output->graphql->shortcode_media->is_video == NULL);
// print_r($output);
// $outputs = $output->graphql->shortcode_media->video_url;
// $tumbline = $output->graphql->shortcode_media->display_url;
