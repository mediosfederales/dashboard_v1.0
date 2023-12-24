<!DOCTYPE html>
<html>
<head>
    <title>HTML Code Manipulation</title>
</head>
<body>
    <form action="_marketplace_process.php" method="post">
        <label>
            <input type="radio" name="action" value="insert" checked> Insert HTML Code
        </label>
        <br>
        <label>
            <input type="radio" name="action" value="delete"> Delete HTML Code
        </label>
        <br><br>
        <label for="div_id">Enter the ID of the <div> to delete:</label>
        <input type="text" id="div_id" name="div_id">
        <br><br>
        <textarea name="html_code" rows="15" cols="80"></textarea>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
