<div x-data="checkUsernameAvailability()">
    {{-- Do your work, then step back. --}}
{{-- @dd($takenUsernames); --}}
    <p x-text="inputValue"></p>
    <input type="text" name="usename" x-model="inputValue" @input="checkUsername()" placeholder="Enter username" class="form-control mb-2" autocomplete="off" style="width: 200px;">
    <p x-bind:class="isAvailable ? 'text-success' : 'text-danger'" x-text="message"></p>
    <button >Check Availability</button>
</div>

<script>
    function checkUsernameAvailability(){
        {
    takenUsername:@js($takenUsernames),
    inputValue: '',
    message: '',
    isAvailable: false,
    checkUsername() {
        if(this.takenUsername.includes(this.inputValue)) {
            this.message = 'Username is already taken';
            this.isAvailable = false;
        } else {
            this.message = 'Username is available';
            this.isAvailable = true;
        }
    }
}
    }
</script>