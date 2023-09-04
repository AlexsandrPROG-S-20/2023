<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт объявлений</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
            <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="login.php">Вход</a></li>
                    <li><a href="register.php">Регистрация</a></li>
                    <li><a href="post_ad.php">Дать объявление</a></li>
                    <li><a href="ads.php">Объявления</a></li>
                    <li>
                        <?php if (isset($_SESSION['username'])): ?>
                        <div class="user-info">
                            <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                        </div>
                        <?php endif; ?>
                    </li>
                </ul>
            </nav>
           
        </div>
    </header>
