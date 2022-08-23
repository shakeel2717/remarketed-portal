@extends("layouts.app")
@section("content")
<div class="tab-part">
    <div class="about-center section-center">
        <div class="about">
            <div class="boardview-part">
                <h2>All Task List</h2>
                <br>
                <livewire:all-task />
            </div>
        </div>
    </div>
</div>
@endsection