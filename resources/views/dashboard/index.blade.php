@extends("layouts.app")
@section("content")
<div class="tab-part">
    <div class="about-center section-center">
        <div class="about">
            <!--    btn container      -->
            <div class="btn-container">
                <ul>
                    <li><a href="#" class="tab-btn active" data-id="Board View">Board View</a></li>
                    <li><a href="#" class="tab-btn" data-id="List view">List view</a>
                    </li>
                    <li><a href="#" class="tab-btn" data-id="Calendar">Calendar</a></li>
                    <li><a href="#" class="tab-btn" data-id="Dashboard">Dashboard</a></li>
                    <li><a href="#" class="tab-btn" data-id="Timeline">Timeline</a></li>
                </ul>
            </div>
            <div class="about-content">
                <!--    item     -->
                <div class="content active" id="Board View">
                    <!-- boardview-part start -->
                    <div class="boardview-part">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="boardview-inner">
                                    <span class="span_a1"></span>
                                    <div class="boardview-inner1 oardview-innerb">
                                        <h2>To-Do <span>6 Orders</span></h2>
                                        @foreach($devices->where('status','todo') as $device)
                                        <div class="boardview-innera">
                                            <div class="boardview-innera1">
                                                <ul>
                                                    <li><a href="#" class="text-uppercase">{{ $device->status }}</a></li>
                                                    <li><a href="#" class="text-uppercase">{{ $device->priority }}</a></li>
                                                </ul>
                                                <h3 data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Repair Macbook-121233</h3>
                                            </div>
                                            <div class="boardview-innera1_img">
                                                <ul>
                                                    <li><img src="/assets/img/newimage1.svg" alt="images not found" /></li>
                                                    <li><img src="/assets/img/newimage2.svg" alt="images not found" /></li>
                                                </ul>
                                            </div>
                                            <div class="boardview-inner_down">
                                                <ul>
                                                    <li><a href="#"><img src="/assets/img/chat_bubble_outline.svg" alt="iocn" /> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/link.svg" alt="icon" /> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/icon9.svg" alt="icon" /> Due 10 Nov 2021</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boardview-inner">
                                    <span class="span_a2"></span>
                                    <div class="boardview-inner1 toardview-innerb">
                                        <h2>On going Repair <span>6 Orders</span></h2>
                                        @foreach($devices->where('status','repair') as $device)
                                        <div class="boardview-innera">
                                            <div class="boardview-innera1">
                                                <ul>
                                                    <li><a href="#" class="text-uppercase">{{ $device->status }}</a></li>
                                                    <li><a href="#" class="text-uppercase">{{ $device->priority }}</a></li>
                                                </ul>
                                                <h3 data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Repair Macbook-121233</h3>
                                            </div>
                                            <div class="boardview-innera1_img">
                                                <ul>
                                                    <li><img src="/assets/img/newimage1.svg" alt="images not found" /></li>
                                                    <li><img src="/assets/img/newimage2.svg" alt="images not found" /></li>
                                                </ul>
                                            </div>
                                            <div class="boardview-inner_down">
                                                <ul>
                                                    <li><a href="#"><img src="/assets/img/chat_bubble_outline.svg" alt="iocn" /> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/link.svg" alt="icon" /> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/icon9.svg" alt="icon" /> Due 10 Nov 2021</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boardview-inner">
                                    <span class="span_a3"></span>
                                    <div class="boardview-inner1 oardview-innerb">
                                        <h2>Testing <span>6 Orders</span></h2>
                                        @foreach($devices->where('status','testing') as $device)
                                        <div class="boardview-innera">
                                            <div class="boardview-innera1">
                                                <ul>
                                                    <li><a href="#" class="text-uppercase">{{ $device->status }}</a></li>
                                                    <li><a href="#" class="text-uppercase">{{ $device->priority }}</a></li>
                                                </ul>
                                                <h3 data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Repair Macbook-121233</h3>
                                            </div>
                                            <div class="boardview-innera1_img">
                                                <ul>
                                                    <li><img src="/assets/img/newimage1.svg" alt="images not found" /></li>
                                                    <li><img src="/assets/img/newimage2.svg" alt="images not found" /></li>
                                                </ul>
                                            </div>
                                            <div class="boardview-inner_down">
                                                <ul>
                                                    <li><a href="#"><img src="/assets/img/chat_bubble_outline.svg" alt="iocn" /> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/link.svg" alt="icon" /> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/icon9.svg" alt="icon" /> Due 10 Nov 2021</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boardview-inner">
                                    <span class="span_a4"></span>
                                    <div class="boardview-inner1 oardview-innerb">
                                        <h2>Completed <span>6 Orders</span></h2>
                                        @foreach($devices->where('status','complete') as $device)
                                        <div class="boardview-innera">
                                            <div class="boardview-innera1">
                                                <ul>
                                                    <li><a href="#" class="text-uppercase">{{ $device->status }}</a></li>
                                                    <li><a href="#" class="text-uppercase">{{ $device->priority }}</a></li>
                                                </ul>
                                                <h3 data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Repair Macbook-121233</h3>
                                            </div>
                                            <div class="boardview-innera1_img">
                                                <ul>
                                                    <li><img src="/assets/img/newimage1.svg" alt="images not found" /></li>
                                                    <li><img src="/assets/img/newimage2.svg" alt="images not found" /></li>
                                                </ul>
                                            </div>
                                            <div class="boardview-inner_down boardview-inner_down2">
                                                <ul>
                                                    <li><a href="#"><img src="/assets/img/chat_bubble_outline.svg" alt="iocn" /> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/link.svg" alt="icon" /> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/done.svg" alt="icon" /> Due 10 Nov 2021</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- boardview-part end -->
                </div>
                <!-- end item  -->
                <!--    item     -->
                <div class="content" id="List view">

                    <!-- listview-part start  -->
                    <div class="listview-part">
                        <div class="listview-inner">
                            <div class="listview-inner1">
                                <ul>
                                    <li><img src="/assets/img/iocn10.svg" alt="icon"></li>
                                    <li><span>TO DO</span></li>
                                    <li><img src="/assets/img/icon11.svg" alt="icon"></li>
                                    <li><img src="/assets/img/icon12.svg" alt="icon"></li>
                                </ul>
                            </div>
                            <div class="listview-view-part">
                                @foreach ($devices->where('status','todo') as $device)
                                <div class="listview-view-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-lg-5 col-md-5">
                                            <div class="listview-view-item2">
                                                <ul>
                                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <span></span>{{ $device->title }}
                                                    </li>
                                                    <li><a href="#" class="text-uppercase">{{ $device->priority }}</a></li>
                                                    <li><a href="#" class="text-uppercase">{{ $device->status }}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="listview-view-item3">
                                                <h3><img src="/assets/img/newimage1.svg" alt="images not found">
                                                    <img src="/assets/img/newimage2.svg" alt="images not found" />
                                                    <span>Linnie Rios, Jasson Hodd</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="ttboardview-inner_down">
                                                <ul>
                                                    <li><a href="#"><img src="/assets/img/chat_bubble_outline.svg" alt="iocn"> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/link.svg" alt="icon"> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/icon9.svg" alt="icon"> Due 10 Nov</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="listview-inner">
                            <div class="listview-inner1 listview-inners2">
                                <ul>
                                    <li><img src="/assets/img/icon13.svg" alt="icon"></li>
                                    <li><span>On going Repair</span></li>
                                    <li><img src="/assets/img/icon11.svg" alt="icon"></li>
                                    <li><img src="/assets/img/icon12.svg" alt="icon"></li>
                                </ul>
                            </div>
                            <div class="listview-view-part">
                                @foreach ($devices->where('status','repair') as $device)
                                <div class="listview-view-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-lg-5 col-md-5">
                                            <div class="listview-view-item2 tlistview-view-item2">
                                                <ul>
                                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <span></span>Repair Macbook-121233
                                                    </li>
                                                    <li><a href="#">High</a></li>
                                                    <li><a href="#">Repairing</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="listview-view-item3">
                                                <h3><img src="/assets/img/newimage1.svg" alt="images not found">
                                                    <img src="/assets/img/newimage2.svg" alt="images not found" />
                                                    <span>Linnie Rios, Jasson Hodd</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="ttboardview-inner_down">
                                                <ul>
                                                    <li><a href="#"><img src="/assets/img/chat_bubble_outline.svg" alt="iocn"> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/link.svg" alt="icon"> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/icon9.svg" alt="icon"> Due 10 Nov</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="listview-inner">
                            <div class="listview-inner1 ttslistview-inners2">
                                <ul>
                                    <li><img src="/assets/img/icon14.svg" alt="icon"></li>
                                    <li><span>Testing</span></li>
                                    <li><img src="/assets/img/icon11.svg" alt="icon"></li>
                                    <li><img src="/assets/img/icon12.svg" alt="icon"></li>
                                </ul>
                            </div>
                            <div class="listview-view-part">
                                @foreach ($devices->where('status','testing') as $device)
                                <div class="listview-view-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-lg-5 col-md-5">
                                            <div class="listview-view-item2 ttlistview-view-item2">
                                                <ul>
                                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <span></span>Repair Macbook-121233
                                                    </li>
                                                    <li><a href="#">High</a></li>
                                                    <li><a href="#">Repairing</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="listview-view-item3">
                                                <h3><img src="/assets/img/newimage1.svg" alt="images not found">
                                                    <img src="/assets/img/newimage2.svg" alt="images not found" />
                                                    <span>Linnie Rios, Jasson Hodd</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="ttboardview-inner_down">
                                                <ul>
                                                    <li><a href="#"><img src="/assets/img/chat_bubble_outline.svg" alt="iocn"> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/link.svg" alt="icon"> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/icon9.svg" alt="icon"> Due 10 Nov</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="listview-inner">
                            <div class="listview-inner1 ttslistview-innerss2">
                                <ul>
                                    <li><img src="/assets/img/icon15.svg" alt="icon"></li>
                                    <li><span>Completed</span></li>
                                    <li><img src="/assets/img/icon11.svg" alt="icon"></li>
                                    <li><img src="/assets/img/icon12.svg" alt="icon"></li>
                                </ul>
                            </div>
                            <div class="listview-view-part">
                                @foreach ($devices->where('status','complete') as $device)
                                <div class="listview-view-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-lg-5 col-md-5">
                                            <div class="listview-view-item2 tttlistview-view-items2">
                                                <ul>
                                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <span></span>Repair Macbook-121233
                                                    </li>
                                                    <li><a href="#">High</a></li>
                                                    <li><a href="#">Repairing</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="listview-view-item3">
                                                <h3><img src="/assets/img/newimage1.svg" alt="images not found">
                                                    <img src="/assets/img/newimage2.svg" alt="images not found" />
                                                    <span>Linnie Rios, Jasson Hodd</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="ttboardview-inner_down tttboardview-inner_down">
                                                <ul>
                                                    <li><a href="#"><img src="/assets/img/chat_bubble_outline.svg" alt="iocn"> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/link.svg" alt="icon"> 0</a></li>
                                                    <li><a href="#"><img src="/assets/img/done.svg" alt="icon"> 10 Dec 2021</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <!-- listview-part end  -->
            </div>
            <!-- end item  -->
            <!--    item     -->
            <div class="content content1" id="Calendar">
                <p>empty Calendar</p>
            </div>
            <!-- end item  -->
            <!--    item     -->
            <div class="content content1" id="Dashboard">
                <p>empty Dashboard </p>
            </div>
            <!-- end item  -->
            <!--    item     -->
            <div class="content content1" id="Timeline">
                <p>empty Timeline </p>
            </div>
            <!-- end item  -->
        </div>
    </div>
</div>
@endsection