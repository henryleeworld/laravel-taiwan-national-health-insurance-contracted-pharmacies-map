<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="健保特約藥局口罩庫存地圖">
    <meta property="og:description" content="健保署口罩管控系統開放時間為 7 時至 23 時，口罩開放購買時間及方式，視各家健保特約藥局及衛生所作業而定。">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://i.imgur.com/l2VMxIj.png">
    <title>健保特約藥局口罩庫存地圖</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ol3/4.6.5/ol.css" type="text/css">
    <link rel="stylesheet" href="css/ol3-sidebar.min.css" type="text/css" />
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/dark-hive/jquery-ui.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/dark-hive/theme.min.css" crossorigin="anonymous">
    <style>
        body {
            padding: 0;
            margin: 0;
            overflow: hidden;
        }
        
        html,
        body,
        #map {
            height: 100%;
            font: 10pt "Helvetica Neue", Arial, Helvetica, sans-serif;
        }
        
        .lorem {
            font-style: italic;
            color: #AAA;
        }
        
        .ui-front {
            z-index: 9999;
        }
    </style>
    @yield('styles')
</head>

<body>
    @yield("content")
    <div id="map" class="sidebar-map"></div>
    <script src="js/routie.min.js" type="text/javascript" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous" defer></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ol3/4.6.5/ol.js" type="text/javascript" defer></script>
    <script src="js/ol5-sidebar.min.js" type="text/javascript" defer></script>
    <script src="js/main.js" type="text/javascript" defer></script>
</body>
</html>