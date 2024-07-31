<!DOCTYPE html>
<html>
<head>
    <title>Path Traversal Demo</title>
</head>
<body>
    <h1>Path Traversal Vulnerable File Reader</h1>
    <form action="/read-file" method="GET">
        <input type="text" name="file" placeholder="Enter filename">
        <button type="submit">Read File</button>
    </form>
</body>
</html>