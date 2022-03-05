<?php 

require_once '..\vendor\autoload.php';
use Dotenv\Dotenv;

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;
use Laminas\Diactoros\Response\RedirectResponse;

use App\Models\Blog;
use App\Controllers\IndexController;
use App\Controllers\UsersController;
use App\Controllers\PagesController;


?>