<?php


namespace App\classes;

use App\classes\Blog;
use App\classes\Feature;
use App\classes\News;
use App\classes\Slider;
use App\classes\Gallery;
use App\classes\Article;


class Home
{
    public $blog, $blogs, $slider, $sliders, $slide,
        $feature, $features, $galleries, $gallery,
        $newses, $news, $articles, $article;

    public function index()
    {
        $this->slider = new Slider();
        $this->sliders = $this->slider->getAllSliderData();


        $this->feature = new Feature();
        $this->features = $this->feature->getAllFeatureData();

        $this->blog = new Blog();
        $this->blogs = $this->blog->getAllBlogData();

        $this->gallery = new Gallery();
        $this->galleries = $this->gallery->getAllGalleryData();

        $this->news = new News();
        $this->newses = $this->news->getAllNewsData();

        $this->article = new Article();
        $this->articles = $this->article->getAllArticleData();

        return view('home', [
            'blogs' => $this->blogs,
            'sliders' => $this->sliders,
            'features' => $this->features,
            'galleries' => $this->galleries,
            'newses' => $this->newses,
            'articles' => $this->articles,
        ]);

    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function career()
    {
        return view('career');
    }

    public function detail($id)
    {
        $this->slider = new Slider();
        $this->slide = $this->slider->getSliderById($id);
        return view('detail', ['slide' => $this->slide]);
    }

    public function blogDetail($id)
    {
        $this->blog = new Blog();
        $this->singleBlog = $this->blog->getBlogById($id);
        return view('blog-detail', ['singleBlog' => $this->singleBlog]);
    }

    public function singleNews($id)
    {
        $this->news = new News();
        $this->singleNews = $this->news->getNewsById($id);
        return view('single-news', ['singleNews' => $this->singleNews]);
    }

    public function singleArticle($id)
    {
        $this->article = new Article();
        $this->singleArticle = $this->article->getArticleById($id);
        return view('single-article', ['singleArticle' => $this->singleArticle]);
    }

}