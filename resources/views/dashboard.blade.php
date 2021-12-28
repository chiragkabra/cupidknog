<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <table class="table table-hover">
            <thead>
            <th>Id</th>
            <th>name</th>
            <th>Email</th>
            </thead>
            <tbody>
            @foreach($select as $user)
                <tr>
           <td>{{$user->id}}</td>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
