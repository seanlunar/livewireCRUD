<div>
    {{-- In work, do what you enjoy. --}}

    <button wire:navigate href='/customers/create' class="btn btn-sm btn-secondary">Create</button>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <button wire:navigate href="/customers/{{ $customer->id }}" class="btn btn-primary btn-sm">view</button>
                        <button wire:navigate href="/editcustomer/{{ $customer->id }}" class="btn btn-success btn-sm">edit</button>
                        <button wire:click='deleteCustomer({{ $customer->id }})' class="btn btn-danger btn-sm">delete</button>

                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>
