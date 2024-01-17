<div>
    <div class="card bg-success offset-3 col-6">
        <div class="card-header">
            <h4>Create Customer</h4>
        </div>
        <div class="card-body">
            <form wire:submit='updatecustomer' >
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">name:</label>
                    <input wire:model='name' value="{{ $customer->name }}" type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    <div>
                        @error('name')
                         <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                  </div>
                <div class="mb-3 mt-3">
                  <label for="email" class="form-label">Email:</label>
                  <input wire:model='email' type="email" value="{{ $customer->email }}" class="form-control" id="email" placeholder="Enter email" name="email">
                  <div>
                    @error('email')
                     <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Number:</label>
                  <input wire:model='phone' type="text" value="{{ $customer->phone }}" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                  <div>
                    @error('phone')
                     <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                </div>
                <button class="btn btn-sm btn-secondary" wire:navigate href="/customers">Back</button>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
              </form>
        </div>
      </div>
</div>
