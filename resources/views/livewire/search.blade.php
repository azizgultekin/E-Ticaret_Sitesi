<div>
    <input style="color: black" wire:model="search" name="search" type="text" class="form-control" list="mylist" placeholder="Search product"/>
    @if (!empty($query))
        <datalist id="mylist">
            @foreach ($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}} </option>              
            @endforeach
        </datalist>        
    @endif
</div>
