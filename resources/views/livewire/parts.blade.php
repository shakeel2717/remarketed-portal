<!-- popup 2 start -->
<div class="popup-part2">

    <div class="modal fade" id="staticBackdrop{{ $device->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop{{ $device->id }}Label" aria-hidden="true">
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
                                                <li><a href="#" onClick="refreshPage()">Done</a></li>
                                                <li><a href="#"><img src="/assets/img/icon16.svg" alt="iocn" /></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ttpopup-left2 min-vh-100">
                                        <div class="topnew-part">
                                            <h2>{{ $device->title }}</h2>
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
                                                            <x-parts :part="$part" :device="$device" />
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane">

                                                    <div class="new-part">
                                                        <div class="row">
                                                            @foreach ($parts->where('part_categories_id', 2) as $part)
                                                            <x-parts :part="$part" :device="$device" />
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane">
                                                    <div class="new-part">
                                                        <div class="row">
                                                            @foreach ($parts->where('part_categories_id', 3) as $part)
                                                            <x-parts :part="$part" :device="$device" />
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane">

                                                    <div class="new-part">
                                                        <div class="row">
                                                            @foreach ($parts->where('part_categories_id', 4) as $part)
                                                            <x-parts :part="$part" :device="$device" />
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--- new end -->

                                    </div>
                                </div>
                                @livewire("activity-list",['device' => $device])
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