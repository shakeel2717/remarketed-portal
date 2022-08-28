<!-- popup 2 start -->
<div class="popup-part2">

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-bodys">

                    <!-- popup-part-area start -->
                    <div class="popup-part-area">
                        <div class="popup-part">
                            <div class="mainpopup">
                                <div class="mainpopup-left">

                                    <div class="popup_left1">
                                        <div class="popup_left1-left">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="popup_left1-inner">
                                            <h2>Additional Parts</h2>
                                        </div>
                                        <div class="popup_left1-right">
                                            <ul>
                                                <li><a href="#">Save</a></li>
                                                <li><a href="#"><img src="/assets/img/icon16.svg" alt="iocn" /></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ttpopup-left2 min-vh-100">
                                        <div class="topnew-part">
                                            <h2>Repair Macbook-121233</h2>
                                        </div>
                                        <!--- new tab -->
                                        <div>
                                            <!-- Tab items -->
                                            <div class="tabs">
                                                @foreach ($categories as $category)
                                                <div class="tab-item {{ $loop->first ? 'active' : '' }}">
                                                    {{ $category->category }}
                                                </div>
                                                @endforeach
                                                <div class="line"></div>
                                            </div>
                                            <!-- Tab content -->
                                            <div class="tab-content">
                                                <div class="tab-pane active">

                                                    <div class="new-part">
                                                        <div class="row">
                                                            @foreach ($parts->where('part_categories_id', 1) as $part)
                                                            <div class="col-lg-6 col-md-6 h-100">
                                                                <div class="newpart">
                                                                    <h3 title="{{ $part->title }}">{{ str()->words($part->title,5) }}</h3>
                                                                    <h4>$ {{ number_format($part->min_price,2) }} - $ {{ number_format($part->max_price,2)  }}</h4>
                                                                    <h5>{{ $part->stock }} pieces left in stock <span><a href="#">Add</a></span></h5>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane">

                                                    <div class="new-part">
                                                        <div class="row">
                                                            @foreach ($parts->where('part_categories_id', 2) as $part)
                                                            <div class="col-lg-6 col-md-6 h-100">
                                                                <div class="newpart">
                                                                    <h3 title="{{ $part->title }}">{{ str()->words($part->title,5) }}</h3>
                                                                    <h4>$ {{ number_format($part->min_price,2) }} - $ {{ number_format($part->max_price,2)  }}</h4>
                                                                    <h5>{{ $part->stock }} pieces left in stock <span><a href="#">Add</a></span></h5>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane">
                                                    <div class="new-part">
                                                        <div class="row">
                                                            @foreach ($parts->where('part_categories_id', 3) as $part)
                                                            <div class="col-lg-6 col-md-6 h-100">
                                                                <div class="newpart">
                                                                    <h3 title="{{ $part->title }}">{{ str()->words($part->title,5) }}</h3>
                                                                    <h4>$ {{ number_format($part->min_price,2) }} - $ {{ number_format($part->max_price,2)  }}</h4>
                                                                    <h5>{{ $part->stock }} pieces left in stock <span><a href="#">Add</a></span></h5>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane">

                                                    <div class="new-part">
                                                        <div class="row">
                                                            @foreach ($parts->where('part_categories_id', 3) as $part)
                                                            <div class="col-lg-6 col-md-6 h-100">
                                                                <div class="newpart">
                                                                    <h3 title="{{ $part->title }}">{{ str()->words($part->title,5) }}</h3>
                                                                    <h4>$ {{ number_format($part->min_price,2) }} - $ {{ number_format($part->max_price,2)  }}</h4>
                                                                    <h5>{{ $part->stock }} pieces left in stock <span><a href="#">Add</a></span></h5>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--- new end -->

                                    </div>
                                </div>
                                <div class="mainpopup-right">
                                    <div class="popup_right">
                                        <h3>Activity</h3>
                                    </div>
                                    <div class="miancomment-text">
                                        <div class="Comment-part">
                                            <div class="Comment-img">
                                                <img src="/assets/img/icon18.svg" alt="images not found" />
                                            </div>
                                            <div class="Comment-right">
                                                <h3><span>Maxbert</span> requested for a missing part.</h3>
                                                <p>Oct 16, 2020 at 9:12 AM</p>
                                            </div>
                                        </div>
                                        <div class="Comment-part">
                                            <div class="Comment-img">
                                                <img src="/assets/img/icon19.svg" alt="images not found" />
                                            </div>
                                            <div class="Comment-right">
                                                <h3><span>Maxbert</span> added a new comment.</h3>
                                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor</h4>
                                                <p>Oct 16, 2020 at 9:12 AM</p>
                                            </div>
                                        </div>
                                        <div class="Comment-part">
                                            <div class="Comment-img">
                                                <img src="/assets/img/icon18.svg" alt="images not found" />
                                            </div>
                                            <div class="Comment-right">
                                                <h3><span>Maxbert</span> requested for a missing part.</h3>
                                                <p>Oct 16, 2020 at 9:12 AM</p>
                                            </div>
                                        </div>
                                        <div class="Comment-part Comment-part1">
                                            <div class="Comment-img">
                                                <img src="/assets/img/icon19.svg" alt="images not found" />
                                            </div>
                                            <div class="Comment-right">
                                                <h3><span>Maxbert</span> added a new comment.</h3>
                                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor</h4>
                                                <p>Oct 16, 2020 at 9:12 AM</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="last-comment">
                                        <div class="last-comment-left">
                                            <input type="text" name="Write your Comment" placeholder="Write your Comment…" />
                                        </div>
                                        <div class="last-comment-right">
                                            <ul>
                                                <li><a href="#"><img src="/assets/img/add.svg" alt="icon" /></a></li>
                                                <li><a href="#" class="submit"><img src="/assets/img/send.svg" alt="icon"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- popup-part-area end -->
                </div>

            </div>
        </div>
    </div>
    <!-- popup 2 end -->
</div>