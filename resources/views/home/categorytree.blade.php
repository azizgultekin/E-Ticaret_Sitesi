
@foreach($children as $subcategory)
<div class="mega-column">
    
        
        <h4 class="mega-heading">{{$subcategory->title}}</h4>
        <ul class="mega-item">        
            @if(count($subcategory->children))
                @include('home.categorytree2',['children' => $subcategory->children])
            @else               
                    <li><a href="">{{$subcategory->title}}</a></li> 
            @endif    
        </ul>
       
    
    
</div> 
@endforeach