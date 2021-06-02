@foreach ($menu->where('widget','!==','index')->where('advantage','!==',2) as $mymenu)
               
<li class="menu-item-has-children">
    <a href="{{url($mymenu->slug)}}">{{$mymenu->getTranslatedAttribute('menu_name')}}</a>
    <ul class="sub-menu">
      
       
 
        @foreach ($mymenus->where('slug_id',$mymenu->id)  as $firstchild)
        <li class="menu-item-has-children">
             
            <a @if($firstchild->category->count() < 3) 
                href="{{url($mymenu->getTranslatedAttribute('slug'),$firstchild->getTranslatedAttribute('slug'))}}" 
               
                @else
                href="#"
                @endif>{{$firstchild->getTranslatedAttribute('menu_name')}}</a>
            @if ($mymenus->where('parent_id',$firstchild->id)->count() > 0)
                
          
            <ul class="sub-menu">
                
                @foreach ($mymenus->where('parent_id',$firstchild->id)  as $secondchild)
               
                <li><a @if($secondchild->category->count() < 1)
                     href="{{url($mymenu->getTranslatedAttribute('slug') . '/'. $firstchild->getTranslatedAttribute('slug') . '/' . $secondchild->getTranslatedAttribute('slug'))}}" 
                    @else
                    href="#"
                    @endif>{{$secondchild->getTranslatedAttribute('menu_name')}}</a>
                    @if ($mymenus->where('parent_id',$secondchild->id)->count() > 0)
                    <ul class="sub-menu">
                        @foreach ($mymenus->where('parent_id',$secondchild->id) as $thirdchild)
                            
                       
                        <li><a @if($thirdchild->category->count() < 1)
                             href="{{url(
                                 $mymenu->getTranslatedAttribute('slug') . '/'. 
                                 $firstchild->getTranslatedAttribute('slug') . '/' . 
                                 $secondchild->getTranslatedAttribute('slug') . '/' .
                                 $thirdchild->getTranslatedAttribute('slug'))}}" 
                            @else
                            href="#"
                            @endif>{{$thirdchild->getTranslatedAttribute('menu_name')}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
</li>
   
@endforeach