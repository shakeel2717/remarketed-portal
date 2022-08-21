<div class="boardview-innera">
    <div class="boardview-innera1">
        <ul>
            <li><a href="#" class="text-uppercase">{{ $device->status }}</a></li>
            <li><a href="#" class="text-uppercase">{{ $device->priority }}</a></li>
        </ul>
        <h3 data-bs-toggle="modal" data-bs-target="#exampleModal">
            {{$device->title}}
        </h3>
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
            <li><a href="#"><img src="/assets/img/icon9.svg" alt="icon" /> Due {{ $device->created_at->format("d M Y") }}</a></li>
        </ul>
    </div>
</div>