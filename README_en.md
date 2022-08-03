**[简体中文](./README.md) | English**


# Tiktok-Video-No-Watermark

Tiktok Video Without Watermark


Support

+ [x] [X-Argus,X-Ladon Signature](#ApiSignature)

+ [x] [Without Watermark](#WithoutWatermark)

+ [x] [Get User Feed](#GetUserFeed)

+ [x] [Get User Detail](#GetUserDetail)

+ [x] [Get User Following](#GetUserFollowing)

+ [x] [Get User Followers](#GetUserFollowers)

+ [x] [Get Music Feed Videos](#GetMusicFeedVideos)

+ [x] [Get Music Detail](#GetMusicDetail)

+ [x] [Get Region Code](#GetRegionCode)

+ [x] [Get Trending Videos By Region](#GetTrendingVideosByRegion)

+ [x] [Get Video Comments](#GetVideoComments)

+ [x] [Get Reply By Comment Id](#GetReplyByCommentId)

+ [x] [Get User Liked](#GetUserLiked)

+ [x] [Search Video By Keywords](#SearchVideoByKeywords)

+ [x] [Search Challenge(hashTag)](#SearchChallengehashTag)

+ [x] [Get Challenge(hashTag) Detail](#GetChallengehashTagDetail)

+ [x] [Get Challenge(hashTag) Feed](#GetChallengehashTagFeed)

+ [x] [Get Similar Users](#GetSimilarUsers)

+ [ ] Get Trending Challenge By Region


# Online Test

[```https://www.tikwm.com/```](https://www.tikwm.com/)

# Status

Test every 5 minutes

[```https://www.tikwm.com/api/status```](https://www.tikwm.com/api/status)

## <a href="https://www.buymeacoffee.com/yi005" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-blue.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

#### If it helps you, please support a star

# update log
2022.08.03 update
+ add [X-Argus,X-Ladon Signature](#ApiSignature)

2022.06.10 update
+ add [Get Similar Users](#GetSimilarUsers) 

2022.03.15 update
+ [Without Watermark](#WithoutWatermark) support Douyin videos without watermark

2022.01.13 update
+ Api Limit 2000 req/day

2022.01.05 update
+ add [Search Challenge(hashTag)](#SearchChallenge(hashTag))
+ add [Get Challenge(hashTag) Detail](#GetChallenge(hashTag)Detail)
+ add [Get Challenge(hashTag) Feed](#GetChallenge(hashTag)Feed)


2021.12.25 update
+ add [Search Video By Keywords](#SearchVideoByKeywords)

2021.12.24 update
+ add HD Video(High bit rate), in [Without Watermark](#WithoutWatermark) `data.hdplay` fields

2021.12.23 update
+ api Limit 20000 req/day
+ add [Get User Liked](#GetUserLiked)
+ add [Get Video Comments](#GetVideoComments)
+ add [Get Reply By Comment Id](#GetReplyByCommentId)
+ [Search Video By Keywords](#SearchVideoByKeywords) add `id` feild

2021.12.20 update
+ add [Get Music Detail](#GetMusicDetail)
+ add [Get Trending Videos By Region](#GetTrendingVideosByRegion)
+ add [Get Region Code](#GetRegionCode)

2021.12.17 update
+ add `music_info` field
+ add [Get Music Feed Videos](#GetMusicFeedVideos)

2021.12.16 update
+ add [Get User Following](#GetUserFollowing)
+ add [Get User Followers](#GetUserFollowers)

2021.12.15 update
+ add [Get User Detail](#GetUserDetail)
+ add `video_id` ([Get User Feed](#GetUserFeed))

2021.12.14 update

+ add [Get User Feed](#GetUserFeed) limit 1 req/ 10 sec([Paid Plan](https://rapidapi.com/yi005/api/tiktok-video-no-watermark2/))

2021.12.09 update

+ modify Request params `plat` default tik
+ api support method GET | POST
+ optimization request ```https://www.tikwm.com/api/?url=6996665911927262466```
+ optimization ```https://vt.tiktok.com/XXXXXX``` query time
+ free api limit 1 req/sec ([Paid Plan](https://rapidapi.com/yi005/api/tiktok-video-no-watermark2/))

2021.12.06 update

+ add `nickname`

2021.12.03 update

+ add `region`
+ add `origin_cover`
+ add `play_count`
+ add `digg_count`
+ add `comment_count`
+ add `create_time`
+ add `author`
    + `unique_id`
    + `avatar`

2021.12.01 update

+ add `music`

# WithoutWatermark

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/```

### method: ```get|post```

### request params

```
url - TT Link support (6996665911927262466 | https://vt.tiktok.com/XXXXXX | https://www.tiktok.com/@umay_874/video/6996665911927262466)

hd - default 0  input 1 get HD Videos(This will increase the total request time)
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "region": "TR",
    "title": "#hangi şarkılarla video atmamı isterdiniz 🇹🇷🐺#🐺🇹🇷🤘🐺🇹🇷🤘🐺🇹🇷🤘🐺🇹🇷 #gazimustafakemalataturk #yüksekova",
    "cover": "https://p16-sign-sg.tiktokcdn.com/obj/tos-alisg-p-0037/8c75c54aaa0f486cb6fe82d3e466cd11_1629038230?x-expires=1638532800&x-signature=%2FhxZ97lx9tvpccHiDoIV9ff7oJ4%3D",
    "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/15f610be8e2d4818bf049eda670e3611_1629038230~tplv-tiktokx-360p.jpeg?x-expires=1638532800&x-signature=S6nJz1rmuztGs1rADsKePgg37HY%3D",
    "play": "https://v16m-default.akamaized.net/4cc86938b3e2a3695b9127eb86b397b6/61aa0823/video/tos/alisg/tos-alisg-pve-0037c001/098a42acd7874257961c7ec7ea77a4cc/?a=0&br=1788&bt=894&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=6&er=&ft=w.1R0FGgkag3-I&l=202112030605450102230821640703B9F3&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=ajRocDk6ZjZsNzMzODczNEApZ2lnO2k1aWQ7Nzk4Zzk2ZGdkbm5ucjRvYWBgLS1kMS1zc2BjXy9iMTMwMDUzMTZeMmI6Yw%3D%3D&vl=&vr=",
    "wmplay": "https://v16m-default.akamaized.net/555d16254282b184d654b17338a68632/61aa0823/video/tos/alisg/tos-alisg-pve-0037c001/433818c0e6eb4554a8dc70fa12f76373/?a=0&br=1706&bt=853&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=202112030605450102230821640703B9F3&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=ajRocDk6ZjZsNzMzODczNEApaWZpNTNmZDs5N2Q0ZDo3M2dkbm5ucjRvYWBgLS1kMS1zc15fNS9gMl4vNmA2MmIwMmE6Yw%3D%3D&vl=&vr=",
    "hdplay": "https://v16.tiktokcdn.com/a305bf623f89e022180c7da4b3c58f0a/61c626df/video/tos/alisg/tos-alisg-pv-0037c001/95c8cf22104b4aa39ca2c84b6f6dc19f/?a=1180&br=5320&bt=2660&cd=0%7C0%7C0&ch=0&cr=0&cs=&cv=1&dr=0&ds=6&er=&ft=sfuyEXk_4kag3&l=202112241400210102452450111CF891D5&lr=&mime_type=video_mp4&net=0&pl=0&qs=13&rc=ajRocDk6ZjZsNzMzODczNEApanR0dHg6dWdmZjMzajczeWdkbm5ucjRvYWBgLS1kMS1zc2QuYmozNGAwZjEtLTIxLS46Yw%3D%3D&vl=&vr=",
    "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/6842547937583631110.mp3",
    "play_count": 56297,
    "digg_count": 5199,
    "comment_count": 130,
    "create_time": 1629038229,
    "author": {
      "unique_id": "umayyyy238",
      "nickname": "Umay 🐺",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/0f4b7298cc9c70d41f49eb36fd510186~c5_300x300.webp?x-expires=1638597600&x-signature=xQzF9C2X5CSXjlUMwovg6ZFGNPY%3D"
    }
  }
}
```

</details>

# GetUserFeed

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/user/posts```

### method: ```get|post```

### request params

```
unique_id - Example @mineodesu69 
count - 10 (1 < count < 35)
cursor - 0 (hasMore is True, input cursor load more)
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "videos": [
      {
        "region": "JP",
        "title": "チャイナ服のスリットたまんないよね？🤭💕",
        "cover": "https://p16-sign-sg.tiktokcdn.com/obj/tos-alisg-p-0037/039a83b2a2a94b24b1e29a540f88ab49_1639312726?x-expires=1639512000&x-signature=8p7RLRMtXpua31Wa%2B1kDpwffZB8%3D",
        "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/7029c7e45b004372b9f30fd0dffea682_1639312725~tplv-tiktokx-360p.jpeg?x-expires=1639512000&x-signature=YJn1K9BaRoNJChphJwlK%2BMhrNoo%3D",
        "play": "https://v16m-default.akamaized.net/41caea488a8d07f9da0fd64e1cce9a9d/61b8fb08/video/tos/alisg/tos-alisg-pve-0037/c795108b3b384e0b851200eac80a72af/?a=0&br=5566&bt=2783&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=202112141413530102451332071559A25D&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M3BtO2U6Zmx4OTMzODgzNEApOGg7NGhoOWU5N2Y4ZjplPGdpYi1scjQwbm5gLS1kLy1zc14tMC00YV8yX18yMzM0MzI6Yw%3D%3D&vl=&vr=",
        "wmplay": "https://v16m-default.akamaized.net/f9d89538f9e6b91f0d7f6f509fdd5903/61b8fb08/video/tos/alisg/tos-alisg-pve-0037/32b253a1b50646af8cdb08a253ed9a3a/?a=0&br=3408&bt=1704&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=202112141413530102451332071559A25D&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M3BtO2U6Zmx4OTMzODgzNEApOTs6aTNoZjszNzs6N2g0aWdpYi1scjQwbm5gLS1kLy1zcy1eYy9eNjMvNjMvXjU1Xl86Yw%3D%3D&vl=&vr=",
        "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/7002634676770999045.mp3",
        "play_count": 7064,
        "digg_count": 324,
        "comment_count": 14,
        "create_time": 1639312724,
        "author": {
          "unique_id": "mineodesu69",
          "nickname": "こずりん",
          "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/a1daf088c51a3183dae1513df606f3a8~c5_300x300.webp?x-expires=1639576800&x-signature=LE%2FGp5afJOJTwdMXUizKU%2FMyZtY%3D"
        }
      }
    ],
    "cursor": "1639312724000",
    "hasMore": true
  }
}
```

</details>


# GetUserDetail

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/user/info```

### method: ```get|post```

### request params

```
unique_id - Example @mineodesu69 
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "user": {
      "id": "6943972350728700930",
      "uniqueId": "mineodesu69",
      "nickname": "こずりん",
      "avatarThumb": "https://p16-sign-sg.tiktokcdn.com/aweme/100x100/tos-alisg-avt-0068/a1daf088c51a3183dae1513df606f3a8.jpeg?x-expires=1639641600&x-signature=3a7O4IkK4j%2FhTRhKwpZAnbrHBqc%3D",
      "avatarMedium": "https://p16-sign-sg.tiktokcdn.com/aweme/720x720/tos-alisg-avt-0068/a1daf088c51a3183dae1513df606f3a8.jpeg?x-expires=1639641600&x-signature=qrorwjUDdRWZYDZ%2BnKDNlsGUeXw%3D",
      "avatarLarger": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/a1daf088c51a3183dae1513df606f3a8.jpeg?x-expires=1639641600&x-signature=cF3LB9vK7SU%2F2QD%2BL2KBU2d2fVI%3D",
      "signature": "【毎日投稿🐼】\n→ → → 18時頃\n君にちょうどいい女の子·͜·\n長野出身今は関西\n- ̗̀  SNSまとめ👇🏻   ̖́-",
      "verified": false,
      "secUid": "MS4wLjABAAAAx79jlw39ozlKeUQoa9QjOtJBzelssB4fzLwYsL0za6BOjMxA0aYRq4COI3zI7lZ_",
      "secret": false,
      "ftc": false,
      "relation": 0,
      "openFavorite": true,
      "bioLink": {
        "link": "https://lit.link/kozurin69",
        "risk": 3
      },
      "commentSetting": 0,
      "duetSetting": 0,
      "stitchSetting": 0,
      "privateAccount": false,
      "isADVirtual": false
    },
    "stats": {
      "followingCount": 262,
      "followerCount": 207900,
      "heartCount": 1400000,
      "videoCount": 191,
      "diggCount": 911,
      "heart": 1400000
    }
  }
}
```

</details>

# GetUserFollowing

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/user/following```

### method: ```get|post```

### request params

```
user_id - Example 6943972350728700930
count - 1 ~ 200  default 50
time -  hasMore is true, input time load more.
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "followings": [{
      "id": "6566729240732614657",
      "region": "JP",
      "sec_uid": "MS4wLjABAAAAPjqPx1dTQnBcNVh02MLMStHYmM2fF55gofBYdZj-f45LZW83-W_JS2G6Xsa1XC6p",
      "unique_id": "yuuna_1210",
      "nickname": "悠那🌹🌕",
      "signature": "ﾌｱﾝﾏ🌹🌕Yuuna🇯🇵\nInstagram、YouTube、ファンクラブはこちら⬇️",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/91db82467172b59501cf42d89202b2ef~c5_300x300.webp?x-expires=1639742400&x-signature=H3F9uVCyzlk08lO9YooEnGpuK0E%3D",
      "aweme_count": 206,
      "follower_count": 1172117,
      "favoriting_count": 1430,
      "total_favorited": 6490676,
      "youtube_channel_title": "Yuuna ユウナ",
      "youtube_channel_id": "UCQzD8bUstNeFmxAq6BF2VWg",
      "twitter_name": "Yuuna12100930",
      "twitter_id": "1428762131105652739"
    }, {
      "id": "6821369322682778626",
      "region": "JP",
      "sec_uid": "MS4wLjABAAAA2_YTgxz3kLb2XoyC3xOXnosim3gdiqMtFHnjRvckabZJFQ40XBOVttDCiB5cwa3b",
      "unique_id": "i.am_natsuki_",
      "nickname": "なっちゅん🤍🍣",
      "signature": "Age:21   JAPAN🇯🇵TOKYO🗼\n\nLOVELY JAPANESE GIRL💓☕️🥰\n仲良くしてね！",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/d23cc59fad7298076477764d4cd7df93~c5_300x300.webp?x-expires=1639742400&x-signature=GOa3WnBctzln5z4MRhUqy%2BrBSJw%3D",
      "aweme_count": 351,
      "follower_count": 1404604,
      "favoriting_count": 1121,
      "total_favorited": 12353932,
      "youtube_channel_title": "",
      "youtube_channel_id": "",
      "twitter_name": "",
      "twitter_id": ""
    }, {
      "id": "6692395146128589826",
      "region": "JP",
      "sec_uid": "MS4wLjABAAAAtavTmHYF26Ja8bA5uOx9axGumONjGfkCflrOu0Hec4iRa6T9WR1ZaR-4Sj_0L2RN",
      "unique_id": "mi_030616",
      "nickname": "みｰ．⚠️反転．ピアス⚠️",
      "signature": "ただの趣味垢\nTwitterに住んでます",
      "avatar": "https://p77-sign-sg.tiktokcdn.com/tiktok-obj/9302bb57c71286126af3418752a47773~c5_300x300.webp?x-expires=1639742400&x-signature=Txoa6RS1vT5j8jBZxsOD%2B25GEzA%3D",
      "aweme_count": 174,
      "follower_count": 72278,
      "favoriting_count": 12895,
      "total_favorited": 2596014,
      "youtube_channel_title": "",
      "youtube_channel_id": "",
      "twitter_name": "mi_030616",
      "twitter_id": "1244569405922500610"
    }],
    "total": 262,
    "time": 1636154865,
    "hasMore": true
  }
}
```

</details>

# GetUserFollowers

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/user/followers```

### method: ```get|post```

### request params

```
user_id - Example 6943972350728700930
count - 1 ~ 200 default 50
time -  hasMore is true, input time load more.
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "followers": [{
      "id": "6855595320790729733",
      "region": "ES",
      "sec_uid": "MS4wLjABAAAACuAvUV44m5Y0vSinq0M74_8h7YaCqAinZIVHVAqAis47mBOais71J3bDMF50qBVE",
      "unique_id": "lvilla97",
      "nickname": "Lvilla97",
      "signature": "",
      "avatar": "https://p77-sign-va.tiktokcdn.com/musically-maliva-obj/1594805258216454~c5_300x300.webp?x-expires=1639742400&x-signature=osOmDQWdz06hyF5%2BqmncKjvrEqQ%3D",
      "aweme_count": 0,
      "follower_count": 251,
      "favoriting_count": 912,
      "total_favorited": 0,
      "youtube_channel_title": "",
      "youtube_channel_id": "",
      "twitter_name": "",
      "twitter_id": ""
    }, {
      "id": "7040005798647481350",
      "region": "MX",
      "sec_uid": "MS4wLjABAAAAS0rTw7JaFwtC_saKedK5mAz-iFCG7qcZoemEA4tsDUNEhA-25viTJTsm9dm1gycl",
      "unique_id": "sid90693",
      "nickname": "victor9069",
      "signature": "",
      "avatar": "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/1594805258216454~c5_300x300.webp?x-expires=1639742400&x-signature=i0LPE4cNks5ZGj0Wqk9f5fi4L3g%3D",
      "aweme_count": 0,
      "follower_count": 0,
      "favoriting_count": 0,
      "total_favorited": 0,
      "youtube_channel_title": "",
      "youtube_channel_id": "",
      "twitter_name": "",
      "twitter_id": ""
    }, {
      "id": "6581397055238029313",
      "region": "KH",
      "sec_uid": "MS4wLjABAAAAvfbRcWHIdDLM87XeKvt62Xm3VCa3iI8UHhH_OyPvAheW-WoDBmPsn-GJn7FONTd-",
      "unique_id": "conscience184",
      "nickname": "មនុស្សឈឺចាប់ជាងគេ គឺបង",
      "signature": "",
      "avatar": "https://p77-sign-sg.tiktokcdn.com/tiktok-obj/1606787272401921~c5_300x300.webp?x-expires=1639742400&x-signature=x7%2BdsNKfZZhIuFncfyF3QyMBfw4%3D",
      "aweme_count": 0,
      "follower_count": 76,
      "favoriting_count": 3999,
      "total_favorited": 0,
      "youtube_channel_title": "",
      "youtube_channel_id": "",
      "twitter_name": "",
      "twitter_id": ""
    }],
    "total": 208468,
    "time": 1639657693,
    "hasMore": true
  }
}
```

</details>


# GetMusicFeedVideos

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/music/posts```

### method: ```get|post```

### request params

```
music_id - music id (music_info.id) Example 6788770563495185158
count - 10 (1 ~ 35)
cursor - 0 (hasMore is true, input cursor load more)
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "videos": [{
      "video_id": "6788814073657167110",
      "region": "SE",
      "title": "Hehe",
      "cover": "https://p16-sign-va.tiktokcdn.com/obj/tos-maliva-p-0068/1655cf144c9742cf8021f4dc8335c577_1580643957?x-expires=1639767600&x-signature=Bx%2BcjMHwlOoAtBt5yO9rEBY6POA%3D",
      "origin_cover": "https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/c688071120e74ba2b3d9ee4b4d9317e2_1580643957~tplv-tiktokx-360p.image?x-expires=1639767600&x-signature=lQ4I82DeylhFwECt439E8rEo%2B1w%3D",
      "play": "https://v16m-default.akamaized.net/e495e6a7541a3003fa17e30f23802f5d/61bce9ab/video/tos/useast2a/tos-useast2a-ve-0068c002/e25a59218514484e8054d8ff999e773f/?a=0&br=1276&bt=638&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=6&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=am05d2hpc29lcjMzNDczM0ApMzQ7NGRoM2Q8Nzc4ODc2OGdlYzJtcWgyYG9fLS1jMTZzczU0NTVhLjMxY15eXzA0YmI6Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16m-default.akamaized.net/5dafffef63b9f4eabf805a45f3023d0a/61bce9ab/video/tos/useast2a/tos-useast2a-ve-0068c002/7112c4dc9dd14cb59fcba0801f5b7ee9/?a=0&br=726&bt=363&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=am05d2hpc29lcjMzNDczM0ApNzNpOWg4OjszNzU0OjM3ZGdlYzJtcWgyYG9fLS1jMTZzcy4yYzVjLjItMy4wYGBgMV86Yw%3D%3D&vl=&vr=",
      "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/1657416601829430.mp3",
      "play_count": 137686,
      "digg_count": 5691,
      "comment_count": 51,
      "create_time": 1580643953,
      "author": {
        "id": "6659735884131401734",
        "unique_id": "swe._.amy",
        "nickname": "𝚛𝚘𝚋𝚕𝚘𝚡<33",
        "avatar": "https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/34f9971cce7ca50e1b5bd57dc5a79d40~c5_300x300.webp?x-expires=1639832400&x-signature=EAmujxGhNjfirsvr0FFer8RthwQ%3D"
      }
    }, {
      "video_id": "6995362373791911170",
      "region": "JP",
      "title": "腕からいく派です✳︎",
      "cover": "https://p16-sign-sg.tiktokcdn.com/obj/tos-alisg-p-0037/a35823938949452a8d00eb7e6db1cf0c_1628734740?x-expires=1639767600&x-signature=%2BJAimNVw%2BmA2YC5cvZzGxuLmO2w%3D",
      "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/3b2a877f3c85406ea515154c88953558_1628734728~tplv-tiktokx-360p.jpeg?x-expires=1639767600&x-signature=mqx4sxJqJ76JQvPtv8DhX1DF9BU%3D",
      "play": "https://v16m-default.akamaized.net/0633bf70afa039a8f0899f82d5c8dc74/61bce9ab/video/tos/alisg/tos-alisg-pve-0037/e1580b563bae4005afe785f280f29f93/?a=0&br=3760&bt=1880&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=Mzp0dDY6Zjw7NzMzODgzNEApOzw0M2g3ZTw6Nzg0PGg7aWcwczFrcjRfNl5gLS1kLy1zc2FeYTJgXzJhYTBiYjBhLTU6Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16m-default.akamaized.net/3620638c99e71b41edd795d8bd47d855/61bce9ab/video/tos/alisg/tos-alisg-pve-0037/9d991ef7a70447a0b9274792cd116b37/?a=0&br=2396&bt=1198&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=Mzp0dDY6Zjw7NzMzODgzNEApNTw4NDo1OjxnNzxpODo4aWcwczFrcjRfNl5gLS1kLy1zczJiLy0yMjAxL14vMWMyMWI6Yw%3D%3D&vl=&vr=",
      "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/1657416601829430.mp3",
      "play_count": 14702719,
      "digg_count": 843921,
      "comment_count": 6675,
      "create_time": 1628734727,
      "author": {
        "id": "6986471312684844034",
        "unique_id": "hinamin_0529",
        "nickname": "ひなみん🍑(21)",
        "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/e304975e9dd373f98cb0ff332190cee8~c5_300x300.webp?x-expires=1639832400&x-signature=VH7AiAnL68quVx5lzjkFffWI8do%3D"
      }
    }, {
      "video_id": "6820945347309767942",
      "region": "US",
      "title": "I finally got it! 🤗 #happyathome #foryou #fy",
      "cover": "https://p16-sign-va.tiktokcdn.com/obj/tos-maliva-p-0068/3ab8e60dbb8a484d887dfa050a776ea4_1588125100?x-expires=1639767600&x-signature=Qs1%2FAXu3vOfM%2BKiA6ZiYsXs32Cs%3D",
      "origin_cover": "https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/744bbdd2e8be45168c990a0dbf7d7ee1_1588125100~tplv-tiktokx-360p.image?x-expires=1639767600&x-signature=zW9uKO3qUQ7RWo6IizHDMaPc9uA%3D",
      "play": "https://v16m-default.akamaized.net/2f87666412dea47af4d5332c509513b3/61bce9a8/video/tos/useast2a/tos-useast2a-pve-0068/742f5129add94c2e902ebbdc8c5c95bd/?a=0&br=2548&bt=1274&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=6&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=am83OWw1OjxndDMzNTczM0ApZzo0OTlnOjwzN2k0NDQ1aWdscmlvLjFjb2hfLS0wMTZzczM1YzQzLmEwNDY1YzU2MDY6Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16m-default.akamaized.net/5e9aed25ec8edcb9ffa2bfda3940e718/61bce9a8/video/tos/useast2a/tos-useast2a-pve-0068/d656fbf43fa645eda58328f11e273d8f/?a=0&br=1960&bt=980&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=am83OWw1OjxndDMzNTczM0ApNjY4aGU2Ojs8NzhpMzM6OWdscmlvLjFjb2hfLS0wMTZzczRgMy8tLS81LS0uLmIvMWE6Yw%3D%3D&vl=&vr=",
      "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/1657416601829430.mp3",
      "play_count": 2960289,
      "digg_count": 353810,
      "comment_count": 1663,
      "create_time": 1588125098,
      "author": {
        "id": "234640647603769344",
        "unique_id": "ashleynocera",
        "nickname": "Ashley Nocera",
        "avatar": "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/1659345919372293~c5_300x300.webp?x-expires=1639832400&x-signature=OI8UuVs9H42R1SLiDqC%2FJn3SJ6c%3D"
      }
    }],
    "cursor": "3",
    "hasMore": true
  }
}
```

</details>

# GetMusicDetail

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/music/info```

### method: ```get|post```

### request params

```
url - TT Music Url. Support(6788770563495185158 | https://vm.tiktok.com/xxxxxx/ | https://www.tiktok.com/music/originalljud-6788770563495185158)
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "id": "6788770563495185158",
    "title": "originalljud",
    "play": "https://sf16-ies-music-va.tiktokcdn.com/obj/musically-maliva-obj/1657416601829430.mp3",
    "cover": "https://p77-sign-va.tiktokcdn.com/tos-maliva-avt-0068/34f9971cce7ca50e1b5bd57dc5a79d40~c5_720x720.jpeg?x-expires=1640070000&x-signature=cwpN%2ByqfgNtYN6tQHlDGhrgprQ8%3D",
    "author": "𝚛𝚘𝚋𝚕𝚘𝚡<33",
    "original": true,
    "duration": 9,
    "album": ""
  }
}
```

</details>


# GetRegionCode

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/region```

### method: ```get|post```

### request params

```
none
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "TW": "Taiwan",
    "JP": "Japan",
    "KR": "Korea",
    "US": "United States",
    "...": "..."
  }
}
```

</details>


# GetTrendingVideosByRegion

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/feed/list```

### method: ```get|post```

### request params

```
region - Example JP | TW | US
count - 1 ~ 20 default 10 (The actual quantity obtained may be small, which varies by region)
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": [{
    "video_id": "7038251244372135170",
    "region": "JP",
    "title": "superhuman feat.超人技 #funny #funnyvideo #comedy #challenge#comedia #respect #reproduction #remix IB:@uespiiiii.1115",
    "cover": "https://p16-sign-sg.tiktokcdn.com/large/tos-alisg-p-0037/cddfb3056acb477d86434f2bc73865e1_1638720570.jpeg?x-expires=1640005200&x-signature=xH3MoJlFdDhI4TOkWBz0kt%2FLbUE%3D",
    "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/81ebea9dcf1f422cb5dd7ae3a877c47c_1638720569~tplv-tiktokx-360p.jpeg?x-expires=1640005200&x-signature=FHV7Kb8P9IFJzYiy7Ly9GAhufWA%3D",
    "play": "https://v16m-default.akamaized.net/9086c2ee0708c2e63e253aca37b41bef/61c08a71/video/tos/alisg/tos-alisg-pve-0037/cdd690ce1036425ea6892a74713e0969/?a=1128&br=2290&bt=1145&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=amk5ODU6ZmZoOTMzODgzNEApOThoNjY6Mzw5N2U0OTU5PGcpaHV2bmQxcm53ZmhpMS1yNGc1amAtLWQvLXNzLjM0MDIyYC5gXl4zNDQ1MDpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "wmplay": "https://v16m-default.akamaized.net/d435666d5e4a1185ab8d97838fa9c6ed/61c08a71/video/tos/alisg/tos-alisg-pve-0037/6a797e4563b5443e81d9e0083a35647d/?a=1128&br=1876&bt=938&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=amk5ODU6ZmZoOTMzODgzNEApNWY5NzY0OWQ2N2lpODo1Z2cpaHV2bmQxcm53ZmhpMS1yNGc1amAtLWQvLXNzMjAwLzJjNGA2Ly4yX15iYDpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "music": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7022247991247457026.mp3",
    "music_info": {
      "id": "7022248003805137665",
      "title": "original sound - ISSEI/将来有名になる男",
      "play": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7022247991247457026.mp3",
      "cover": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tiktok-obj/1630967737620481.webp?x-expires=1640070000&x-signature=%2B%2FztmKsiVsuyNSnznB6KS8apopc%3D",
      "author": "ISSEI/将来有名になる男",
      "original": true,
      "duration": 27,
      "album": ""
    },
    "play_count": 2043045,
    "digg_count": 160518,
    "comment_count": 281,
    "create_time": 1638720568,
    "author": {
      "id": "72416538129",
      "unique_id": "issei0806",
      "nickname": "ISSEI/将来有名になる男",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tiktok-obj/1630967737620481~c5_300x300.webp?x-expires=1640070000&x-signature=lYAIn6rhaayRLSNoQomm1zjSQoQ%3D"
    }
  }, {
    "video_id": "7028914159936867586",
    "region": "JP",
    "title": "",
    "cover": "https://p16-sign-sg.tiktokcdn.com/large/tos-alisg-p-0037/f6277ce9dc674495b471cc9622eb7902.jpeg?x-expires=1640005200&x-signature=jiVnt%2ByKU90pB62IPccYI84aD1Q%3D",
    "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/6b42b9d1f5c84856930aa43d6cb20967_1636546610~tplv-tiktokx-360p.jpeg?x-expires=1640005200&x-signature=DhBJajPdIh85GbT0LVcZLcsGSBA%3D",
    "play": "https://v16m-default.akamaized.net/fe4ae61c57c98b7cac6e371bbb55b266/61c08a69/video/tos/alisg/tos-alisg-pve-0037c001/801316b174e14321b475f59d6b4d1abd/?a=1128&br=3134&bt=1567&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M2dqaWg6ZmV1OTMzODczNEApMzQ2NGVpOmRlNztpN2k6OGcpaHV2bmQxcm53Zi5jbXNyNGdkMmAtLWQxLXNzMTU2LjNgYTBeYV40L2JfXzpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "wmplay": "https://v16m-default.akamaized.net/57ebfcb2099da4b3b1c877b9b7fac4ea/61c08a69/video/tos/alisg/tos-alisg-pve-0037c001/a8dd33bcbc37498196209b4241848966/?a=1128&br=2796&bt=1398&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M2dqaWg6ZmV1OTMzODczNEApOTNnOjVlNTxlNzM2Zjk2O2cpaHV2bmQxcm53Zi5jbXNyNGdkMmAtLWQxLXNzYDUxNjEzMTQuYjRhY18uYDpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "music": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7025889719040871169.mp3",
    "music_info": {
      "id": "7025889690838469378",
      "title": "Bilang Pa Mama Mantu",
      "play": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7025889719040871169.mp3",
      "cover": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/2b9eccac2e23c194f568bf483d8c0f06.webp?x-expires=1640070000&x-signature=1JTV9lK%2F32PluOPIYgzOmgxbTSc%3D",
      "author": "Nusantarahouse",
      "original": true,
      "duration": 20,
      "album": ""
    },
    "play_count": 270340,
    "digg_count": 31001,
    "comment_count": 211,
    "create_time": 1636546609,
    "author": {
      "id": "270898760635813888",
      "unique_id": "readhevaaa",
      "nickname": "🤍",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/c3f2882d18dc16dbe75e92ac176cc430~c5_300x300.webp?x-expires=1640070000&x-signature=ahtupdx%2FxWga%2FKz1Z1XfRYppEnA%3D"
    }
  }, {
    "video_id": "7032215126509882625",
    "region": "JP",
    "title": "本当に可愛すぎる🤦‍♀️#石原さとみ",
    "cover": "https://p16-sign-sg.tiktokcdn.com/large/tos-alisg-p-0037/bc248ce8da1b4ce3958bdf434c20cd84.jpeg?x-expires=1640005200&x-signature=HMK0O1vzxOYetuhVFOtui573hEA%3D",
    "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/4d015ffabaa44e659cfc7fc90d63e66c_1637315176~tplv-tiktokx-360p.jpeg?x-expires=1640005200&x-signature=%2BM7GiqnSI5Lbu0PzE8wWOHIn%2Bmw%3D",
    "play": "https://v16m-default.akamaized.net/826e08c00ad996447810b20b718ae508/61c08a74/video/tos/alisg/tos-alisg-pve-0037/75a38c99cf3244f5882bc0bb9921e873/?a=1128&br=2256&bt=1128&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=anQ2bTk6ZnJxOTMzODgzNEApaWkzOTU7ZmU3Nzs5PDhlPGcpaHV2bmQxcm53ZjIzYG9yNG8xX2AtLWQvLXNzNjEyNTY0MzEwNV40NC8yMzpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "wmplay": "https://v16m-default.akamaized.net/e81cb0a212de982d3197bb73229e6a27/61c08a74/video/tos/alisg/tos-alisg-pve-0037/5bc571d4c5a04d5d87e6483a81138b0d/?a=1128&br=1986&bt=993&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=anQ2bTk6ZnJxOTMzODgzNEApZDc6Z2U2Nzs8N2U6Omg8OGcpaHV2bmQxcm53ZjIzYG9yNG8xX2AtLWQvLXNzMl4xXzFgNS1fNmEwY2ItYTpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "music": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7032215039738137345.mp3",
    "music_info": {
      "id": "7032215067965917953",
      "title": "original sound - 💗💗💗",
      "play": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7032215039738137345.mp3",
      "cover": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/c49ff301fdf9ea96dad0523ee43781bb.webp?x-expires=1640070000&x-signature=5%2Fl0q%2BEypMxe8vqrVhEZWbVw2KQ%3D",
      "author": "💗💗💗",
      "original": true,
      "duration": 26,
      "album": ""
    },
    "play_count": 1451374,
    "digg_count": 113319,
    "comment_count": 219,
    "create_time": 1637315175,
    "author": {
      "id": "6998514701470565378",
      "unique_id": "aaa_4521",
      "nickname": "💗💗💗",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/c49ff301fdf9ea96dad0523ee43781bb~c5_300x300.webp?x-expires=1640070000&x-signature=p0VWt3HmNL2t6l0%2F%2BN2N2EqVEu8%3D"
    }
  }]
}
```

</details>


# GetVideoComments

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/comment/list```

### method: ```get|post```

### request params

```
url - id | TT Link | Short Link
count - 1 ~ 50 default 20
cursor - hasMore is true, input cursor load more
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "comments": [{
      "id": "7044622953448211247",
      "text": "yall pierce your kids ears and get them circumcised at birth bye😭",
      "create_time": 1640204108,
      "digg_count": 3688,
      "reply_total": 106,
      "user": {
        "id": "6942236779949032453",
        "region": "US",
        "sec_uid": "MS4wLjABAAAAQr0Qu43Lo4LergoL419TiYfdjejBXW1QWRxB3O-933b5pcpp9bXf6YE_Si9qH4mJ",
        "unique_id": "ogscarlettt",
        "nickname": "scarlett🦦",
        "signature": "7teen👺",
        "avatar": "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/1594805258216454~c5_300x300.webp?x-expires=1640329200&x-signature=YfOn7%2B%2FACh1IgB18qtP7KLz3PV8%3D",
        "aweme_count": 0,
        "follower_count": 0,
        "favoriting_count": 0,
        "total_favorited": 0,
        "youtube_channel_title": "",
        "youtube_channel_id": "",
        "twitter_name": "",
        "twitter_id": ""
      },
      "status": 1
    }],
    "total": 4111,
    "cursor": 1,
    "hasMore": true
  }
}
```

</details>



# GetReplyByCommentId

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/comment/reply```

### method: ```get|post```

### request params

```
comment_id
count - 1 ~ 50 default 20
cursor - hasMore is true, input cursor load more
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "comments": [{
      "id": "7044645747689915142",
      "text": "I have a cane corso kennel. people don't realize how bad their ears get infected without being cropped. also their tales hurt you and them. lol",
      "create_time": 1640209408,
      "digg_count": 123,
      "user": {
        "id": "6905361194452091910",
        "region": "US",
        "sec_uid": "MS4wLjABAAAAG9Nliqj6TwTciapx2TZUVPg8O0LOS2GRlGnaYBn3hVVwf52hB0c3pmOsC5iyzixw",
        "unique_id": "candcsmommabeth",
        "nickname": "user9848869460800",
        "signature": "",
        "avatar": "https://p77-sign-va.tiktokcdn.com/tos-maliva-avt-0068/b22a53d00812e9e3738a065c000ff3cd~c5_300x300.webp?x-expires=1640329200&x-signature=ho8FxcRlV04hlHl7PuNLPmFbnls%3D",
        "aweme_count": 0,
        "follower_count": 0,
        "favoriting_count": 0,
        "total_favorited": 0,
        "youtube_channel_title": "",
        "youtube_channel_id": "",
        "twitter_name": "",
        "twitter_id": ""
      },
      "status": 1
    }],
    "total": 107,
    "cursor": 1,
    "hasMore": true
  }
}
```

</details>

# GetUserLiked

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/user/favorite```

### method: ```get|post```

### request params

```
unique_id - Example @mineodesu69 
count - 10 (1 ~ 35)
cursor - 0 (hasMore is true, input cursor load more)
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "videos": [{
      "video_id": "7038583619568389377",
      "region": "JP",
      "title": "tiktok、airdropできるようになったってマジ？😳夜景デート風🌃Tokyo🇯🇵🗼#渋谷スカイ",
      "cover": "https://p16-sign-sg.tiktokcdn.com/obj/tos-alisg-p-0037/c16c2d0d14c34b8983c11ea04903fca4_1638797959?x-expires=1640271600&x-signature=YCeylz2QSChiPxStRPp0xW53dd8%3D",
      "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/a14b9128a95345d4a3b3a799fc1c9c45_1638797958~tplv-tiktokx-360p.jpeg?x-expires=1640271600&x-signature=IWpj1kIqmX55adHf%2B19jsML6A%2Fg%3D",
      "play": "https://v16m-default.akamaized.net/aadbaa6bfae57b861581088669f34571/61c4914e/video/tos/alisg/tos-alisg-pve-0037/f1affac75c00441e946a35a574ac919d/?a=0&br=5736&bt=2868&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122309095201024407504816DDBC87&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=and1dzc6ZjM0OTMzODgzNEApNGc4Mzk7ZTs8N2g2NTY4OWdwYzVqcjRvMmtgLS1kLy1zczYtMGNiNjEtXjAxMWMwLzE6Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16m-default.akamaized.net/942c75fa4c2b9beb5dec90ed9682a8b8/61c4914e/video/tos/alisg/tos-alisg-pve-0037/4affaf86da0e4e83b3a04bcc960a9247/?a=0&br=4290&bt=2145&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122309095201024407504816DDBC87&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=and1dzc6ZjM0OTMzODgzNEApNDc2NWU4ZTxpNzM7NTs2OWdwYzVqcjRvMmtgLS1kLy1zc15jYmBhLTViLmM1X2E1NmM6Yw%3D%3D&vl=&vr=",
      "music": "https://sf16-sg-default.akamaized.net/obj/tiktok-obj/69d1ca9243c51693589717e7b22ec9d5.mp3",
      "music_info": {
        "id": "6827024348956707585",
        "title": "original sound - sonshiu",
        "play": "https://sf16-sg-default.akamaized.net/obj/tiktok-obj/69d1ca9243c51693589717e7b22ec9d5.mp3",
        "cover": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tiktok-obj/1630687017376769.webp?x-expires=1640336400&x-signature=Fq79oDcG11yqNTRV24lTuJgQdr4%3D",
        "author": "Patrika",
        "original": true,
        "duration": 14,
        "album": ""
      },
      "play_count": 373833,
      "digg_count": 54513,
      "comment_count": 1486,
      "create_time": 1638797957,
      "author": {
        "id": "75640309710",
        "unique_id": "0906yu_rin",
        "nickname": "ゆーり🍎🐥(21)yuri",
        "avatar": "https://p16-sign-sg.tiktokcdn.com/tiktok-obj/1665329740659714~c5_300x300.webp?x-expires=1640336400&x-signature=8ac7jcVRA9VomO81s0DeWcl12uU%3D"
      }
    }],
    "cursor": "1638823002000",
    "hasMore": true
  }
}
```

</details>


# SearchVideoByKeywords

<details>
<summary>Details</summary>

### api: ```https://www.tikwm.com/api/feed/search```

### method: ```get|post```

### request params

```
keywords - Example 踊ってみた
count - 10 (1 ~ 30)
cursor - 0 (hasMore is true, input cursor load more)
```

### response: Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "videos": [{
      "video_id": "7029978737823272193",
      "region": "JP",
      "title": "リクエストにお応えして堤アナ踊ってみた💃#堤礼実 #踊ってみた #めざまし8しか勝たん #朝8時はめざまし8 #DanceStudioCielo",
      "cover": "https://p16-sign-sg.tiktokcdn.com/obj/tos-alisg-p-0037/59a4404355084892979e7c845cf2c228_1636794478?x-expires=1640466000&x-signature=XpNyf1O%2BHY6n8g6LgXGRvi5UNFk%3D",
      "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/3954bffa3e6b40a0a141298356c2afb9_1636794477~tplv-tiktokx-360p.jpeg?x-expires=1640466000&x-signature=sOuRMc0z%2BZQ%2FcXPNXy%2BDM5Ti2Vw%3D",
      "play": "https://v16.tiktokcdn.com/adcd31556a4b1da0ba4a62ffac87f472/61c78d72/video/tos/alisg/tos-alisg-pve-0037/c65f3f6934b64f15b7c8d2d2b91aec02/?a=1233&br=3256&bt=1628&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=xo0Z~44pgumInz7T&l=2021122515295901018906604901D10A43&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M2c3ZWg6ZnNyOTMzODgzNEApNWlnZGg7ZWQ0Nzc7O2RmM2cxbjI1cjQwLTRgLS1kLy1zczA0MV8tNTVjXy4xX2AyNDI6Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16.tiktokcdn.com/b4a490d54f4ee994f2af04e82531f622/61c78d72/video/tos/alisg/tos-alisg-pve-0037/e83604561a014e179b3c47a7412ab39c/?a=1233&br=2698&bt=1349&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=xo0Z~44pgumInz7T&l=2021122515295901018906604901D10A43&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M2c3ZWg6ZnNyOTMzODgzNEApOmYzPGdpO2VoN2ZlOTNnZWcxbjI1cjQwLTRgLS1kLy1zczAuMS1iNl9eYl9iL2NjMTY6Yw%3D%3D&vl=&vr=",
      "music": "",
      "music_info": {
        "id": "7002798693380261889",
        "title": "The Feels",
        "play": "",
        "cover": "https://p16-amd-va.tiktokcdn.com/img/tos-useast2a-v-2774/624969d6be8247ff88fde04a996efec7~c5_720x720.jpeg",
        "author": "",
        "original": false,
        "duration": 57,
        "album": "The Feels"
      },
      "play_count": 8237295,
      "digg_count": 577778,
      "comment_count": 4658,
      "create_time": 1636794475,
      "author": {
        "id": "6940469576224621570",
        "unique_id": "mezamashi8tiktok",
        "nickname": "めざまし8",
        "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/8de53cc63d6c90194872e0aa156ed294~c5_300x300.webp?x-expires=1640530800&x-signature=F3ng4SGSdmAoNn5Fg7tfedsjho4%3D"
      }
    }],
    "cursor": 1,
    "hasMore": 1
  }
}
```

</details>


# SearchChallenge(hashTag)

<details>
<summary>Detail</summary>

### api：```https://www.tikwm.com/api/challenge/search```

### method：```get|post```

### request params

```
keywords - Example girl
count - 10(1~30)
cursor - 0 (hasMore is true, input cursor load more)
```

### response：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "challenge_list": [{
      "id": "5932",
      "cha_name": "girl",
      "desc": "",
      "user_count": 11045675,
      "view_count": 75264379409,
      "is_pgcshow": false,
      "is_commerce": false,
      "is_challenge": false,
      "is_strong_music": false,
      "type": 2,
      "cover": ""
    }, {
      "id": "59274",
      "cha_name": "hotgirl",
      "desc": "",
      "user_count": 386828,
      "view_count": 5305983314,
      "is_pgcshow": false,
      "is_commerce": false,
      "is_challenge": false,
      "is_strong_music": false,
      "type": 1,
      "cover": ""
    }, {
      "id": "560200",
      "cha_name": "bikinigirl",
      "desc": "",
      "user_count": 20018,
      "view_count": 984545642,
      "is_pgcshow": false,
      "is_commerce": false,
      "is_challenge": false,
      "is_strong_music": false,
      "type": 1,
      "cover": ""
    }],
    "cursor": 3,
    "hasMore": true
  }
}
```

</details>

# GetChallenge(hashTag)Detail

<details>
<summary>Detail</summary>

### api：```https://www.tikwm.com/api/challenge/info```

### method：```get|post```

### request params

```
challenge_id - Example 5932 
challenge_name - Example girl 
```

### response：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "id": "5932",
    "cha_name": "girl",
    "desc": "",
    "user_count": 11045671,
    "view_count": 75264559481,
    "is_pgcshow": false,
    "is_commerce": false,
    "is_challenge": false,
    "is_strong_music": false,
    "type": 2,
    "cover": ""
  }
}
```

</details>


# GetChallenge(hashTag)Feed

<details>
<summary>Detail</summary>

### api：```https://www.tikwm.com/api/challenge/posts```

### method：```get|post```

### request params

```
challenge_id - Example 5932 
count - 10(1~30)
cursor - 0 (hasMore is true, input cursor load more)
```

### response：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "videos": [{
      "video_id": "6903138515253497089",
      "region": "BR",
      "title": "#confidence #beauty #body #bully #hate #kindness #girl #animation #animação #engraçado #funny #fyp #foryoupage #paravoce #foryou #paravocê BY BLUEZOO",
      "cover": "https://p16-sign-sg.tiktokcdn.com/obj/tos-alisg-p-0037/4e3e186d97434fa9bc68ea08faba4d46_1607262190?x-expires=1641373200&x-signature=%2FH5rEa6raC6SDvDDbEfpkTNI1ac%3D",
      "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/1223c4cb78584b7ba1509bf440fc53d0_1607262188~tplv-tiktokx-360p.jpeg?x-expires=1641373200&x-signature=Er4QTwRcsf%2BnQhzGCGs7GdrlCH0%3D",
      "play": "https://v16m-default.akamaized.net/814884ce348e4597741a09c8072fee5d/61d568f9/video/tos/alisg/tos-alisg-pve-0037c001/78819e9e6e6942d59ddd320e1886bef7/?a=0&br=1608&bt=804&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=6&er=&ft=w.1R0FaWkag3-I&l=202201050345340102450400691D03EF07&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M3l2b2lya21neTMzaDczM0ApM2Y8Ojo0OTw6N2loNzQzPGc1Ni9jNDNeczNfLS0yMTRzc2MyMGIvNi9hNmFhXzAyYl86Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16m-default.akamaized.net/92ae7453fab18f4879f6ecb83bafdaf5/61d568f9/video/tos/alisg/tos-alisg-pve-0037c001/05b91ae0c6ca46b6a63edadf13ada70f/?a=0&br=1750&bt=875&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FaWkag3-I&l=202201050345340102450400691D03EF07&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M3l2b2lya21neTMzaDczM0ApaDg3aWZnaWU3NzlpZWU4Z2c1Ni9jNDNeczNfLS0yMTRzc15gNWIzLi1iNjY0MDBfNjI6Yw%3D%3D&vl=&vr=",
      "music": "https://sf16-sg-default.akamaized.net/obj/tiktok-obj/6903138665610939138.mp3",
      "music_info": {
        "id": "6903138694685920002",
        "title": "original sound - Illustration Candy",
        "play": "https://sf16-sg-default.akamaized.net/obj/tiktok-obj/6903138665610939138.mp3",
        "cover": "https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/265066ea61d7a08de12511559f037955~c5_1080x1080.webp?x-expires=1641438000&x-signature=5S9q7Ihh5EO1ALyE5uJxOynBjtI%3D",
        "author": "Illustration Candy",
        "original": true,
        "duration": 58,
        "album": ""
      },
      "play_count": 46179804,
      "digg_count": 9180341,
      "comment_count": 47647,
      "create_time": 1607262185,
      "author": {
        "id": "6833146616305550342",
        "unique_id": "illustrationcandy",
        "nickname": "Illustration Candy",
        "avatar": "https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/265066ea61d7a08de12511559f037955~c5_300x300.webp?x-expires=1641438000&x-signature=p9Wv5z2vYK1Lh91fr9%2By7xQY5vw%3D"
      }
    }, {
      "video_id": "7023803446197292334",
      "region": "US",
      "title": "The results will shock you🤣🤣🤣 #zombie #halloween #halloweenlook #halloweenishere #zombies #beauty #women #girl #viral #makeup #amazing #fyp",
      "cover": "https://p16-sign.tiktokcdn-us.com/obj/tos-useast5-p-0068-tx/aa984f4d6c4e414dafba64dd34741434_1635356684?x-expires=1641373200&x-signature=2IvpwldHqpzRUwT9T18XemmtjbM%3D",
      "origin_cover": "https://p16-sign.tiktokcdn-us.com/tos-useast5-p-0068-tx/677f85b3b5354a999b657c37382d2bcd_1635356684~tplv-tiktokx-360p.jpeg?x-expires=1641373200&x-signature=RgwedFs6g0y2jZgHmaIj97EKZss%3D",
      "play": "https://v16m-default.akamaized.net/bc27bc66a1607f161a2a84a5880e76d7/61d568f1/video/tos/useast5/tos-useast5-pve-0068-tx/5618dc88267f48dca150d0e5d04e7811/?a=0&br=448&bt=224&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=6&er=&ft=w.1R0FaWkag3-I&l=202201050345340102450400691D03EF07&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=am1zdzQ6ZnJyODMzZzczNEApaTU7ZWc1Nzw0Nzo6Z2Q0aWdtbC4tcjRfcnBgLS1kMS9zczEvLy0yMWFhNTUvYmIyXjM6Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16m-default.akamaized.net/2675425fc35f4a84ea27664c2d6255cf/61d568f1/video/tos/useast5/tos-useast5-ve-0068c004-tx/489a6ec220674f5aa4080112bc8b5669/?a=0&br=648&bt=324&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FaWkag3-I&l=202201050345340102450400691D03EF07&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=am1zdzQ6ZnJyODMzZzczNEApOjxmZDllNWQ6NzxpZmlnOWdtbC4tcjRfcnBgLS1kMS9zc2NgMDNgYV9fMi4wNV8uYS06Yw%3D%3D&vl=&vr=",
      "music": "https://sf16-sg-default.akamaized.net/obj/tos-alisg-ve-2774/7318acd719bc42a68eb69a1f34c10201",
      "music_info": {
        "id": "6704977837100632066",
        "title": "House of Memories",
        "play": "https://sf16-sg-default.akamaized.net/obj/tos-alisg-ve-2774/7318acd719bc42a68eb69a1f34c10201",
        "cover": "https://p16-sg-default.akamaized.net/aweme/720x720/tos-alisg-v-2774/ba36284f65324036a082458026f66a97.jpeg",
        "author": "",
        "original": false,
        "duration": 60,
        "album": "Death of a Bachelor"
      },
      "play_count": 74674120,
      "digg_count": 6454403,
      "comment_count": 51258,
      "create_time": 1635356683,
      "author": {
        "id": "7003035073880556550",
        "unique_id": "howitworking",
        "nickname": "howitworking",
        "avatar": "https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/e46c29a4cb618a5934df0707ec3305e2~c5_300x300.webp?x-expires=1641438000&x-signature=atBP7zLkzXgoZ3XZ%2Bp6uhDhXwNw%3D"
      }
    }, {
      "video_id": "6964490620589067525",
      "region": "US",
      "title": "#fyp accurate representation of me playing soccer in high school. 🧍🏽‍♀️⚽️ #fyp #sport #girl #soccer #hit #hair #bench",
      "cover": "https://p16-sign-va.tiktokcdn.com/obj/tos-maliva-p-0068/46caf53571174a5d8dde53b2047f0d39_1621546840?x-expires=1641373200&x-signature=IEHS92luad8Ap51KcKNdHYQ6vmg%3D",
      "origin_cover": "https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/525606b85f154f91a91e393380d8aec4_1621546840~tplv-tiktokx-360p.image?x-expires=1641373200&x-signature=jxIOKODo2%2BxIVlJt1FE6UkEBFmI%3D",
      "play": "https://v16m-default.akamaized.net/1c3c0dc4669b0638dfba577aab812288/61d56902/video/tos/useast2a/tos-useast2a-pve-0068/a459bee936244df0a498f6cdc611f632/?a=0&br=2320&bt=1160&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=6&er=&ft=w.1R0FaWkag3-I&l=202201050345340102450400691D03EF07&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=anBkd2VkbmxnNTMzNzczM0ApPDg6NDY3NDxlNzVpPDhnaWdqLzM0LWQtYWdgLS1kMTZzc2EvXjEtMzBgMmJiMmAyNi06Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16m-default.akamaized.net/a4fa0746a7c551a051ab0e00ee5c3c1d/61d56902/video/tos/useast2a/tos-useast2a-pve-0068/302ea269fd0a4389a75cc9b1ef95694b/?a=0&br=2454&bt=1227&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FaWkag3-I&l=202201050345340102450400691D03EF07&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=anBkd2VkbmxnNTMzNzczM0ApNWQ4Ojc0PDw5Nzo3ZTY5N2dqLzM0LWQtYWdgLS1kMTZzczUuLV81NDViMmMyL2FfYTE6Yw%3D%3D&vl=&vr=",
      "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/6964490636234361606.mp3",
      "music_info": {
        "id": "6964490489051941638",
        "title": "original sound - Emillee",
        "play": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/6964490636234361606.mp3",
        "cover": "https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/0bc2395bbb595eb22414a16ee6a0fa55~c5_1080x1080.webp?x-expires=1641438000&x-signature=6u0FiCwJswd9sSH%2F9JhjI8u2iqY%3D",
        "author": "Emillee",
        "original": true,
        "duration": 68,
        "album": ""
      },
      "play_count": 20954285,
      "digg_count": 5721639,
      "comment_count": 24702,
      "create_time": 1621546837,
      "author": {
        "id": "6734345033501819909",
        "unique_id": "peachypollo",
        "nickname": "Emillee",
        "avatar": "https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/0bc2395bbb595eb22414a16ee6a0fa55~c5_300x300.webp?x-expires=1641438000&x-signature=wCG1smQrwGz1gupNScbw6YfYeYU%3D"
      }
    }],
    "cursor": 3,
    "hasMore": true
  }
}
```

</details>

# GetSimilarUsers

<details>
<summary>Detail</summary>

### api：```https://www.tikwm.com/api/user/discover```

### method：```get|post```

### request params

```
unique_id - Example @ovaksss 
```

### response：Json

```json
{
  "code": 0,
  "msg": "success",
  "processed_time": 0.3581,
  "data": [{
    "user": {
      "id": "6958992391789577217",
      "shortId": "",
      "uniqueId": "xz.audio",
      "nickname": "✨ オーディオ ✨",
      "avatarLarger": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/10dddc2d9da7ee8dc7c6217287540319.jpeg?x-expires=1655031600&x-signature=D5MrHPfQSNJE%2FPUQ8%2BipTwt4jMA%3D",
      "avatarMedium": "https://p16-sign-sg.tiktokcdn.com/aweme/720x720/tos-alisg-avt-0068/10dddc2d9da7ee8dc7c6217287540319.jpeg?x-expires=1655031600&x-signature=uOS1UKpMq892Xg2aGs9kAtuRNig%3D",
      "avatarThumb": "https://p16-sign-sg.tiktokcdn.com/aweme/100x100/tos-alisg-avt-0068/10dddc2d9da7ee8dc7c6217287540319.jpeg?x-expires=1655031600&x-signature=yKRtSUpn6kV3HcipVeO1FYpKeDw%3D",
      "signature": "Hi 💓\n⬆️Реклама в Директ⬆️ ^^\n\n⬇️My telegram channel⬇️\n⬇️Полные треки⬇️",
      "verified": false,
      "secUid": "MS4wLjABAAAAwFUy_CqWCz6Gi1ng6Dk790b5uWPkhCCx6FAd_RRZgydbOS59p1TBDYu6_a6IQ13M",
      "ftc": false,
      "relation": 0,
      "openFavorite": false,
      "commentSetting": 0,
      "duetSetting": 0,
      "stitchSetting": 0,
      "privateAccount": false,
      "secret": false,
      "isADVirtual": false,
      "roomId": "",
      "ttSeller": false
    },
    "stats": {
      "followerCount": 1100000,
      "followingCount": 14,
      "heart": 15500000,
      "heartCount": 15500000,
      "videoCount": 108,
      "diggCount": 45900
    },
    "itemList": []
  }, {
    "user": {
      "id": "6621429828086235137",
      "shortId": "",
      "uniqueId": "efron_and_bass",
      "nickname": "Efron",
      "avatarLarger": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/134a70d37ee7eaeb6534171f40cdb404.jpeg?x-expires=1655031600&x-signature=S%2FJ8lBtKL4rkBE8OxBKxFngT4og%3D",
      "avatarMedium": "https://p16-sign-sg.tiktokcdn.com/aweme/720x720/tos-alisg-avt-0068/134a70d37ee7eaeb6534171f40cdb404.jpeg?x-expires=1655031600&x-signature=MdwDdgQjs8CZEUP3TflX25DBR74%3D",
      "avatarThumb": "https://p16-sign-sg.tiktokcdn.com/aweme/100x100/tos-alisg-avt-0068/134a70d37ee7eaeb6534171f40cdb404.jpeg?x-expires=1655031600&x-signature=qBQ%2F2sqzuXA03ZlnEjbOg5GBvMI%3D",
      "signature": "",
      "verified": false,
      "secUid": "MS4wLjABAAAAUajZYzsgntyev2QdS35QdBCVIOMI-T6L-mz5SD83T08rlnNazVhen0K9OEvSqjTq",
      "ftc": false,
      "relation": 0,
      "openFavorite": true,
      "commentSetting": 0,
      "duetSetting": 0,
      "stitchSetting": 0,
      "privateAccount": false,
      "secret": false,
      "isADVirtual": false,
      "roomId": "",
      "ttSeller": false
    },
    "stats": {
      "followerCount": 135400,
      "followingCount": 146,
      "heart": 1700000,
      "heartCount": 1700000,
      "videoCount": 326,
      "diggCount": 13100
    },
    "itemList": []
  }, {
    "user": {
      "id": "6851883819194237958",
      "shortId": "",
      "uniqueId": "_danilgoncharov_",
      "nickname": "Данил Гончаров",
      "avatarLarger": "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/6892292461432209414~c5_1080x1080.jpeg?x-expires=1655031600&x-signature=u9skjyAx8vyL5gWshlEKfNPLoM0%3D",
      "avatarMedium": "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/6892292461432209414~c5_720x720.jpeg?x-expires=1655031600&x-signature=qD4SjnBeybJMhiXmI69KTxr2Uss%3D",
      "avatarThumb": "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/6892292461432209414~c5_100x100.jpeg?x-expires=1655031600&x-signature=QKTuAp4Cpyrbln72BERQuGBM8Hg%3D",
      "signature": "",
      "verified": false,
      "secUid": "MS4wLjABAAAA675s6pAe_MtskMRixNIjxFPXsybA1XMlvZWvTv_Uvk0k0OCI7i5ntK0IbKCE4amY",
      "ftc": false,
      "relation": 0,
      "openFavorite": false,
      "commentSetting": 0,
      "duetSetting": 0,
      "stitchSetting": 0,
      "privateAccount": false,
      "secret": false,
      "isADVirtual": false,
      "roomId": "",
      "ttSeller": false
    },
    "stats": {
      "followerCount": 6360,
      "followingCount": 47,
      "heart": 612000,
      "heartCount": 612000,
      "videoCount": 210,
      "diggCount": 2770
    },
    "itemList": []
  }]
}
```

</details>

# ApiSignature

<details>
<summary>Detail</summary>

### api：```https://www.tikwm.com/api/service/sign```

### method：```post```

### request params

```
params - Example user_id=107955&os_api=25&device_type=A5010&manifest_version_code=250906&app_name=musically_go&version_name=25.9.6&app_type=normal&channel=googleplay&update_version_code=250906&device_platform=android&build_number=25.9.6&version_code=250906&app_language=en&device_brand=OnePlus&os_version=7.1.2&aid=1340&iid=7127540981901510406&device_id=7127539617850918405
headers - Example {"user-agent":"okhttp/3.10.0.1"}
```

### response：Json

```json
{
  "code": 0,
  "msg": "success",
  "processed_time": 0.1861,
  "data": {
    "X-Argus": "x/JDlgQfFaqD4LDzEaTc02VxClawQWTQDjEkJJyc500nKW7efEdDDSupZ1j8grQcP7u9ciqVWO++TqkZrDp6G6TRJ6W3Du0UPJwKBgAPvVZeR+aJu992afpmIwpEehpUYFfjS11NAcfuz1Ts4VgEyQmxWuKVYE1vQI6J96FI7aCibdHjL0DuU6pmis7h+gi/zmHhA2jzcrkHOZuIiR4ute7/3SckNgVn+sZSVsPqrf+bWg==",
    "X-Gorgon": "040460bb000089995280e59cb71def7569792929ac219011ea4c",
    "X-Khronos": "1659518338",
    "X-Ladon": "vvBDYNbM94auKvbgp9EJt5+IJE2YFs5sbhiO1FCdViy+pVAo"
  }
}
```

</details>