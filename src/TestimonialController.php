<?php

namespace ShoutLara\Testimonial;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        return view('testimonial::testimonial');
    }

}