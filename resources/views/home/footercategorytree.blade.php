@foreach($children as $subcategory)
     @if(count($subcategory->children))
        @if ($rs->title=='Men')
        <a href="#">{{$subcategory->title}}</a>
        @endif
    @endif
@endforeach
