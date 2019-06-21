<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            @for ($i = 0; $i < 3; $i++)
                @if ($i === 0)
                    <div class="carousel-item active" style="background-image: url({{ $slides[$i]->image }})">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>{{ $slides[$i]->title }}</h3>
                            <p>{{ $slides[$i]->sub_title }}</p>
                        </div>
                    </div>
                @else
                    <div class="carousel-item" style="background-image: url({{ $slides[$i]->image }})">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>{{ $slides[$i]->title }}</h3>
                            <p>{{ $slides[$i]->sub_title }}</p>
                        </div>
                    </div>
                @endif
            @endfor
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>