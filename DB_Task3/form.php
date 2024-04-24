<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form action="insert.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        
        <label for="publisher">Publisher:</label><br>
        <input type="text" id="publisher" name="publisher"><br>
        
        <label for="genre">Genre:</label><br>
        <input type="text" id="genre" name="genre"><br>
        
        <label for="isbn">ISBN:</label><br>
        <input type="text" id="isbn" name="isbn"><br>
        
        <label for="quantity">Quantity Available:</label><br>
        <input type="text" id="quantity" name="quantity"><br>
        
        <input type="submit" value="Add Book">
    </form>
</body>
</html>
