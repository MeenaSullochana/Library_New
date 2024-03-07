<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\District;
use Illuminate\Support\Facades\Validator;
use Throwable;
use Carbon\Carbon;
use App\Models\Publisher;
use App\Models\Distributor;
use App\Models\PublisherDistributor;
use App\Models\Specialcategories;
use App\Models\Book;


class dashboardController extends Controller
{
    public function admindashboard(){
        $currentYear = date('Y');
        $categoryCountsPerMonth = [];
        
  
        for ($targetMonth = 1; $targetMonth <= 12; $targetMonth++) {
      
           $books = Book::whereYear('created_at', '=', $currentYear)
                         ->whereMonth('created_at', '=', $targetMonth)
                         ->where("book_procurement_status", '=', 1)
                         ->get();
        
       
            $categoryCounts = [];
            $specialCategories = Specialcategories::where('status', '=', 1)->get();
        
            foreach ($specialCategories as $category) {
                $categoryCounts[$category->name] = 0;
            }
        
          
            foreach ($books as $book) {
                if (isset($categoryCounts[$book->category])) {
                    $categoryCounts[$book->category]++;
                }
            }
        
           
            $categoryCountsPerMonth[$targetMonth] = [
                'totalBooks' => count($books),
                'categoryCounts' => $categoryCounts
            ];
        }
        
      
        return $categoryCountsPerMonth;
        
        

       $allpub=Publisher::all();
       $activepub=Publisher::where('status', '=', '1')->where('approved_status', '=', 'approve')->get();
       $inactivepub=Publisher::where('status', '=', '0')->get();
       $allpubcount=count($allpub);
       $activepubcount=count($activepub);
       $inactivepubcount=count($inactivepub);

       $alldist=Distributor::all();
       $activedist=Distributor::where('status', '=', '1')->where('approved_status', '=', 'approve')->get();
       $inactivedist=Distributor::where('status', '=', '0')->get();
       $alldistcount=count($alldist);
       $activedistcount=count($activedist);
       $inactivedistcount=count($inactivedist);


       $allpubdist=PublisherDistributor::all();
       $activepubdist=PublisherDistributor::where('status', '=', '1')->where('approved_status', '=', 'approve')->get();
       $inactivepubdist=PublisherDistributor::where('status', '=', '0')->get();
       $allpubdistcount=count($allpubdist);
       $activepubdistcount=count($activepubdist);
       $inactivepubdistcount=count($inactivepubdist);
       return view('admin.index',compact('allpub','activepub','inactivepub','allpubcount','activepubcount','inactivepubcount',
       'alldist','activedist','inactivedist', 'alldistcount','activedistcount','inactivedistcount',
       'allpubdist','activepubdist','inactivepubdist', 'allpubdistcount','activepubdistcount','inactivepubdistcount',)
       );
}
}

