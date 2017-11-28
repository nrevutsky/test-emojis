<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test task -- input</title>
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="/js/emoji.js" type="text/javascript"></script>
</head>
<body>
<div>
    <div class="recent-data">
        @foreach ($phrases as $phrase)
            <div>
            {{ $phrase->text }}
            </div>
        @endforeach
    </div>
    <input type="text" id="input-field"><input type="submit" value="Send" id="submit-button">
    <div class="emoji-list">
        @foreach ($emoji_list as $emoji)
        <a data-text="{!! $emoji !!}">{!! $emoji !!}</a>
        @endforeach
    </div>

</div>

</body>
</html>
