<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мой блог</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>

<table class="layout">
    <tr>
        <td colspan="2" class="header">
            Мой блог
            <?php if (!empty($user) && $user->getRole() === 'admin'){ ?>
            <a href="http://myproject1.loc/admin">Страница администратора</a>
            <?php } ?>
        </td>

    </tr>
    <tr>
        <td colspan="1">
            <?php if (!empty($user) && $user->getRole() === 'admin'): ?>
                <a href="http://myproject1.loc/articles/add">Добавить статью</a>
            <? endif; ?>
            <div style="text-align: right">
                <?php if (!empty($user)): ?>
                    Привет, <?= $user->getNickname() ?>  | <a href="http://myproject1.loc/users/logout">Выйти</a>
                <?php else: ?>
                    <a href="http://myproject1.loc/users/login">Войти</a> | <a
                            href="http://myproject1.loc/users/register">Зарегестрироваться</a>
                <? endif; ?>
            </div>
        </td>
        <td colspan="1">
            <?php if(!empty($user)) { ?>
                <a href="http://myproject1.loc/users/profile">Мой профиль</a>
            <?php } ?>
        </td>
    </tr>
    <tr>
        <td>