<div>
    {{-- Do your work, then step back. --}}
    <div class="card offset-3 col-6">
        <div class="card-header">
            View Customer
        </div>
        <div class="card-body">
            <div class="card-title">
                {{ $customer->name }}

            </div>
            <p>
                {{ $customer->email }}
            </p>
            <p>
                {{ $customer->phone }}

            </p>

            <button class="btn btn-sm btn-secondary" wire:navigate href="/customers">Back</button>
        </div>
    </div>
</div>
