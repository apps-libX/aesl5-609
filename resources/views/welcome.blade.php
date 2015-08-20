<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        html, body {
            height : 100%;
        }

        body {
            margin      : 0;
            padding     : 0;
            width       : 100%;
            display     : table;
            font-weight : 100;
            font-family : 'Lato';
        }

        .container {
            text-align     : center;
            display        : table-cell;
            vertical-align : middle;
        }

        .content {
            text-align : center;
            display    : inline-block;
        }

        .title {
            font-size : 96px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">Welcome, {{ $planeta or 'Ausus' }}</div>

                @if (count($lists) > 1)
                    @foreach ($lists as $list)
                        {{ $list }} <br />
                    @endforeach
                @elseif (count($lists) == 1)
                    <p>You have one list: {{ $lists[0] }}.</p>
                @else
                    <p>You don't have any lists saved.</p>
                @endif

        </div>
    </div>
</body>
</html>
