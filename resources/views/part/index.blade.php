@extends("layouts.app")
@section("content")
<div class="tab-part">
    <div class="about-center section-center">
        <div class="about">
            <div class="boardview-part">
                <h2>All Categories List</h2>
                <br>
                <button href="#" class="btn-theme" data-bs-toggle="modal" data-bs-target="#addPart">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Add Part
                </button>
                <br>
                <br>
                <livewire:all-parts />
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addPart" tabindex="-1" aria-labelledby="addPart" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="my-3">
                    <h2 class="title text-center">Add new Part</h2>
                    <hr>
                    <form action="{{ route('parts.store') }}" method="POST">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="name">Select Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Please select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="name">Part Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Part Name" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" name="stock" id="stock" placeholder="Available Stock" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="min_price">Min Price</label>
                            <input type="number" class="form-control" name="min_price" id="min_price" placeholder="Min Price" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="max_price">Max Price</label>
                            <input type="number" class="form-control" name="max_price" id="max_price" placeholder="Max Price" required>
                        </div>
                        <br>
                        <div class="form-group d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Part</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection