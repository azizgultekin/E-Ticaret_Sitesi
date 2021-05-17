@foreach($children as $subcategory)
    @if(count($subcategory->children))
        @include('home.categorytree2',['children' => $subcategory->children])
    @else               
        <li><a href="{{route('productlisting',['id'=>$subcategory->id ,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li> 
    @endif 
@endforeach