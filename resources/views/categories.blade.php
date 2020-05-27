
<div class="sub-header-2">
    <div class="categories">
        @foreach(App\Category::all() as $category)
            <li><a href="{{$category->latin_url}}">{{$category->cat_name}}</a></li>
        @endforeach
    </div>
    <select name="select" onchange="window.location.href=this.options[this.selectedIndex].value">
        @foreach(App\Category::all() as $category)
            <option VALUE="{{$category->latin_url}}">{{$category->cat_name}}</option>
        @endforeach
    </select>
</div>

