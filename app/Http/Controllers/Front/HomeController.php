<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepo;

    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(
        CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $list = $this->categoryRepo->rootCategories('created_at', 'desc');
        $categories = $this->categoryRepo->paginateArrayResults($list->all());

        $cat1 = $this->categoryRepo->findCategoryById(2);
        $cat2 = $this->categoryRepo->findCategoryById(3);

        if(!Auth::user()){
            return view('front.index', compact('cat1',
            'cat2',
            'categories'
            ));
        }

        if(Auth::user()->company == 0){

            return view('front.index', compact('cat1',
            'cat2', 
            'categories'
            ));

        }else{
            if(Auth::user()->identity_card){
                
                return view('front.index', compact('cat1',
            'cat2',
            'categories'
            ));

            }else{
                return redirect()->route('accounts')->withError('You must continue uploading your registeratopn files to continue shopping');
            }
        } 
    }
}
