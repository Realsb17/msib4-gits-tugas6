<div>
    <div class="card">
         <div class="card-header">Form</div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <form wire:submit.prevent="store">
            <div class="mb-3">
                <label for="name" class="form-label">Name</nav></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                @error('name')
                    <span class="text-danger"></span>
                    <div class="invalid-feedback">
                        {{ $message  }}
                    </div>
                 @enderror
             </div>
             <div class="mb-3">
                <label for="email" class="form-label">Email Adress</nav></label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                @error('email')
                    <span class="text-danger"></span>
                    <div class="invalid-feedback">
                         {{ $message  }}
                    </div>
                 @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</nav></label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" wire:model="password">
                @error('password')
                    <span class="text-danger"></span>
                    <div class="invalid-feedback">
                        {{ $message  }}
                    </div>
                 @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
