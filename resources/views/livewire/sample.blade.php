<div>
    <div>
        Test: {{ $test }} <button type="button" wire:click="$refresh">Refresh</button>
        @error('test') {{ $message }} @enderror
    </div>
    <button type="button" wire:click="save">Save</button>
    <button type="button" wire:click="other">Other</button>
    <div>User: {{ $user->id }}</div>
    <div>User: {{ $user->name }}</div>
    <div><input type="text" wire:model="user.name" /></div>
</div>
