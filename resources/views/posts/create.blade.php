<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
</head>

<body>
    <h1>Create a New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <div>
            <label for="posted_by">Posted By:</label>
            <input type="text" name="posted_by" id="posted_by" required>
        </div>
        <button type="submit">Submit Post</button>
    </form>
</body>

</html>
