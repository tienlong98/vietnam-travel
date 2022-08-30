<div class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-center">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6 d-flex justify-content-between">
                                <h5>Edit Category</h5>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end">
                                <a href="{{ route('admin.categories') }}"
                                    class="btn btn-success pull-right">All Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if (Session::has('message_succeed'))
                                    <div class="alert alert-success">{{ Session::get('message_succeed') }}</div>
                                @endif
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-6">
                                        <form action="" method="" class="form-horizontal" wire:submit.prevent="updateCategory">
                                            <div class="form-group d-flex justify-content-around mb-3">
                                                <label for="" class="control-label ">Category Name</label>
                                                <div class="">
                                                    <input class="form-control input-lg" type="text" name="" id=""
                                                        placeholder="Category Name" wire:model='name' wire:keyup='generateslug'>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-around mb-3">
                                                <label for="" class=" control-label ">Category Slug </label>
                                                <div class="">
                                                    <input class="form-control input-lg" type="text" name="" id=""
                                                        placeholder="Category Slug" wire:model='slug' wire:keyup=''>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-center mt-3 mb-3">
                                                <div class="mt-3">
                                                    <button type="submit" class=" btn btn-primary ">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
