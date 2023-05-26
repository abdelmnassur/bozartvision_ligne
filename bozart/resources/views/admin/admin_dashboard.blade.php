<x-admin-basic>
    <!-- STATISTIC-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">

                    <a class="col-md-6 col-lg-3" href="{{ route('admin_gestion_users') }}">
                        <div class="statistic__item">
                            <h2 class="number">{{ count($users) }}</h2>
                            <span class="desc">Tous les utilisateurs</span>
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                        </div>
                    </a>

                    <a class="col-md-6 col-lg-3" href="{{ route('admin_gestion_artistes') }}">
                        <div class="statistic__item">
                            <h2 class="number">{{ count($artistes) }}</h2>
                            <span class="desc">Artistes</span>
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                        </div>
                    </a>

                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">z</h2>
                            <span class="desc">this week</span>
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">$1,060,386</h2>
                            <span class="desc">total earnings</span>
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC-->
</x-admin-basic>