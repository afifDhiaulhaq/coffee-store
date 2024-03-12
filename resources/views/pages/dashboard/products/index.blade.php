@extends("layouts.dashboard.main")

@section("section")

<div class="container">
    <h1>Product</h1>
    <div class="mt-5">
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <h3>{{ ($action === "edit") ? 'Edit ' : 'Create ' }} Product</h3>
        <form class="form-product" action="{{ ($action === "edit") ? '/dashboard/products/update/{product:id}' : '/dashboard/products/add' }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Menu Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ ($action === "edit") ? $product->name : old('name') }}">
                @error('name')
                    <div class="invalid-feedback "style="display: block">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Price</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ ($action === "edit") ? $product->price : old('price') }}" >
                @error('price')
                    <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Description</label>
                <input type="text" id="desc" name="desc" class="form-control"  value="{{ ($action === "edit") ? $product->desc : old('desc') }}">
                @error('desc')
                    <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="country">Status</label>
                <select class="custom-select d-block w-100" id="country" required>
                    <option value="">Normal</option>
                    <option value="">Best Seler</option>
                    <option value="">Promo</option>
                </select>
            </div> --}}
            <button type="submit" class="btn btn-primary">{{ ($action === "edit") ? 'Update ' : 'Add ' }}</button>
            <?php if($action === "edit"): ?>
                <a href="/dashboard/products">
                    <div  class="btn btn-warning">Cancel</div>
                </a>
            <?php endif; ?>
        </form>
    </div>
 
    <div class="table-product mt-5">
        <h3>List Product</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Menu Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Description</th>
                  <th scope="col">Update At</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>$ {{ $product->price }}</td>
                        <td>{{ $product->desc }}</td>
                        <td>{{ $product->updated_at}}</td>
                    <td>
                        <a href="/dashboard/products/edit/{{ $product->id }}">
                            <button type="button" class="btn btn-info">Edit</button>
                        </a>
                        <a href="/dashboard/products/delete/{{ $product->id }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                    </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection