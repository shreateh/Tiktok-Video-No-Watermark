<?php
/**
 * Tiktok Video No Watermark
 * https://github.com/yi005/Tiktok-Video-No-Watermark
 * @Author yi005
 * @Date 2021.11.19
 * @Update 2021.12.29
 */


/**
 * Signature X-Argus, X-Ladon, X-Gorgon, X-Khronos
 * Method: POST
 * limit 1 req/ 1 sec
 * params
 * headers
 */

//https://api.tiktokv.com/aweme/v1/user/profile/other/?user_id=107955&os_api=25&device_type=A5010&manifest_version_code=250906&app_name=musically_go&version_name=25.9.6&app_type=normal&channel=googleplay&update_version_code=250906&device_platform=android&build_number=25.9.6&version_code=250906&app_language=en&device_brand=OnePlus&os_version=7.1.2&aid=1340&iid=7127540981901510406&device_id=7127539617850918405
$http_query = 'user_id=107955&os_api=25&device_type=A5010&manifest_version_code=250906&app_name=musically_go&version_name=25.9.6&app_type=normal&channel=googleplay&update_version_code=250906&device_platform=android&build_number=25.9.6&version_code=250906&app_language=en&device_brand=OnePlus&os_version=7.1.2&aid=1340&iid=7127540981901510406&device_id=7127539617850918405';

$api = 'https://www.tikwm.com/api/service/sign';
$postData = [
    'params' => $http_query,
    'headers' => '{"user-agent":"okhttp/3.10.0.1"}',
];

$response = curl_request($api, $postData);
$obj = json_decode($response);
var_dump($obj);


/**
 * Get Similar Users
 * limit 1 req/ 10 sec
 * unique_id or user_id
 * count max 50
 */
$api = 'https://www.tikwm.com/api/user/discover';
$unique_id = 'ovaksss';
$postData = [
    'unique_id' => $unique_id,
    //'user_id' => '6958992391789577217',
    'count' => 10,
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);

/**
 * Get Video List By Challenge(HashTag)
 * limit 1 req/ 10 sec
 */
$api = 'https://www.tikwm.com/api/challenge/posts';
$challengeId = '5932';
$postData = [
    'challenge_id' => $challengeId,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);

/**
 * Get Challenge(HashTag) Detail
 * limit 1 req/ 1 sec
 */
$api = 'https://www.tikwm.com/api/challenge/info';
$challengeId = '5932';
$challengeName = 'girl';
$postData = [
    'challenge_id' => $challengeId,    //challenge_id or challenge_name must require
    //'challenge_name' => $challengeName,
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);

/**
 * Search Challenge(HashTag) By Keywords
 * limit 1 req/ 10 sec
 */
$api = 'https://www.tikwm.com/api/challenge/search';
$keywords = 'girl';
$postData = [
    'keywords' => $keywords,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);

/**
 * Search Videos By Keywords
 * limit 1 req/ 10 sec
 */
$api = 'https://www.tikwm.com/api/feed/search';
$keywords = '踊ってみた';
$postData = [
    'keywords' => $keywords,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);

/**
 * Get User Liked
 * limit 1 req/ 10 sec
 */
$api = 'https://www.tikwm.com/api/user/favorite';
$unique_id = '@mineodesu69';
$postData = [
    'unique_id' => $unique_id,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * Get Reply By Comment Id
 *
 **/
$api = 'https://www.tikwm.com/api/comment/list';
$params = [
    'comment_id' => '7044622953448211247',
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($params));
$obj = json_decode($response);

var_dump($obj);

/**
 * Get Video Comments
 * https://vt.tiktok.com/ZSey5hMUR/
 * https://www.tiktok.com/@moosethecane/video/7044204887571238149
 * 7044204887571238149
 *
 **/
$api = 'https://www.tikwm.com/api/comment/list';
$videoUrl = 'https://www.tiktok.com/@moosethecane/video/7044204887571238149';
$params = [
    'url' => $videoUrl,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($params));
$obj = json_decode($response);

var_dump($obj);


/**
 * Get Region List
 *
 */
$api = 'https://www.tikwm.com/api/region';
$api = 'https://www.tikwm.com/api/region';
$response = curl_request($api);
$obj = json_decode($response);
var_dump($obj);


/**
 * Get Trending Feed
 * limit 1 req/ 10 sec
 * region
 */
$api = 'https://www.tikwm.com/api/feed/list';
$postData = [
    'region' => 'JP',
    'count' => 10
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * Get Music Detail
 * limit 1 req/sec
 * support Links
 * 6788770563495185158
 * https://vm.tiktok.com/xxxxxx/
 * https://www.tiktok.com/music/originalljud-6788770563495185158
 */
$api = 'https://www.tikwm.com/api/music/info';
$music_id = '6788770563495185158';
$postData = [
    'url' => '6788770563495185158'
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * Get Music Feed Videos
 * limit 1 req/ 10 sec
 */
$api = 'https://www.tikwm.com/api/music/posts';
$music_id = '6919702697465678594';
$postData = [
    'unique_id' => $music_id,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);

/**
 * Get User Following
 *
 */
$api = 'https://www.tikwm.com/api/user/following';
$user_id = '6943972350728700930';
$postData = [
    'user_id' => '6943972350728700930',
    'count' => 50,
    'time' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * Get User Followers
 *
 */
$api = 'https://www.tikwm.com/api/user/followers';
$user_id = '6943972350728700930';
$postData = [
    'user_id' => '6943972350728700930',
    'count' => 50,
    'time' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * Get User Feed Videos
 * limit 1 req/ 10 sec
 */
$api = 'https://www.tikwm.com/api/user/posts';
$unique_id = '@mineodesu69';
$postData = [
    'unique_id' => $unique_id,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * Without Watermark
 * support Links
 * https://vt.tiktok.com/ZSey5hMUR/
 * https://www.tiktok.com/@umay_874/video/6996665911927262466
 * 6996665911927262466
 * https://v.douyin.com/Nkyec7r/
 * https://www.douyin.com/video/7042267828258393357
 *
 **/
$api = 'https://www.tikwm.com/api/';
$tikUrl = 'https://www.tiktok.com/@umay_874/video/6996665911927262466';
$postData = [
    'url' => $tikUrl,
    'hd' => 0   //input 1, get HD Video
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);

if ($obj->code === 0) {
    echo $obj->data->play;    //no watermark
} else {
    echo $obj->msg;
}

function curl_request($url, $postData = [])
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    if ($postData) {
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_ACCEPTTIMEOUT_MS, 10000);
    curl_setopt($curl, CURLOPT_ENCODING, 'gzip');

    $response = curl_exec($curl);
    return $response;
}
