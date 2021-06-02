<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Berpanesir;
use App\Models\BibliographicDatum;
use App\Models\Booklet;
use App\Models\Branch;
use App\Models\Cartoon;
use App\Models\ChildSong;
use App\Models\ContactDatum;
use App\Models\Department;
use App\Models\DepartmentWorker;
use App\Models\Disability;
use App\Models\EBook;
use App\Models\Feature;
use App\Models\FullBibliographicDatum;
use App\Models\Grade;
use App\Models\History;
use App\Models\Homedata;
use App\Models\Joke;
use App\Models\Kiv;
use App\Models\KivMonth;
use App\Models\KivYear;
use App\Models\Letter;
use App\Models\MethodicalAid;
use App\Models\MyMenu;
use App\Models\NewBook;
use App\Models\EDatum;
use App\Models\Homebook;
use App\Models\NewbookCategory;
use App\Models\Newspaper;
use App\Models\Photogalery;
use App\Models\Project;
use App\Models\Publish;
use App\Models\RecommendDatum;
use App\Models\SignificantDay;
use App\Models\Slide;
use App\Models\Slug;
use App\Models\Usage;
use App\Models\VideoGalery;
use App\Models\VirtualExhibition;
use App\Models\Widget;
use App\Models\Mp3;
use App\Models\Mp4;
use App\Models\Phonetic;
use App\Models\Quote;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function __construct() {
        $mymenus = MyMenu::withTranslation('en','ru')->get();
        $homedata =Homedata::withTranslation('en','ru')->first() ;
        $contact = ContactDatum::withTranslation('en','ru')->first();
        view()->share(['mymenus'=>$mymenus,'homedata'=>$homedata,'contact'=>$contact]);
    }

    public function locale($locale){
		if(in_array($locale, ['az', 'en', 'ru'])):
            Session::put('locale', $locale);
            App::setlocale($locale);
        endif;

        return $lang = Session::get('locale');
	}

    public function lang(Request $request){
        $explodeUrl = explode('/', $request->url);
        $count = count($explodeUrl) - 3;
        ;
        if(isset($_SERVER['HTTPS']))
            $protocol = "https://";
        else
            $protocol = "http://";
        // return str_replace('#', '', $explodeUrl[3]);
        if($count == 1):
            $slug_url = str_replace('#', '', rawurldecode($explodeUrl[3]));
            
            if($slug_url !== ''):
             
                if(in_array($slug_url, ['az', 'en', 'ru'])):
                    if(in_array($request->lang, ['en', 'ru'])):
                        Session::put('locale', $request->lang);
                        App::setlocale($request->lang);
                        return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$request->lang;
                    elseif(in_array($request->lang, ['az'])):
                        Session::put('locale', $request->lang);
                        App::setlocale($request->lang);
                        return $new_url = $protocol.$_SERVER['HTTP_HOST'];
                    endif;
                else:
                    $data = Slug::whereTranslation('slug', $slug_url)->withTranslation('en', 'ru')->get();
                    $trans = $data->translate($request->lang, 'fallbackLocale');
                    $response = $trans[0]->slug;
                
                    return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$response;
                endif;
            else:
                Session::put('locale', $request->lang);
                App::setlocale($request->lang);
                if($request->lang !== 'az'):
                    return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$request->lang;
                else:
                    return $new_url = $protocol.$_SERVER['HTTP_HOST'];
                endif;
            endif;
        elseif($count == 2):
            $data = Slug::whereTranslation('slug', str_replace('#', '', rawurldecode($explodeUrl[3])))->withTranslation('en', 'ru')->get();
            $slug4 = str_replace('#', '', rawurldecode($explodeUrl[4]));

            $slug4Data = MyMenu::whereTranslation('slug', $slug4)->get();
            
            $trans = $slug4Data->translate($request->lang, 'fallbackLocale');
            $slug4 = $trans[0]->slug;
         
            $trans = $data->translate($request->lang, 'fallbackLocale');
            $response = $trans[0]->slug;
            
            return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$response.'/'.$slug4;
        elseif($count == 3):
            $slug = rawurldecode($explodeUrl[3]);
            $data = Slug::whereTranslation('slug', $slug)->withTranslation('en', 'ru')->get();
            $slug4 = rawurldecode($explodeUrl[4]);
            $slug5 = str_replace('#', '', rawurldecode($explodeUrl[5]));

            $slug4Data = MyMenu::whereTranslation('slug', $slug4)->get();
            $trans = $slug4Data->translate($request->lang, 'fallbackLocale');
            $slug4 = $trans[0]->slug;
            
            $slug5Data = MyMenu::whereTranslation('slug', $slug5)->get();
            if (count($slug5Data) < 1) {
                $slug5Data = VirtualExhibition::whereTranslation('slug', $slug5)->get();
            }

            if (count($slug5Data) < 1) {
                $slug5Data = Disability::whereTranslation('slug', $slug5)->get();
            }

            if (count($slug5Data) < 1) {
                $slug5Data = Project::whereTranslation('slug', $slug5)->get();
            }
            if (count($slug5Data) < 1) {
                $slug5Data = Photogalery::whereTranslation('slug', $slug5)->get();
            }

            if (count($slug5Data) < 1) {
                $slug5Data = VideoGalery::whereTranslation('slug', $slug5)->get();
            }
            if (count($slug5Data) < 1) {
                $slug5Data = Newspaper::whereTranslation('slug', $slug5)->get();
            }
           
           

            $trans = $slug5Data->translate($request->lang, 'fallbackLocale');
            $slug5 = $trans[0]->slug;

            $trans = $data->translate($request->lang, 'fallbackLocale');
            $response = $trans[0]->slug;

            return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$response.'/'.$slug4.'/'.$slug5;

        elseif($count == 4):
            $slug = rawurldecode($explodeUrl[3]);
            $data = Slug::whereTranslation('slug', $slug)->withTranslation('en', 'ru')->get();
            $slug4 = rawurldecode($explodeUrl[4]);
            $slug5 = str_replace('#', '', rawurldecode($explodeUrl[5]));
            $slug6 = str_replace('#', '', rawurldecode($explodeUrl[6]));

            $slug4Data = MyMenu::whereTranslation('slug', $slug4)->get();
            $trans = $slug4Data->translate($request->lang, 'fallbackLocale');
            $slug4 = $trans[0]->slug;

            $slug5Data = MyMenu::whereTranslation('slug', $slug5)->get();
            
          
            $trans = $slug5Data->translate($request->lang, 'fallbackLocale');
            $slug5 = $trans[0]->slug;

            $slug6Data = Booklet::whereTranslation('slug', $slug6)->get();
    
            if (count($slug6Data) < 1) {
                $slug6Data = BibliographicDatum::whereTranslation('slug', $slug6)->get();
                
                if (count($slug6Data) < 1) {
                    $slug6Data = FullBibliographicDatum::whereTranslation('slug', $slug6)->get();
                }

                if (count($slug6Data) < 1) {
                    $slug6Data = Slide::whereTranslation('slug', $slug6)->get();
                }

                if (count($slug6Data) < 1) {
                    $slug6Data = Slide::whereTranslation('slug', $slug6)->get();
                }

                if (count($slug6Data) < 1) {
                    $slug6Data = RecommendDatum::whereTranslation('slug', $slug6)->get();
                }

                if (count($slug6Data) < 1) {
                    $slug6Data = MethodicalAid::whereTranslation('slug', $slug6)->get();
                }

                if (count($slug6Data) < 1) {
                    $slug6Data = SignificantDay::whereTranslation('slug', $slug6)->get();
                }

                if (count($slug6Data) < 1) {
                    $slug6Data = Mp4::whereTranslation('slug', $slug6)->get();
                }
                if (count($slug6Data) < 1) {
                    $slug6Data = Department::whereTranslation('slug', $slug6)->get();
                }

                if (count($slug6Data) < 1) {
                    $slug6Data = Publish::whereTranslation('slug', $slug6)->get();
                }

                if (count($slug6Data) < 1) {
                    $slug6Data = Berpanesir::whereTranslation('slug', $slug6)->get();
                }
                
                if (count($slug6Data) < 1) {
                    $slug6Data = Letter::whereTranslation('letter', $slug6)->get();
                }
                if (count($slug6Data) < 1) {
                    $slug6Data = Phonetic::whereTranslation('title', $slug6)->get();
                }

             
                if (count($slug6Data) < 1) {
                    
                    $slug6Data = MyMenu::whereTranslation('slug', $slug6)->get();
                }
              
             
                
            }
           
            $trans = $slug6Data->translate($request->lang, 'fallbackLocale');
            $slug6 = $trans[0]->slug;
            
     

            $trans = $data->translate($request->lang, 'fallbackLocale');
            $response = $trans[0]->slug;

            return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$response.'/'.$slug4.'/'.$slug5.'/'.$slug6;

        elseif($count == 5):

        $slug = rawurldecode($explodeUrl[3]);
        $data = Slug::whereTranslation('slug', $slug)->withTranslation('en', 'ru')->get();
        $slug4 = rawurldecode($explodeUrl[4]);
        $slug5 = str_replace('#', '', rawurldecode($explodeUrl[5]));
        $slug6 = str_replace('#', '', rawurldecode($explodeUrl[6]));
        $slug7 = str_replace('#', '', rawurldecode($explodeUrl[7]));

        $slug4Data = MyMenu::whereTranslation('slug', $slug4)->get();
        $trans = $slug4Data->translate($request->lang, 'fallbackLocale');
        $slug4 = $trans[0]->slug;

        $slug5Data = MyMenu::whereTranslation('slug', $slug5)->get();
        
    
        $trans = $slug5Data->translate($request->lang, 'fallbackLocale');
        $slug5 = $trans[0]->slug;
      
        $slug6Data = MyMenu::whereTranslation('slug', $slug6)->get();

        $trans = $slug6Data->translate($request->lang, 'fallbackLocale');
        $slug6 = $trans[0]->slug;
        
        $slug7Data = Letter::whereTranslation('letter', $slug7)->get();
       
      
        $trans = $slug7Data->translate($request->lang, 'fallbackLocale');
        $slug7 = $trans[0]->slug;
        
       


        $trans = $data->translate($request->lang, 'fallbackLocale');
        $response = $trans[0]->slug;

        return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$response.'/'.$slug4.'/'.$slug5.'/'.$slug6 .'/'.$slug7;

        endif;
    }

    public function slug($slug1 = null, $slug2 = null, $slug3 = null,$slug4 = null,$slug5 = null){
       
        if($slug1 !== null):
           
            $data = Slug::whereTranslation('slug', $slug1)->withTranslation('en', 'ru')->get();
         
            if(count($data)==0):
                
            	abort(404);
            else:
              
                $widget = $data[0]->widget;
      
               
              
                $lang = $data[0]->where('slug', $slug1)->get();
               
                if(count($lang)>0):
                    $lang = 'az';
                else:
                    $lang = $data[0]->translations->where('value', $slug1);
                    foreach($lang as $l)
                        $lang = $l->locale;
                endif;

                if($slug2 !== null && $slug3 == null):
                 
                    return $this->$widget($lang, $slug2);
                elseif($slug3 !== null && $slug4 == null):
                   
                    return $this->$widget($lang, $slug2, $slug3);
                elseif($slug4 !== null && $slug5 === null):
                   
                    return $this->$widget($lang, $slug2, $slug3,$slug4);
                elseif($slug5 !== null):
                        
                     return $this->$widget($lang, $slug2, $slug3,$slug4,$slug5);    
                else:
                    
                    return $this->$widget($lang);
                endif;
            endif;
        else:
            Session::put('locale', 'az');
            App::setlocale('az');
            $lang = 'az';
           
            return $this->index($lang);
        endif;
    }

    public function menu(){
        return Slug::withTranslation('en', 'ru')->orderBy('order')->get();
    }

    
    
    public function index($locale){
        
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        
        $features = Feature::get();
        $books = Homebook::withTranslation('en', 'ru')->latest()->get();
        $news = News::latest()->first();
        $quotes = Quote::latest()->get();
        $photoGalery = Photogalery::latest()->first();
        $newspapers = Newspaper::latest()->first();
    	return view('home',compact('menu','features','books','news','quotes','photoGalery','newspapers'));
    }

    public function news($locale,$slug = null)
    {
        $lang = $this->locale($locale);

        $menu = $this->menu();
        
      
        if ($slug !== null ) {
            $news = News::whereTranslation('slug',$slug)->firstOrFail();
        
            return view('newsDetail',compact('menu','news'));
        }


        $news= News::withTranslation('en', 'ru')->paginate(12);
        
        return view('news',compact('menu','news'));
        
        
    }
    
    public function home_book($locale,$slug = null)
    {
        $lang = $this->locale($locale);

        $menu = $this->menu();
      
        if ($slug !== null ) {
            $book = Homebook::whereTranslation('slug',$slug)->firstOrFail();
        
            return view('homebookDetail',compact('menu','book'));
        }


        $books= Homebook::withTranslation('en', 'ru')->get();
        
        return view('homeBooks',compact('menu','books'));
        
        
    }
    public function history(string $locale = 'az')
    {
        $lang = $this->locale($locale);

        $menu = $this->menu();
     
        $data =History::withTranslation('en','ru')->first() ;
        
    	return view('about.history',compact('data','menu'));
    }

    public function about($locale, $slug2 = null, $slug3 = null,$slug4 = null)
    {
       
    
        if($slug2 !== null && $slug3 == null):
           $myslug = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
            
            $newWidget = $myslug->widget;
            return $this->$newWidget($locale,$slug2,$slug3);
        endif;
        
        if($slug2 !== null && $slug3 !== null && $slug4 == null):
            // $first =MyMenu::whereTranslation('slug',$slug2)->first();

            $myslug = MyMenu::whereTranslation('slug',$slug3)->get();
          
            if($myslug->count()>0):
                $newWidget = $myslug[0]->widget;
           
                return $this->$newWidget($locale,$slug2,$slug3);
            else:
           
                $myslug = MyMenu::whereTranslation('slug',$slug2)->get();
    
            
                $newWidget = $myslug[0]->widget;
           
                return $this->$newWidget($locale,$slug2,$slug3);
            endif;
        elseif($slug2 !== null && $slug3 !== null && $slug4 !== null):
             
            $myslug = MyMenu::whereTranslation('slug',$slug3)->get();
          
            if($myslug->count()>0):
                $newWidget = $myslug[0]->widget;
           
                return $this->$newWidget($locale,$slug2,$slug3,$slug4);
            else:
           
                $myslug = MyMenu::whereTranslation('slug',$slug2)->get();
    
            
                $newWidget = $myslug[0]->widget;
           
                return $this->$newWidget($locale,$slug3,$slug4);
            endif;
        endif;

        
       
    }

    public function departments($locale,$slug = null,$slug2=null,$slug3 = null)
    {
        
        if ($slug3 !== null) {
        $lang = $this->locale($locale);

        $menu = $this->menu();
    
        $department = Department::whereTranslation('slug',$slug3)->firstOrFail();
        
        return view('about.departmentDetail',compact('menu','department'));
        }
   
        
        else {
            $lang = $this->locale($locale);

            $menu = $this->menu();
            $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
          
            $departments = Department::latest()->paginate(6);
            $departmentWorkers = DepartmentWorker::get();
            return view('about.department',compact('menu','departments','departmentWorkers','getParent'));
        }
        
       
    }


    public function branch($locale)
    {
        
        $lang = $this->locale($locale);

        $menu = $this->menu();
        $branches = Branch::withTranslation('en','ru')->latest()->paginate(6);
        
        return view('about.branches',compact('menu','branches'));
    }
    
    public function disabled($locale, $slug = null,$slug2 = null)
    {
      
      
        if($slug !== null && $slug2 !== null):
            $lang = $this->locale($locale);

            $menu = $this->menu();
            $disability = Disability::whereTranslation('slug',$slug2)->firstOrFail();
    
            return view('about.disabledDetail',compact('menu','disability'));
        else:
            $lang = $this->locale($locale);
            $menu = $this->menu();
            $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
            $disabilities = Disability::withTranslation('en','ru')->latest()->paginate(6);
            
            return view('about.disabled',compact('menu','disabilities','getParent'));
        endif;
    }



    public function project($locale,$slug = null,$slug2 = null)
    {

      
        if ($slug !== null && $slug2 !== null) {
            $lang = $this->locale($locale);

            $menu = $this->menu();
            $project = Project::whereTranslation('slug',$slug2)->firstOrFail();
            
      
            return view('about.projectDetail',compact('menu','project'));
        } else {
            $lang = $this->locale($locale);

        $menu = $this->menu();
     
        $projects = Project::withTranslation('en','ru')->latest()->get();
   
        $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
        return view('about.projects',compact('menu','projects','getParent'));
        }
        
        
    }

 


    public function usage($locale)
    {
        $lang = $this->locale($locale);

        $menu = $this->menu();
        $usage = Usage::firstOrFail();
   
  
        return view('about.usage',compact('menu','usage'));
    }

    public function photoGallery($locale,$slug = null,$slug2 = null)
    {
        if ($slug !== null && $slug2 !== null) {
            $lang = $this->locale($locale);

        $menu = $this->menu();
        $photoGalery = Photogalery::whereTranslation('slug',$slug2)->firstOrFail();
   
  
        return view('about.photoGalleryDetail',compact('menu','photoGalery'));
        } else {
            $lang = $this->locale($locale);

            $menu = $this->menu();
            $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
            $photoGaleries = Photogalery::withTranslation('en','ru')->latest()->paginate(6);
       
      
            return view('about.photoGallery',compact('menu','photoGaleries','getParent'));
        }
        
  
    }

 

    public function videoGallery($locale,$slug = null ,$slug2 = null)
    {
        if ($slug !== null && $slug2 !== null) {
            $lang = $this->locale($locale);

            $menu = $this->menu();
            $videoGallery = VideoGalery::whereTranslation('slug',$slug2)->firstOrFail();
            
  
        return view('about.videoGalleryDetail',compact('menu','videoGallery'));
        } else {
            $lang = $this->locale($locale);

            $menu = $this->menu();
            $videoGalleries = VideoGalery::withTranslation('en','ru')->latest()->paginate(6);
            $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
      
            return view('about.videoGallery',compact('menu','videoGalleries','getParent'));
        }
        
  
    }



    public function kiv($locale,$slug = null,$slug2 = null)
    {
        $lang = $this->locale($locale);

        $menu = $this->menu();
       
        if ($slug !==null && $slug2 !== null) {
          
            $year = KivYear::where('year',$slug2)->firstOrFail();
           
            $kivs = Kiv::withTranslation('en','ru')->where('year_id',$year->id)->get();
           
            $kivYears = KivYear::get();
            $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
            return view('about.kiv',compact('menu','kivs','kivYears','slug','year','getParent'));
        }else {
            $year = KivYear::where('year','2021')->firstOrFail();
            $kivs = Kiv::where('year_id',$year->id)->withTranslation('en','ru')->paginate(6);
            
            $kivYears = KivYear::get();
        }
        $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
        
       
  
        return view('about.kiv',compact('menu','kivs','kivYears','year','getParent'));
    }



    public function newspaper($locale,$slug = null,$slug2 = null)
    {
        $lang = $this->locale($locale);

        $menu = $this->menu();
        $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
        if ($slug !==null && $slug2 !== null) {
            $newspaper = Newspaper::whereTranslation('slug',$slug2)->firstOrFail();
            return view('about.newspaperDetail',compact('menu','newspaper','getParent'));
        }
        $newspapers = Newspaper::withTranslation('en','ru')->latest()->paginate(6);
       
        return view('about.newspaper',compact('menu','newspapers','getParent'));
    }

    public function archive($locale)
    {
        $lang = $this->locale($locale);

        $menu = $this->menu();
        $archives = Archive::withTranslation('en','ru')->latest()->get();
        return view('about.archives',compact('archives','menu'));
    }

    public function newLiturature($locale,$slug= null,$slug2 = null,$slug3 = null,$slug4 = null)
    {

       
      
        if ($slug !== null && $slug2 === null) {
            $lang = $this->locale($locale);

            $menu = $this->menu();
            $forSlug = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
          
            $letters = Letter::withTranslation('en','ru')->get();
            
            return view('liturature.kataloq',compact('menu','letters','forSlug'));

            
        }elseif($slug !== null && $slug2 !==null && $slug3 === null) {
            
            $myslug = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
            $newWidget = $myslug->widget;
            
            return $this->$newWidget($locale,$slug2);

           
            
        }elseif($slug !== null && $slug2 !==null && $slug3 !== null && $slug4 === null) {
        
            $myslug = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
         
            $newWidget = $myslug->widget;
            return $this->$newWidget($locale,$slug2,$slug3);
              
        }
        elseif($slug !== null && $slug2 !==null && $slug3 !== null && $slug4 !==null) {
           
            $myslug = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
         
            $newWidget = $myslug->widget;
            return $this->$newWidget($locale,$slug2,$slug3,$slug4);
              
        }

        return redirect()->back();
    }


    public function newBook($locale,$slug2 = null,$slug3 = null)
    {
        $lang = $this->locale($locale);
       
        $menu = $this->menu();
       
        if ($slug2 === null) {
            # code...
            $newBookCategory = NewbookCategory::withTranslation('en','ru')->latest()->get();
               
            return view('liturature.new_books',compact('menu','newBookCategory'));
        }
        
            
            $newBookCategory = NewbookCategory::whereTransLation('slug',$slug2)->first();
           
     
            
            if ($newBookCategory !== null) {
                
                $months = KivMonth::withTranslation('en','ru')->get();

            
                return view('liturature.new_bookDetail',compact('menu','newBookCategory','months'));
            }

            $mymenus = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
            $widget = $mymenus->widget;
            return $this->$widget($locale,$slug2,$slug3);    
            
        
       
        return redirect()->back();
    }

    public function berpa($locale,$slug = null, $slug2 = null)
    
    {
        $lang = $this->locale($locale);

        $menu = $this->menu();
       
        if ($slug2 !== null) {
            $berpa = Berpanesir::whereTransLation('slug',$slug2)->firstOrFail();
            return view('liturature.berpaDetail',compact('menu','berpa'));
        }

        $berpa = Berpanesir::latest()->withTranslation('en','ru')->paginate(12);
        $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
                
        return view('liturature.berpa',compact('menu','berpa','getParent'));
    }

    public function publishes($locale,$slug = null, $slug2 = null)
    {
        $lang = $this->locale($locale);

        $menu = $this->menu();
     
        if ($slug2 !== null) {
            $publish = Publish::whereTransLation('slug',$slug2)->firstOrFail();
            return view('liturature.publishDetail',compact('menu','publish'));
        }

        $publishes = Publish::latest()->withTranslation('en','ru')->paginate(12);
        $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
           
        return view('liturature.ourpublishes',compact('menu','publishes','getParent'));
    }

    public function eBook($locale,$slug = null , $slug2 = null, $slug3 = null)
    {
        // dd($slug);
       
        if ($slug !== null && $slug2 == null) {
            
            $myslug = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
        }
        elseif ($slug !== null && $slug2 !== null) {
            
            $myslug = MyMenu::whereTranslation('slug',$slug2)->first();
        
            if ($myslug === null) {
                
                $myslug = MyMenu::whereTranslation('slug',$slug)->first();
                $newWidget = $myslug->widget;
            
                return $this->$newWidget($locale,$slug,$slug2);
           }elseif($myslug->widget !== null) {
            
            $newWidget = $myslug->widget;
            
            return $this->$newWidget($locale,$slug,$slug2,$slug3);
            
           }
           
        }
        $myslug = MyMenu::whereTranslation('slug',$slug)->first();
      
        $newWidget = $myslug->widget;
        
       
        return $this->$newWidget($locale,$slug,$slug2,$slug3);
   
       
        
    }

    public function phonetic($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        $lang = $this->locale($locale);

        $menu = $this->menu();
        $checkPage = 'fonoetika';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            $letters = Letter::with('phonetics')->get();

            $forSlug = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();

            
            
            return view('liturature.liturature',compact('menu','letters','checkPage','forSlug'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
            $letter = Letter::where('letter',$slug3)->with('phonetics')->firstOrFail();
   
            $getCategory = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
            return view('liturature.lituratureDetail',compact('menu','letter','checkPage','getCategory'));
        }   
    }

    public function liturature($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        
        $lang = $this->locale($locale);

        $menu = $this->menu();
        $checkPage = 'ədəbiyyat';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            $letters = Letter::get();
            $forSlug = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
            return view('liturature.liturature',compact('menu','letters','checkPage','forSlug'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
            $letter = Letter::where('letter',$slug3)->firstOrFail();
        
            $getCategory = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
            
       
            return view('liturature.lituratureDetail',compact('menu','letter','checkPage','getCategory'));
        } 
    }

    public function language($locale,$slug = null , $slug2 = null)
    {
        
       
        $lang = $this->locale($locale);

        $menu = $this->menu();
        $checkPage = 'az-dil';
        if($slug !== null && $slug2 == null) {
            $letters = Letter::get();
            $forSlug = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
            
            return view('liturature.liturature',compact('menu','letters','checkPage','forSlug'));
        }elseif($slug !== null && $slug2 !== null ) {
       
            $letter = Letter::where('letter',$slug2)->firstOrFail();
        
            $getCategory = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
            
       
            return view('liturature.lituratureDetail',compact('menu','letter','checkPage','getCategory'));
        } 
        
    }
    public function otherlanguages($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
      
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
            $letters = Letter::get();
            $forSlug = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
           

            return view('liturature.liturature',compact('menu','letters','checkPage','forSlug'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            $letter = Letter::where('letter',$slug3)->firstOrFail();
           
            $getCategory = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
       
       
            return view('liturature.lituratureDetail',compact('menu','letter','checkPage','getCategory'));
        } 
    }

    public function b_service($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
       
        $getMenu = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
      
        $widget = $getMenu->widget;
     
        return $this->$widget($locale,$slug,$slug2,$slug3);
        
    }

    public function gosterici($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = BibliographicDatum::withTranslation('en','ru')->latest()->get();

            return view('bibliographic.b_indexes',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = BibliographicDatum::whereTranslation('slug',$slug3)->firstOrFail();
            return view('bibliographic.b_indexesDetail',compact('menu','bData'));
        } 
    }


    public function tamgosterici($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = FullBibliographicDatum::withTranslation('en','ru')->latest()->paginate(9);

            return view('bibliographic.tam_metinli',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = FullBibliographicDatum::whereTranslation('slug',$slug3)->firstOrFail();
            return view('bibliographic.tam_metinliDetail',compact('menu','bData'));
        } 
    }


    public function slide($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = Slide::withTranslation('en','ru')->latest()->paginate(9);

            return view('bibliographic.tam_metinli',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = Slide::whereTranslation('slug',$slug3)->firstOrFail();
            return view('bibliographic.slideDetail',compact('menu','bData'));
        } 
    }


    public function booklet($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = Booklet::latest()->paginate(9);

            return view('bibliographic.booklet',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = Booklet::whereTranslation('slug',$slug3)->firstOrFail();
            return view('bibliographic.b_indexesDetail',compact('menu','bData'));
        } 
    }
    
    public function recommend($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = RecommendDatum::withTranslation('en','ru')->latest()->paginate(9);

            return view('bibliographic.booklet',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = RecommendDatum::whereTranslation('slug',$slug3)->firstOrFail();
            return view('bibliographic.b_indexesDetail',compact('menu','bData'));
        } 
    }


    public function metodik($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = MethodicalAid::withTranslation('en','ru')->latest()->paginate(9);

            return view('bibliographic.booklet',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = MethodicalAid::whereTranslation('slug',$slug3)->firstOrFail();
            return view('bibliographic.b_indexesDetail',compact('menu','bData'));
        } 
    }



    public function significant($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = SignificantDay::withTranslation('en','ru')->latest()->paginate(9);

            return view('bibliographic.booklet',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = SignificantDay::whereTranslation('slug',$slug3)->firstOrFail();
            return view('bibliographic.b_indexesDetail',compact('menu','bData'));
        } 
    }

    public function multimedia($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        
        $getMenu = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
        if ($getMenu->widget === null) {
            $getMenu = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
           
        }
      
        $widget = $getMenu->widget;
        
     
        return $this->$widget($locale,$slug,$slug2,$slug3);
    }    


    public function virtual($locale,$slug =null,$slug2 =null)
    {
       
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        
       
        if($slug !== null && $slug2 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
         
            
            $bData = VirtualExhibition::withTranslation('en','ru')->latest()->paginate(9);

            return view('multimedia.virtual',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null) {
         
            

            $bData = VirtualExhibition::whereTranslation('slug',$slug2)->firstOrFail();
            return view('multimedia.virtualDetail',compact('menu','bData'));
        } 
    }


    public function mp3($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = Mp3::withTranslation('en','ru')->latest()->paginate(9);

            return view('multimedia.mp3',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = Mp3::whereTranslation('slug',$slug3)->firstOrFail();
            return view('bibliographic.b_indexesDetail',compact('menu','bData'));
        } 
    }


    public function mp4($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = Mp4::withTranslation('en','ru')->latest()->paginate(9);

            return view('multimedia.video',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = Mp4::whereTranslation('slug',$slug3)->firstOrFail();
            return view('multimedia.videoDetail',compact('menu','bData'));
        } 
    }

    public function lesson($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = Grade::withTranslation('en','ru')->get();

            return view('multimedia.lessons',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = Mp4::whereTranslation('slug',$slug3)->firstOrFail();
            return view('multimedia.videoDetail',compact('menu','bData'));
        } 
    }


    public function joke($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 !== null && $slug3 === null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug2)->firstOrFail();
         
            
            $bData = Joke::withTranslation('en','ru')->latest()->paginate(9);

            return view('multimedia.video',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null && $slug3 !== null) {
         
            
       
            $bData = Joke::whereTranslation('slug',$slug3)->firstOrFail();
            return view('multimedia.videoDetail',compact('menu','bData'));
        } 
    }


    public function cartoon($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
       
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 == null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
         
            
            $bData = Cartoon::withTranslation('en','ru')->latest()->paginate(9);

            return view('multimedia.cartoon',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null ) {
         
            
       
            $bData = Cartoon::whereTranslation('slug',$slug2)->firstOrFail();
            return view('multimedia.videoDetail',compact('menu','bData'));
        } 
    }


    public function childSong($locale,$slug =null,$slug2 =null,$slug3 =null)
    {
        
        
        $lang = $this->locale($locale);
        
        $menu = $this->menu();
        $checkPage = 'other';
        if($slug !== null && $slug2 == null) {
            
           $getParent = MyMenu::whereTranslation('slug',$slug)->firstOrFail();
         
            
            $bData = ChildSong::withTranslation('en','ru')->latest()->paginate(9);

            return view('multimedia.mp3',compact('menu','bData','getParent'));
        }elseif($slug !== null && $slug2 !== null) {
         
            
       
            $bData = ChildSong::whereTranslation('slug',$slug2)->firstOrFail();
            return view('bibliographic.b_indexesDetail',compact('menu','bData'));
        } 
    }

    public function contact($locale,$slug =null,$slug2 = null)
    {
        $lang = $this->locale($locale);
        $menu = $this->menu();
        $contact = ContactDatum::withTranslation('en','ru')->first();
       
        return view('contact',compact('menu','contact'));
    }

    public function e_data($locale)
    {
        $lang = $this->locale($locale);
        $menu = $this->menu();
        $e_data = EDatum::latest()->paginate(12);
        return view('e_data',compact('menu','e_data'));
    }
}
