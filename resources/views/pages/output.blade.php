<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test task -- output</title>
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var timestamp={{$timestamp}};
    </script>
    <script src="/js/emoji-get.js" type="text/javascript"></script>
</head>
<body>
<div>
    <div class="recent-data">
        @foreach ($phrases as $phrase)
            <div>
            {{$phrase->text}}
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
