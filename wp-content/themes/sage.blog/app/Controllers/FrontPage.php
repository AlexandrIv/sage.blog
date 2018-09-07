<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Parials\HeaderSlider;

class FrontPage extends Controller
{
	public function slideshow(){
		return get_field('slideshow', 'option');
	}

}
