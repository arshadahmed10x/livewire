
<div style="border: 1px solid #ccc; padding: 16px; width: 400px; margin: 20px auto; font-family: Arial, sans-serif; background-color: #f9f9f9; border-radius: 8px;">

    {{-- Success Message --}}
    @if(session()->has('users.create'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
         style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 16px; border: 1px solid #c3e6cb;">
        {{ session('users.create') }}
    </div>
    @endif

    <div style="display: flex; flex-direction: column; gap: 10px;">
        <label for="username" style="font-weight: bold;">Username</label>
        <div style="display: flex; align-items: center; gap: 8px;">
            <input 
                type="text" 
                id="username-input" name="username" 
                wire:model.live="username"
                autocomplete="off" 
                placeholder="Enter a username"
                style="flex-grow: 1; padding: 8px; border: 1px solid #ccc; border-radius: 4px; 
                       {{ $errors->has('username') ? 'border-color: red;' : '' }}"
            >
            <button wire:click="save" style="padding: 8px 16px; border: none; border-radius: 4px; background-color: #fff; color: #000; cursor: pointer; border: 1px solid #000;">
                Save
            </button>
        </div>
        
        @error('username')
        <div style="color: red; font-size: 12px; margin-top: -4px;">{{ $message }}</div>
        @enderror
    </div>

    <h3 style="margin-top: 24px; margin-bottom: 8px;">Taken Usernames</h3>
    <ul style="list-style-type: disc; padding-left: 20px; margin: 0; line-height: 1.6;">
        @forelse ($takenUsernames as $takenUsername)
            <li>{{ $takenUsername }}</li>
        @empty
            <li style="color: #666; font-style: italic;">No usernames have been taken yet.</li>
        @endforelse
    </ul>
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        // Listen for the custom 'user-saved' event
        Livewire.on('user-saved', () => {
            // Get the input element by its ID
            const input = document.getElementById('username-input');
            // Manually set its value to an empty string
            if (input) {
                input.value = '';
            }
        });
    });
</script>