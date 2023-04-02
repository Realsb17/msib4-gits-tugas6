<div>
    <div>
        <div>
            <div class="card">
                 <div class="card-header">Form Product Edit</div>
                    <div class="card-body">
                    <form wire:submit.prevent="update">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</nav></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                        @include('my_components.alert_success')
                     </div>
                     <div class="mb-3">
                        <label for="description" class="form-label">Description</nav></label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" wire:model="description" >
                        @error('description')
                            <span class="text-danger"></span>
                            <div class="invalid-feedback">
                                 {{ $message  }}
                            </div>
                        @enderror
                    </div>

                     <div class="mb-3">
                        <label for="photo" class="form-label">Photo</nav></label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" wire:model="photo">
                        @error('photo')
                            <span class="text-danger"></span>
                            <div class="invalid-feedback">
                                 {{ $message  }}
                            </div>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</nav></label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model="price">
                        @error('price')
                            <span class="text-danger"></span>
                            <div class="invalid-feedback">
                                 {{ $message  }}
                            </div>
                         @enderror
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
            </div>
        </div>

    </div>

</div>
