<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\CenterCard;
use App\General;
use App\Service;
use App\Testimonial;
use App\SubCategory;
use App\TopCard;

class FrontendController extends Controller
{
   public function index()
   {
      $categs = Category::where('parent', 2)->get();
      $elecs = Category::where('parent', 3)->get();
      $soft = Category::where('parent', 4)->get();
      $serv = Service::all();
      $info = General::first();
      $top_cards = TopCard::take(4)->get();
      $cen_cards = CenterCard::take(5)->get();
      $tests = Testimonial::all();


      $top = view('frontend.pages.topbar', compact('info'));
      $header = view('frontend.pages.header',compact('categs','elecs','soft'));
      $footer = view('frontend.pages.footer', compact('info'));
      $slider = view('frontend.pages.slider');
      $up_card = view('frontend.pages.card', compact('top_cards'));
      $service = view('frontend.pages.service', compact('serv'));
      $our_product = view('frontend.pages.our-product');
      $middle_card = view('frontend.pages.middle_card', compact('cen_cards'));
      $featcher_prod = view('frontend.pages.featcher_prod');
      $testimonial = view('frontend.pages.testimonial', compact('tests'));
      $grp_prodt = view('frontend.pages.group_product');
      $cart = view('frontend.pages.cart', compact('top','header','footer','slider','up_card','service','our_product',
   'middle_card','featcher_prod','testimonial','grp_prodt'));

      $m_top = view('frontend.pages.mobile-top');
      $m_header = view('frontend.pages.mobile-header', compact('m_top'));


      
      return view('frontend.pages.index', compact('m_header','cart'));
   }

   public function diamond()
   {
      $top = view('frontend.pages.topbar');
      $header = view('frontend.pages.header', compact('top'));
      $breadcrumb = view('frontend.pages.breadcrumb');
      $left = view('frontend.pages.left_side');
      $container = view('frontend.pages.container');
      $footer = view('frontend.pages.footer');

      return view('frontend.pages.index', compact('header','breadcrumb','left','container','footer'));
   }

   public function detail()
   {
      $top = view('frontend.pages.topbar');
      $header = view('frontend.pages.header', compact('top'));
      $breadcrumb = view('frontend.pages.breadcrumb');
      $pro_detail = view('frontend.pages.product_detail');
      $reltd_prod = view('frontend.pages.related_product');
      $footer = view('frontend.pages.footer');

      return view('frontend.pages.index', compact('header','breadcrumb','pro_detail','reltd_prod','footer'));
   }

   public function contact()
   {
      $top = view('frontend.pages.topbar');
      $header = view('frontend.pages.header', compact('top'));
      $breadcrumb = view('frontend.pages.breadcrumb');
      $contact = view('frontend.pages.contact');
      $footer = view('frontend.pages.footer');

      return view('frontend.pages.index', compact('header','breadcrumb','contact','footer'));
   }

   public function wishlist()
   {
      $top = view('frontend.pages.topbar');
      $header = view('frontend.pages.header', compact('top'));
      $breadcrumb = view('frontend.pages.breadcrumb');
      $wishlist = view('frontend.pages.wishlist');
      $footer = view('frontend.pages.footer');

      return view('frontend.pages.index', compact('header','breadcrumb','wishlist','footer'));
   }

}
