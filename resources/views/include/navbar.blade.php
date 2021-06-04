<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="{{url('products/'.$category->category)}}">{{$category->category}}</a>
                </li>
                @endforeach
                @if(count($brands) != 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Brands
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach($brands as $brand)
                                <li><a class="dropdown-item" href="{{url('brand/'.$brand->brand)}}">{{$brand->brand}}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    @endif
            </ul>

            <form class="d-flex">
                <input onkeyup="filter('card-title','search-clothes')" id="search-clothes" class="form-control me-2"
                       type="search" placeholder="Type of Clothes" aria-label="Search">
            </form>
            <form class="d-flex">
                <input onkeyup="filter('brand','search-brand')" id="search-brand" class="form-control me-2"
                       type="search" placeholder="Brand and Category" aria-label="Search">
            </form>
        </div>
    </div>
</nav>

