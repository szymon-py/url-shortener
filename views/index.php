<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Skracacz Linków</title>
</head>
<body>
<h1>Skróć swój link</h1>
<?php if (isset($error)): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>
<form action="/create" method="POST">
    <input type="text" name="url" size="50" placeholder="Wklej długi link tutaj" required>
    <button type="submit">Skróć</button>
</form>
</body>
</html>