<x-main-layout>
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <x-basics.status :type="$user->status">{{ $user->status }}</x-basics.status>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{ $users->links() }}

    <form class="flex flex-col w-2/3 md:w-1/3 gap-y-3 mx-auto mt-10" action="{{route('users.store')}}" method="POST">
        @csrf
        <input type="text" class="input input-info w-full" name="name" placeholder="name">
        <input type="text" class="input input-info w-full" name="username" placeholder="username">
        <input type="password" class="input input-info w-full" name="password" placeholder="password">
        <input type="text" class="input input-info w-full" name="email" placeholder="email">
        <button type="submit" class="btn btn-info">Enviar</button>
    </form>
    @if ($errors->any())
            @error('name')
            {{ $message }}
            @enderror
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-main-layout>
