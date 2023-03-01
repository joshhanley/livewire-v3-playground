<div>
    <div>
        {{-- <div>User ID:<input type="text" wire:model="user.id" /></div> --}}
        {{-- <div>User name:<input type="text" wire:model="user.name" /></div> --}}
        <div>
            @if($user)
            <div>User: {{ $user->getKey() }}</div>
            <div>User Name: {{ $user->name }}</div>
            <input type="text" wire:model="user.name" />
            {{-- <div>Multiword: {{ $user->multi_word }}</div>
            <input type="text" wire:model="user.multi_word" />
            
            <div>
                @foreach($user->topPosts as $key => $post)
                    <div>Word: {{ $post->word }}</div>
                    <input type="text" wire:model="user.topPosts.{{ $key }}.word" />
                @endforeach
            </div> --}}
            @endif
        </div>

        <div>
            @if($users)
            <p>Users Collection</p>

            @foreach($users as $usersKey => $userLoop)
                <div>
                    <div>User: {{ $userLoop->getKey() }}</div>
                    <div>User Name: {{ $userLoop->name }}</div>
                    <input type="text" wire:model="users.{{ $usersKey }}.name" />
                    <div>Top Posts:
                        @forelse($userLoop->topPosts as $topPostsKey => $post)
                            <div>Word: {{ $post->word }}</div>
                            <input type="text" wire:model="users.{{ $usersKey }}.topPosts.{{ $topPostsKey }}.word" />
                        @empty
                            <div>No Posts</div>
                        @endforelse
                    </div>
                </div>
            @endforeach
            @endif
        </div>

        {{-- <button type="button" wire:click="addUser">Add User</button> --}}

        <button type="button" wire:click="$refresh">Refresh</button>

        @this
    </div>
    
    {{-- <button type="button" x-on:click="$wire.call('user.save')">Save User</button> --}}
    {{-- <button type="button" wire:click="save">Save User</button> --}}
</div>
