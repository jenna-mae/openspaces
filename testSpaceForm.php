<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="processSpace.php">
        <input type="text" placeholder="name" name="name"/>
        <select name="category">
            <option value="">Select</option>
            <option value="Hangout">Hangout</option>
        </select>
        <input type="date" placeholder="date" name="date"/>
        <input type="text" placeholder="startTime" name="startTime"/>
        <input type="text" placeholder="endTime" name="endTime"/>
        <input type="text" placeholder="description" name="description"/>
        <input type="text" placeholder="link" name="link"/>
        <input type="submit"/>
    </form>
</body>
</html>