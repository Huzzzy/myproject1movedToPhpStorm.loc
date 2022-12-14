<?php

return [
    '~^articles/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
    '~^articles/(\d+)/edit$~' => [\MyProject\Controllers\ArticlesController::class, 'edit'],
    '~^articles/add$~' => [\MyProject\Controllers\ArticlesController::class, 'add'],
    '~^articles/(\d+)/comments$~' => [\MyProject\Controllers\CommentsController::class, 'commentsAdd'],
    '~^articles/(\d+)/comments/(\d+)/edit$~' => [\MyProject\Controllers\CommentsController::class, 'commentsEdit'],
    '~^articles/(\d+)/comments/(\d+)/delete$~' => [\MyProject\Controllers\CommentsController::class, 'commentsDelete'],
    '~^articles/(\d+)/delete$~' => [\MyProject\Controllers\ArticlesController::class, 'delete'],
    '~^users/register$~' => [\MyProject\Controllers\UsersController::class, 'signUp'],
    '~^users/(\d+)/activate/(.+)$~' => [\MyProject\Controllers\UsersController::class, 'activate'],
    '~^users/login$~' => [\MyProject\Controllers\UsersController::class, 'login'],
    '~^users/logout$~' => [\MyProject\Controllers\UsersController::class, 'logOut'],
    '~^users/profile$~' => [\MyProject\Controllers\ProfileController::class, 'profile'],
    '~^admin$~' => [\MyProject\Controllers\AdminController::class, 'admin'],
    '~^(\d+)$~' => [\MyProject\Controllers\MainController::class, 'page'],
    '~^before/(\d+)$~' => [\MyProject\Controllers\MainController::class, 'before'],
    '~^after/(\d+)$~' => [\MyProject\Controllers\MainController::class, 'after'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main']
];