        <section class="fun-facts-section"
            style="background-image: url(https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&w=1600);">
            <div class="auto-container">

                <div class="row clearfix">
                    <!--Column-->
                   

                    @if (isset($statistics))
                        @foreach ($statistics as $stat)
                           



                            <div class="column count-box col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="{{ $stat->caption }}">0</span>{{ $stat->short_content }}+
                                    </div>
                                    <div class="counter-title">{{ $stat->long_content }}</div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </section>
