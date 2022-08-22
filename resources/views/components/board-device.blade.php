<div class="boardview-innera">
    <div class="boardview-innera1">
        <ul>
            <li><a href="#" class="text-uppercase">{{ $device->status }}</a></li>
            <li><a href="#" class="text-uppercase">{{ $device->priority }}</a></li>
        </ul>
        <h3 data-bs-toggle="modal" data-bs-target="#device{{ $device->id }}">
            {{$device->title}}
        </h3>
    </div>
    <div class="boardview-innera1_img">
        <ul class="d-flex">
            @foreach ($device->users as $user)
            <li><img src="/assets/img/newimage1.svg" alt="images not found" /></li>
            @endforeach
            <li class="ms-1">
                <a href="javascript:void(0)" class="text-primary" data-bs-toggle="modal" data-bs-target="#assignnModal{{ $device->id }}">
                    <img src="/assets/img/icon23.svg" alt="images not found" />
                </a>
            </li>
        </ul>


        <!-- Modal -->
        <div class="modal fade" id="assignnModal{{ $device->id }}" tabindex="-1" aria-labelledby="assignnModal{{ $device->id }}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="my-4">
                            <h4 class="text-center">Assign This Device to Employee</h4>
                        </div>
                        <div class="my-4">
                            <form action="{{ route('device.update',['device' => $device->id ]) }}" method="POST">
                                @method("PUT")
                                @csrf
                                <div class="form-group">
                                    <label for="employee_id">Select Employee</label>
                                    <select name="employee_id" id="employee_id" class="form-control">
                                        @foreach(employees() as $employee)
                                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary btn-block">Assign</button>
                                </div>

                            </form>
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->



    </div>
    <div class="boardview-inner_down">
        <ul>
            <li><a href="#"><img src="/assets/img/chat_bubble_outline.svg" alt="iocn" /> 0</a></li>
            <li><a href="#"><img src="/assets/img/link.svg" alt="icon" /> 0</a></li>
            <li><a href="#"><img src="/assets/img/icon9.svg" alt="icon" /> Due {{ $device->created_at->format("d M Y") }}</a></li>
        </ul>
    </div>
</div>




<!-- popup 1 start -->
<div class=" popup1-part">
    <div class="modal fade" id="device{{ $device->id }}" tabindex="-1" aria-labelledby="device{{ $device->id }}Label" aria-hidden="true">
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
                                            <h2>Task Details</h2>
                                        </div>
                                        <div class="popup_left1-right">
                                            <ul>
                                                <li><a href="#">Save</a></li>
                                                <li><a href="#"><img src="/assets/img/icon16.svg" alt="iocn" /></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ttpopup-left2">
                                        <div class="popup-left2">
                                            <div class="dnpopup-left1">
                                                <h2>{{ $device->title }} <span><a href="#">To do <i class="fas fa-chevron-down"></i></a></span></h2>
                                            </div>
                                            <div class="down-dnpopup-left1">
                                                <ul>
                                                    <li><a href="#">To do 1</a></li>
                                                    <li><a href="#">To do 2</a></li>
                                                    <li><a href="#">To do 3</a></li>
                                                    <li><a href="#">To do 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="popup-left3">
                                            <div class="row align-items-center">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="popup-left3-left">
                                                                <h3>ASSIGNED TO</h3>
                                                                <ul class="d-flex">
                                                                    @foreach ($device->users as $user)
                                                                    <li><img src="/assets/img/newimage1.svg" alt="images not found" /></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="popup-left3-left">
                                                                <h3>DUE DATE</h3>
                                                                <select class="form-select">
                                                                    <option value="#">Due {{ $device->created_at->format("d M Y") }}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="popup-left3-right">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Request for
                                                            Additional parts</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="left3-description">
                                            <h3><img src="/assets/img/ic_subject.svg" alt="icon" /> Description</h3>

                                            <p class="item1">{{ $device->description }}</p>

                                            <a href="#">Show Full Description</a>
                                        </div>
                                        <div class="left4-attachment">
                                            <h3><img src="/assets/img/attach_file.svg" alt="icon" /> Attachment</h3>
                                            <ul>
                                                <li><img src="/assets/img/Image2.png" alt="images not found" /></li>
                                                <li><img src="/assets/img/Image3.png" alt="images not found" /></li>
                                            </ul>
                                        </div>
                                        <div class="left5-tasklist">
                                            <h3><img src="/assets/img/done2.svg" alt="icon" class="img_a1" /> Task
                                                List <span><img src="/assets/img/icon17.svg" alt="icon" class="img_a2" />2/3 completed</span> </h3>
                                            <ul>
                                                <li>
                                                    <label class="customcheckbox">
                                                        <del>Screen Repair</del>
                                                        <input type="checkbox" checked="checked">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="customcheckbox">
                                                        <del>Create mood board</del>
                                                        <input type="checkbox" checked="checked">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="customcheckbox">
                                                        Motherboard change
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li><a href="#">+Add new Subtask</a></li>
                                            </ul>
                                        </div>
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
                                                <h3><span>Maxbert</span> Device Added in TODO</h3>
                                                <p>{{ $device->created_at->format('M d, Y  m:i:s') }}</p>
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
</div>
<!-- popup 1 end -->