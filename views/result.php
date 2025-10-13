<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Twój skrócony link</title>
</head>
<body>
<h1>Oto Twój skrócony link:</h1>
<p>
    <a href="<?= htmlspecialchars($shortUrl) ?>" target="_blank">
        <?= htmlspecialchars($shortUrl) ?>
    </a>
</p>
<a href="/">Skróć kolejny link</a>
</body>
</html><?php
