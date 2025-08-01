<div>
    {{-- In work, do what you enjoy. --}}
    @if(session('users.create'))
        <div class="alert alert-success">
            {{ session('users.create') }}
        </div>
    @endif
    <input type="text" name="username"  autocomplete="off" style="width: 200px;" wire:model="username">
    <button wire:click="save">Save</button>
<ul>
    {{-- @if ($takenUsernames && count($takenUsernames) > 0)
        @foreach ($takenUsernames as $takenUsername)
            <li>{{ $takenUsername }}</li>
        @endforeach
    @else
        <li>No usernames taken</li>
    @endif --}}

    {{-- Check if array is emppty --}}
    @forelse ($takenUsernames as $takenUsername)
        <li>{{ $takenUsername }}</li>
    @empty
        <li>No usernames taken</li>
    @endforelse
</ul>
 
</div>


{{-- TODO! (26-07-25)

- Perform CRUD operations on the User model.
- Implement validation for the username input.


--}}