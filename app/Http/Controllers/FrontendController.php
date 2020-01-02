<?php

namespace App\Http\Controllers;

use App\Abouts;
use App\Banners;
use App\Dishes;
use App\Faqs;
use App\Galleries;
use App\Meals;
use App\News;
use App\Respond;
use App\Teams;
use App\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index(){
       $pagenate = Dishes::orderBy('created_at','desc')->paginate(4);

       return view ('index',['pagination'=>$pagenate])->with('banners',Banners::all())
           ->with('abouts',Abouts::all())
           ->with('testimonials',Testimonial::all())
           ->with('meals',Meals::all())->with('dishes',Dishes::all()->take(2)
           )->with('news',News::all())
           ->with('supper',Meals::where('meal','LIKE','supper')->paginate(4))
           ->with('lunch',Meals::where('meal','LIKE','lunch')->paginate(4))
           ->with('breakfast',Meals::where('meal','LIKE','breakfast')->paginate(4))
           ->with('desert',Meals::where('meal','LIKE','desert')->paginate(4))
           ->with('drinks',Meals::where('meal','LIKE','drink')->paginate(4))
           ->with('posts',News::orderBy('created_at','desc')->get()->take(3));

   }
    public function testimonial(){

        return view ('testimonials')->with('banners',Banners::all())
            ->with('abouts',Abouts::all())
            ->with('testimonials',Testimonial::all())
            ->with('meals',Meals::all())->with('dishes',Dishes::all()->take(2)
            )->with('dishy',Dishes::all()->take(4))->with('news',News::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3));

    }
    public function homepage_2(){

        return view ('homepage-2')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }

    public function homepage_3(){

        return view ('homepage-3')->with('banners',Banners::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('testimonials',Testimonial::all())
            ->with('abouts',Abouts::all())
            ->with('news',News::orderBy('created_at','desc')->get()->take(3));
    }
    public function homepage_4(){

        return view ('homepage-4')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(24))->with('news',News::all())
            ->with('dishes',Dishes::all()->take(2))
            ->with('testimonials',Testimonial::all())
            ->with('dish',Dishes::all()->take(8))
            ->with('team',Teams::all()->take(4))
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }
    public function homepage_5(){

        return view ('homepage-5')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('testimonials',Testimonial::all())
            ->with('abouts',Abouts::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3));
    }
    public function homepage_9(){

        return view ('homepage-9-boxed')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('testimonials',Testimonial::all())
            ->with('abouts',Abouts::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ;  }
    public function homepage_6(){

        return view ('homepage-6')->with('banners',Banners::all())
            ->with('testimonials',Testimonial::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('abouts',Abouts::all())
            ->with('dishes',Dishes::all()->take(4))
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3));
    }
    public function homepage_10(){

        return view ('homepage-10-wide')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('testimonials',Testimonial::all())
            ->with('abouts',Abouts::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3));  }
    public function homepage_11(){

        return view ('homepage-3')->with('banners',Banners::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('news',News::all()->take(3))
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all()); }

    public function contacts(){

        return view ('page-contacts')->with('banners',Banners::all())
            ->with('abouts',Abouts::all()->take(8))->with('news',News::all())
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3));
    }
    public function board(){

        return view ('menu-board')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }
    public function classic(){

        return view ('menu-classic')->with('images',Banners::all())
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get());
    }
    public function gallery(){

        return view ('menu-gallery')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }
    public function simple(){

        return view ('menu-simple')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
                ->with('supper',Meals::where('meal','LIKE','supper')->get())
                ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
                ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
                ->with('desert',Meals::where('meal','LIKE','desert')->get())
                ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }
    public function about(){

        return view ('page-about')->with('images',Banners::all()->take(2))
            ->with('abouts',Abouts::all())
            ->with('meals',Meals::all())->with('dishes',Dishes::all()->take(2)
            )->with('dishy',Dishes::all()->take(4))->with('news',News::all())
            ->with('supper',Meals::where('meal','LIKE','supper')->get())
            ->with('lunch',Meals::where('meal','LIKE','lunch')->get())
            ->with('breakfast',Meals::where('meal','LIKE','breakfast')->get())
            ->with('desert',Meals::where('meal','LIKE','desert')->get())
            ->with('drinks',Meals::where('meal','LIKE','drink')->get())
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3));  }
    public function book(){

        return view ('page-book-table')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all()->take(3))
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }
    public function chefs(){

        return view ('page-chefs')->with('images',Banners::all())
            ->with('team',Teams::all())
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }
    public function single($slug){

      $news = News::where('slug',$slug )->first();
$next_id =  News::where('id','>' ,$news->id)->min('id');
        $prev_id =  News::where('id','<' ,$news->id)->max('id');
        return view ('page-news')->with('news', $news)
            ->with('title',$news->title)
            ->with('next',News::find($next_id))
            ->with('prev',News::find($prev_id))
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }

    public function carousel(){

        return view ('blog-carousel')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
            ->with('nes',News::all())
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }
    public function pgallery(){

        return view ('page-gallery')->with('galleries',Galleries::all())
            ->with('people',Galleries::where('caption','LIKE','people')->get())
            ->with('restaurant',Galleries::where('caption','LIKE','restaurant')->get())
            ->with('chefs',Galleries::where('caption','LIKE','team')->get())
            ->with('testimonials',Testimonial::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }
    public function cols(){
       return view ('shop-4cols')->with('banners',Banners::all())
           ->with('soup',Dishes::where('category','LIKE','soup')->get())
           ->with('salad',Dishes::where('category','LIKE','salad')->get())
           ->with('drink',Dishes::where('category','LIKE','drink')->get())
           ->with('desert',Dishes::where('category','LIKE','desert')->get())
           ->with('main',Dishes::where('category','LIKE','main')->get())
           ->with('testimonials',Testimonial::all())
           ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
           ->with('abouts',Abouts::all());
    }
    public function faqs(){

        return view ('page-faqs')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all())
            ->with('responds',Respond::all())
            ->with('faqs',Faqs::all());
    }
    public function cart(){

        return view ('shop-cart')->with('banners',Banners::all())
            ->with('meals',Meals::all()->take(8))->with('news',News::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('abouts',Abouts::all());
    }
}
