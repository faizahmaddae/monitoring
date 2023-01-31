<!-- https://getbootstrap.com/docs/5.0/examples/headers/ -->

<nav class="py-2 bg-white border-bottom client-nav">
    <div class="container d-flex flex-wrap align-items-center">

        <div class="nav me-auto">
            <img class="fkhmedia-logo" src="{{ asset('images/fkhmedia-logo.png') }}" alt="">
        </div>

        <div class="nav ms-auto">
            <img class="UNICEF-logo" src="{{ asset('images/UNICEF_Logo.png') }}" alt="">
        </div>

    </div>
</nav>


<header class="py-3 mb-4 border-bottom">
    <div class="container">
        <div class="row d-flex flex-wrap align-items-center header-filters">
            <div class="col-12 col-md-3">
                <span class="fs-6">Last update 11/29/2022</span>
            </div>
            <div class="col-12 col-md-9 bg-white text-dark py-2 my-2">
                <form action="" class="form-horizontal">
                    <div class="row">

                        <div class="col">

                            <div class="form-group row">
                                <label for="start_date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10 d-flex flex-wrap align-items-center">
                                    <input type="date" class="form-control" id="start_date">
                                </div>
                            </div>

                        </div>



                        <div class="col">

                            <div class="form-group row">
                                <label for="end_date" class="col-sm-2 col-form-label">To</label>
                                <div class="col-sm-10 d-flex flex-wrap align-items-center">
                                    <input type="date" class="form-control" id="end_date">
                                </div>
                            </div>

                        </div>

                        <div class="col">

                            <div class="form-group row">
                                <label for="content" class="col-sm-3 col-form-label">Content</label>
                                <div class="col-sm-9 d-flex flex-wrap align-items-center">
                                    <select class="form-control" id="content">
                                        <option>UNICEF</option>
                                        <option>News</option>
                                        <option>Tollo</option>
                                    </select>
                                </div>
                            </div>

                        </div>


                        <div class="col col-md-2 d-flex align-items-center">
                            <button type="submit" class="btn btn-primary btn-brand px-4 py-0">Search</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="container d-flex flex-wrap justify-content-center">
        <a href="#" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-light text-decoration-none">
            <span class="fs-6">Last update 11/29/2022</span>
        </a>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
    </div> -->
</header>