<x-app-layout>
    @include('layouts.navigation')
    <NavBar v-bind:current-userImage='{{ asset('/storage/pictures/' . Auth::user()->picture) }}'></NavBar>
    <div id="app">
        
    </div>
</x-app-layout>
