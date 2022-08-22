@extends("layouts.app")
@section("content")
<div class="tab-part">
    <div class="about-center section-center">
        <div class="about">
            <!--    btn container      -->
            <div class="btn-container">
                <ul class="mb-2">
                    <li><a href="#" class="tab-btn active" data-id="Board View">Board View</a></li>
                    <li><a href="#" class="tab-btn" data-id="List view">List view</a>
                    </li>
                    <li><a href="#" class="tab-btn" data-id="Calendar">Calendar</a></li>
                    <li><a href="#" class="tab-btn" data-id="Dashboard">Dashboard</a></li>
                    <li><a href="#" class="tab-btn" data-id="Timeline">Timeline</a></li>
                </ul>
            </div>
            <div class="container-fluid px-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-5">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDevice">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add Device
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="addDevice" tabindex="-1" aria-labelledby="addDeviceLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addDeviceLabel">Add Device</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('device.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="title">Device Name</label>
                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Device Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Device Description</label>
                                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Add Device in TODO</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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
                                        <h2>To-Do <span>{{ $devices->where('status','todo')->count() }} Orders</span></h2>
                                        @foreach($devices->where('status','todo') as $device)
                                        <x-board-device :device="$device" />
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boardview-inner">
                                    <span class="span_a2"></span>
                                    <div class="boardview-inner1 toardview-innerb">
                                        <h2>On going Repair <span>{{ $devices->where('status','repair')->count() }} Orders</span></h2>
                                        @foreach($devices->where('status','repair') as $device)
                                        <x-board-device :device="$device" />
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boardview-inner">
                                    <span class="span_a3"></span>
                                    <div class="boardview-inner1 oardview-innerb">
                                        <h2>Testing <span>{{ $devices->where('status','testing')->count() }} Orders</span></h2>
                                        @foreach($devices->where('status','testing') as $device)
                                        <x-board-device :device="$device" />
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boardview-inner">
                                    <span class="span_a4"></span>
                                    <div class="boardview-inner1 oardview-innerb">
                                        <h2>Completed <span>{{ $devices->where('status','complete')->count() }} Orders</span></h2>
                                        @foreach($devices->where('status','complete') as $device)
                                        <x-board-device :device="$device" />
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
                                <x-list-device :device="$device" />
                                @endforeach
                            </div>
                        </div>
                        <div class="listview-inner">
                            <div class="listview-inner1 listview-inners2 mt-5">
                                <ul>
                                    <li><img src="/assets/img/icon13.svg" alt="icon"></li>
                                    <li><span>On going Repair</span></li>
                                    <li><img src="/assets/img/icon11.svg" alt="icon"></li>
                                    <li><img src="/assets/img/icon12.svg" alt="icon"></li>
                                </ul>
                            </div>
                            <div class="listview-view-part">
                                @foreach ($devices->where('status','repair') as $device)
                                <x-list-device :device="$device" />
                                @endforeach
                            </div>
                        </div>
                        <div class="listview-inner">
                            <div class="listview-inner1 ttslistview-inners2  mt-5">
                                <ul>
                                    <li><img src="/assets/img/icon14.svg" alt="icon"></li>
                                    <li><span>Testing</span></li>
                                    <li><img src="/assets/img/icon11.svg" alt="icon"></li>
                                    <li><img src="/assets/img/icon12.svg" alt="icon"></li>
                                </ul>
                            </div>
                            <div class="listview-view-part">
                                @foreach ($devices->where('status','testing') as $device)
                                <x-list-device :device="$device" />
                                @endforeach
                            </div>
                        </div>
                        <div class="listview-inner">
                            <div class="listview-inner1 ttslistview-innerss2  mt-5">
                                <ul>
                                    <li><img src="/assets/img/icon15.svg" alt="icon"></li>
                                    <li><span>Completed</span></li>
                                    <li><img src="/assets/img/icon11.svg" alt="icon"></li>
                                    <li><img src="/assets/img/icon12.svg" alt="icon"></li>
                                </ul>
                            </div>
                            <div class="listview-view-part">
                                @foreach ($devices->where('status','complete') as $device)
                                <x-list-device :device="$device" />
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