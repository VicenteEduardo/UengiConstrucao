<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
/* noticias */
Route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);

/* services */
Route::get('/servicos', ['as' => 'site.services', 'uses' => 'Site\ServiceController@index']);
Route::get('/servicos/{title}', ['as' => 'site.services.show', 'uses' => 'Site\ServiceController@show']);


/** about */
Route::get('/sobre', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);


Route::get('/Termos-de-Uso', ['as' => 'site.termsOfUse', 'uses' => 'Site\TermsOfUseController@index']);

/**Agentes */
Route::get('/agentes', ['as' => 'site.agentes', 'uses' => 'Site\Agentetroller@index']);
/**perguntas frequentes */
Route::get('/perguntas-frequentes', ['as' => 'site.faq', 'uses' => 'Site\FaqController@index']);



/* Galeria fotos */
Route::get('/galeria-de-Imagens/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria-de-Imagens/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);
/* Galeria de Videos */
Route::get('/galeria-de-Videos/', ['as' => 'site.videos', 'uses' => 'Site\VideoController@index']);

/**Contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);

Route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

/**Start Use Policies*/
Route::get('/Políticas-de-utilizacao', ['as' => 'site.usePolicies', 'uses' => 'Site\UsePoliciesController@index']);
/**End Use Policies */


/**Quality Reasearch*/
Route::get('/pesquisa-de-qualidade', ['as' => 'site.qualityResearch', 'uses' => 'Site\QualityResearchController@index']);
Route::post('/pesquisa-de-qualidade/store', ['as' => 'site.qualityResearch.store', 'uses' => 'Site\QualityResearchController@store']);


Route::get('/pesquisar', ['as' => 'site.search', 'uses' => 'Site\SearchController@create']);
Route::get('/pesquisar/find', ['as' => 'site.search.find', 'uses' => 'Site\SearchController@find']);

/* END SITE */



/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
