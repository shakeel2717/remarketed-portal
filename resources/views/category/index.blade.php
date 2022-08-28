@extends("layouts.app")
@section("content")
<div class="tab-part">
    <div class="about-center section-center">
        <div class="about">
            <div class="boardview-part">
                <h2>All Categories List</h2>
                <br>
                <button href="#" class="btn-theme" data-bs-toggle="modal" data-bs-target="#addCategory">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Add Category
                </button>
                <br>
                <br>
                <livewire:all-categories />
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategory" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="my-3">
                    <h2 class="title text-center">Add new Category</h2>
                    <hr>
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Category Name" required>
                        </div>
                        <br>
                        <div class="form-group d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection