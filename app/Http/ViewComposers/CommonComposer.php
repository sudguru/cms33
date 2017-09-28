<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
//use App\Repositories\UserRepository;

class CommonComposer
{
    private $site, $siteinfo, $brands, $materialtypes, $productcategories, $faqs, $sisters;

    public function compose(View $view)
    {
        $sid = config('custom.frontsiteID');
        $this->site = \App\Site::site($sid);
        $this->siteinfo = \App\Siteinfo::siteinfo($sid);
        $this->brands = \App\Brand::brands($sid);
        $this->materialtypes = \App\Materialtype::materialtypes($sid);
        $this->productcategories = \App\Productcategory::productcategories($sid);
        $this->faqs = \App\Category::faqs($sid);
        $this->sisters = \App\Ad::sisters($sid);

        return $view->with('site', $this->site)
            ->with('siteinfo' , $this->siteinfo)
            ->with('brands' , $this->brands) 
            ->with('materialtypes' , $this->materialtypes)
            ->with('productcategories' , $this->productcategories)
            ->with('faqs' , $this->faqs)
            ->with('sisters' , $this->sisters)
            ->with('siteID' , $sid);
    }
}