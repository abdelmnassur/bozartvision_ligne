<x-home-basic>
    <!-- slideshow start -->
    <div class="slideshow-section position-relative">
    <div class="slideshow-active activate-slider" data-slick='{
        "slidesToShow": 1, 
        "slidesToScroll": 1, 
        "dots": true,
        "arrows": true,
        "responsive": [
        {
            "breakpoint": 768,
            "settings": {
            "arrows": false
            }
        }
        ]
        }'>
        @foreach ( $oeuvres as $oeuvre )
            <div class="slide-item position-relative overlay">
                <img width="1920" height="600" class="slide-img d-none d-md-block" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" alt="slide-1">
                <img width="1920" height="600" class="slide-img d-md-none" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" alt="slide-1">
                <div class="content-absolute content-slide">
                <div class="container height-inherit d-flex align-items-center justify-content-start">
                    <div class="content-box slide-content py-4">
                    <p class="slide-text heading_34 text-white animate__animated animate__fadeInUp"
                        data-animation="animate__animated animate__fadeInUp">
                        {{ $oeuvre->titre }}
                    </p>
                    <h2 class="slide-heading heading_72 text-white animate__animated animate__fadeInUp"
                        data-animation="animate__animated animate__fadeInUp">
                        bozartvision
                    </h2>
                    
                    <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                        href="collection-left-sidebar.html" data-animation="animate__animated animate__fadeInUp">COMMANDEZ MAINTENANT</a>
                    </div>
                </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="activate-arrows arrows-white"></div>
    <div class="activate-dots dots-white"></div>
    </div>
    <!-- slideshow end -->

    <!-- trusted badge start -->
    <div class="trusted-section mt-100 overflow-hidden">
        <div class="trusted-section-inner">
            <div class="container">
                <div class="row justify-content-center trusted-row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="trusted-badge bg-trust-3 rounded">
                            <div class="trusted-icon">
                                <img class="icon-trusted" src="template1/img/trusted/3.png" alt="icon-3">
                            </div>
                            <div class="trusted-content">
                                <h2 class="heading_18 trusted-heading">Paiement 100% Sécurisé</h2>
                                <p class="text_16 trusted-subheading trusted-subheading-2">Nous assurons la sécurité paiement !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trusted badge end -->

    <!-- collection start -->
    <div class="featured-collection mt-100 overflow-hidden">
        <div class="collection-tab-inner">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading">RECENTS</h2>
                </div>
                <div class="row">
                    @foreach ( $oeuvres as $oeuvre )
                        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <a class="hover-switch" href="{{ route('showOeuvre',$oeuvre->id ) }}">
                                        <img width="300" height="400" class="secondary-img" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}"
                                            alt="product-img">
                                        <img width="300" height="400" class="primary-img" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}"
                                            alt="product-img">
                                    </a>
                                </div>
                                <div class="product-card-details">
                                    <h2 class="product-card-title">
                                        <a href="{{ route('showOeuvre',$oeuvre->id ) }}">{{ $oeuvre->titre }}</a><br>
                                    </h2>
                                    <h6>{{ $oeuvre->categorie->categorie }}</h6>
                                    <div class="product-card-price">
                                        <span class="card-price-regular">${{ $oeuvre->prix }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                    <a class="btn-primary" href="{{ route('listeOeuvres') }}">TOUS LES ŒUVRES</a>
                </div>
            </div>
        </div>
    </div>
    <!-- collection end -->
</x-home-basic>