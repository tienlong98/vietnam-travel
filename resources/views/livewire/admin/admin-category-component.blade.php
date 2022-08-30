<div class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">All category</div>
                            <div class="col-lg-6 d-flex justify-content-end">
                                <a href="{{ route('admin.addcategory') }}" class="btn btn-success pull-right">Add
                                    categories</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message_succeed'))
                            <div class="alert alert-success">{{ Session::get('message_succeed') }}</div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>
                                            <a
                                                href="{{ route('admin.editcategory', ['category_slug' => $category->slug]) }}">
                                                <ion-icon name="create-outline"></ion-icon>
                                            </a>
                                            <a class="ml-2"
                                                onclick="confirm('削除しますか？') || event.stopImmediatePropagation()"
                                                href="#" wire:click.prevent="deleteCategory({{ $category->id }})">
                                                <ion-icon name="close-circle-outline"></ion-icon>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
