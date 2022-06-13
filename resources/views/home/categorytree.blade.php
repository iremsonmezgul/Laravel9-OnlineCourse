@foreach($children as $subcategory)
    @if(count($subcategory->children))
        <li ><a href=""> {{$subcategory->title}}</a>
            <ul class="list-links">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
        </li>
    @else
        <li><a href="{{route('categorycourses',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
    @endif
@endforeach
