    <div class="mainpopup-right">
        <div class="popup_right">
            <h3>Activity</h3>
        </div>
        @forelse ($device->activities as $activity)
        <div class="miancomment-text">
            <div class="Comment-part">
                <div class="Comment-img">
                    <img src="/assets/img/icon18.svg" alt="images not found" />
                </div>
                <div class="Comment-right">
                    <h3><span>Activity</span> {{ $activity->title }}</h3>
                    <small class="">{{ $activity->description }}</small>
                    <p>{{ $activity->created_at->format('M d, Y  m:i:s') }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="miancomment-text">
            <div class="Comment-part">
                <div class="Comment-img">
                    <img src="/assets/img/icon18.svg" alt="images not found" />
                </div>
                <div class="Comment-right">
                    <h3><span>Activity</span> No Activity Found</h3>
                </div>
            </div>
        </div>
        @endforelse
        <div class="last-comment bg-white">
            <div class="last-comment-left">
                <input type="text" wire:model="task"  wire:keydown.enter="save" name="Write your Comment" placeholder="Write your Comment…" />
            </div>
            <div class="last-comment-right">
                <ul class="d-flex">
                    <li><a href="#"><img src="/assets/img/add.svg" alt="icon" /></a></li>
                    <li><a href="javascript:void(0)" wire:click="save" class="submit"><img src="/assets/img/send.svg" alt="icon"></a></li>
                </ul>
            </div>
        </div>
    </div>