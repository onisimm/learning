<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Latest Videos</title>
        
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css?v=').time()}}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/latestVideos.css?v=').time()}}" >
    </head>
    <body>
        <div class="center div-box">
            <h1>Latest videos</h1>
            <div class="flexRowContainer">
                <div class="flexElement firstFlexElement">
                    <a href="#">
                        <div class="imgContainer">
                            <img src="{{ asset('images/thumbnail.jpg') }}" alt="Video thumbnail" class="latestVideoThumbnail">
                            <div class="subjectTag">
                                Faith
                            </div>
                        </div>
                        <div class="videoReleaseDate">
                            Data - Nume
                        </div>
                        <div class="videoTitle">
                            <h3>Titlul Video-ului</h3>
                        </div>
                    </a>    
                </div>
                <div class="flexElement">
                    <a href="#">
                        <div class="imgContainer">
                            <img src="{{ asset('images/thumbnail.jpg') }}" alt="Video thumbnail" class="latestVideoThumbnail">
                            <div class="subjectTag">
                                Faith
                            </div>
                        </div>
                        <div class="videoReleaseDate">
                            Data - Nume
                        </div>
                        <div class="videoTitle">
                            <h3>Titlul Video-ului</h3>
                        </div>
                    </a>    
                </div>
                <div class="flexElement lastFlexElement">
                    <a href="#">
                        <div class="imgContainer">
                            <img src="{{ asset('images/thumbnail.jpg') }}" alt="Video thumbnail" class="latestVideoThumbnail">
                            <div class="subjectTag">
                                Faith
                            </div>
                        </div>
                        <div class="videoReleaseDate">
                            Data - Nume
                        </div>
                        <div class="videoTitle">
                            <h3>Titlul Video-ului mai lung un pic sa fie pe mai multe randuri</h3>
                        </div>
                    </a>    
                </div>
            </div>
            <button type="button" class="button smallButton" onclick="switchView(videos)">See More</button>
        </div>
    </body>
</html>
