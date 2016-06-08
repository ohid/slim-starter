<?php 

namespace App\Controllers;

use App\Models\User;
use App\Controllers\Controller;
use Slim\Views\Twig as View;

class HomeController extends Controller
{
	public function index($request, $response) 
	{
		return $this->view->render($response, 'welcome.twig');
	}

}