<x-home-basic>
    <!-- collection start -->
    <div class="featured-collection mt-100 overflow-hidden">
        <div class="collection-tab-inner">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading primary-color">Tous les œuvres </h2>
                </div>
                <div class="row">

                    @foreach ($oeuvres as $oeuvre)
                        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <a class="hover-switch" href="{{ route('showOeuvre',$oeuvre->id ) }}">
                                        <img width="300" height="400" class="secondary-img" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" alt="product-img">
                                        <img width="300" height="400" class="primary-img" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" alt="product-img">
                                    </a>

                                    {{-- <div class="product-badge">
                                        <span class="badge-label badge-percentage rounded">-44%</span>
                                    </div> --}}

                                    <div class="product-card-action product-card-action-2 justify-content-center">

                                        <a href="{{ route('showOeuvre',$oeuvre->id ) }}" class="action-card action-quickview"
                                            data-bs-toggle="modal">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                                <div class="product-card-details">
                                    <h3 class="product-card-title">
                                        <a href="{{ route('showOeuvre',$oeuvre->id ) }}">{{ $oeuvre->titre }}</a> <br>
                                        <a href="#">{{ $oeuvre->categorie->categorie }}</a>
                                    </h3>
                                    <div class="product-card-price">
                                        <span class="card-price-regular">${{ $oeuvre->prix}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <!-- collection end -->
</x-home-basic>