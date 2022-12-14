<?php include __DIR__ . '/../header.php'; ?>
    <h1><?= $article->getName() ?></h1>
    <p><?= $article->getParsedText() ?></p>
    <p>Автор: <?= $article->getAuthor()->getNickname() ?></p>

    <h1>Комментарии</h1>


<?php foreach ($comments as $comment): ?>
    <?php if ($article->getId() === $comment->getArticleId()) { ?>
        <p id="comment<?php $comment->getId() ?>"><?= $comment->getAuthor()->getNickname() ?>:
            <?= $comment->getText() ?></p>
        <?php if (!empty($user)) { ?>
            <?php if ($user->getRole() === 'admin' || $user->getId() === $comment->getAuthorId()) { ?>
                <form action="/articles/<?= $article->getId() ?>/comments/<?= $comment->getId() ?>/edit" method="post">
                    <label for="text">Редактировать комментарий</label><br>
                    <textarea name="text" id="text" rows="2" cols="50"><?= $_POST['text'] ?? '' ?></textarea>
                    <input type="submit" value="Редактировать">
                </form>
                <a href="/articles/<?= $article->getId() ?>/comments/<?= $comment->getId() ?>/delete">Удалить</a>
            <?php } ?>
        <?php } ?>
        <hr>
    <?php } else {
        continue; ?>
        <p>Комментарии отсутствуют</p>
    <?php } ?>
<?php endforeach; ?>

<?php if (!empty($error)): ?>
    <div style="color: red;"><?= $error ?></div>
<?php endif; ?>
<?php if (!empty($user)) { ?>
    <form action="/articles/<?= $article->getId() ?>/comments" method="post">
        <label for="text">Написать комментарий</label><br>
        <textarea name="text" id="text" rows="4" cols="50"><?= $_POST['text'] ?? '' ?></textarea><br>
        <br>
        <input type="submit" value="Опубликовать">
    </form>
<?php } else { ?>
    <div>Комментирование доступно только авторизированным пользователям</div>
    <a href="/users/login">Войти</a> | <a
            href="/users/register">Зарегестрироваться</a>
<?php } ?>
<?php if (!empty($user) && $user->getRole() === 'admin') { ?>
    <a href="/articles/<?= $article->getId() ?>/edit">Редактировать</a>
    <a href="/articles/<?= $article->getId() ?>/delete">Удалить</a>
<?php } ?>
<?php include __DIR__ . '/../footer.php'; ?>