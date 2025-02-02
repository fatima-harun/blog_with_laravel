<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'detail'])->where('id', '[0-9]+');
Route::get('/articles/partager', [ArticleController::class, 'partager']);
Route::post('/articles/sauvegarde', [ArticleController::class, 'sauvegarde']);
Route::get('/edit/{id}', [ArticleController::class, 'modifier']);
Route::post('/articles/update', [ArticleController::class, 'edit_article_traitement']);
Route::delete('/supprimer/{id}', [ArticleController::class, 'supprimer_article']);

Route::post('/commentaires/sauvegarder', [CommentaireController::class, 'sauvegarder']);
Route::get('/edite/{id}', [CommentaireController::class, 'changer']);
Route::post('/commentaire/updater', [CommentaireController::class, 'edit_commentaire_traitement']);
Route::delete('/enlever/{id}', [CommentaireController::class, 'drop_commentaire']);
