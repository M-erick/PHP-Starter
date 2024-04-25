<!DOCTYPE html>
<html>
<head>
    <title>Create New Post</title>
</head>
<body>
<h1>Create New Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf  <label for="title">Title:</label>
    <input type="text" name="title" id="title" required> <br>

    <label for="content">Content:</label>
    <textarea name="content" id="content" required></textarea> <br>

    <button type="submit">Create Post</button>
</form>

</body>
</html>
