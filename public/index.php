<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Raihanachmad8\Belajar\PhpMvc\Middleware\AuthMiddleware;
use Raihanachmad8\Belajar\PhpMvc\Controller\HomeController;
use Raihanachmad8\Belajar\PhpMvc\Controller\ProductController;
use Raihanachmad8\Belajar\PhpMvc\App\Router;

Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/login", HomeController::class, "login");
Router::add("GET", "/register", HomeController::class, "register");
Router::add("GET", "/product/([0-9a-zA-Z]*)/category/([0-9a-zA-Z]*)", ProductController::class, "register", [AuthMiddleware::class]);

Router::run();