<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Teeny Tiny</h2>
        Long URL:
        <input type="url" name="long_url"><br>
        <input type="submit" name="submit" value="Shorten"><br>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST["long_url"];
    $sql = "INSERT INTO links (long_url) VALUES ('$url')";

    if(mysqli_query($conn, $sql)) {
        echo "URL shortened successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>