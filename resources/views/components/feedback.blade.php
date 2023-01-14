<div>
    <div class="container">
        <div class="service-wrapper">
            <h2>Feedback</h2>
            <p>From our Patients </p>
            <div class="service-item-wrapper">
                <div class="row row-cols-1 row-cols-md-5 g-4 justify-content-center">

                @foreach ($ratings as $rating)
                        <div class="col">
                            <div class="card h-50 my-2">
                                <div class="card-body text-center">Rating/5 Stars:
                                <h6 class="card-title text-center">{{ $rating->rate }}</h6>
                                </div>
                            </div>
                            <div class="card h-50 my-2 ">  
                                <div class="card-body text-center">Feedback:
                                <h6 class="card-title text-center"> {{ $rating->description }}</h6>
                               
                                </div>
                            </div>
                        </div>   
                @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>