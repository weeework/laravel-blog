<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Create Post</title>
</head>
<body>
    <h1>Halaman Create Post</h1>
    <form action="{{ route('post.store') }}" method="post">
        {{ csrf_field() }}
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="Body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>