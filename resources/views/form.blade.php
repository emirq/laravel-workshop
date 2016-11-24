<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form action="/posts" method="POST">
                    {{ csrf_field() }}

                    <textarea name="body"></textarea>
                    <button type="submit">Add Post</button>
                </form>

                @if (count($errors))
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endif
            </div>
        </div>
    </body>
</html>
