<x-main-layout>
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th></th>
                <th>NAME</th>
                <th>CODE</th>
                <th>ICON</th>
                <th>STATUS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $element)
                <tr>
                    <th>{{ $element->id }}</th>
                    <td>{{ $element->name }}</td>
                    <td>{{ $element->code }}</td>
                    <td>
                        <span class="p-3 rounded-sm text-[16px]">
                            <i class="fa-solid fa-{{ $element->icon }}"></i>
                        </span>
                    </td>
                    <td>
                        <x-basics.status :type="$element->status">{{ $element->status }}</x-basics.status>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <form class="w-2/3 md:w-1/3 gap-y-2 flex flex-col mx-auto mt-10" action="{{route('categories.store')}}" method="POST">
        @csrf
        <input type="text" class="input input-info w-full" name="name" placeholder="name">
        <input type="text" class="input input-info w-full" name="code" placeholder="CODE">
        <input type="text" class="input input-info w-full" name="icon" placeholder="fa fa-user">
        <button type="submit" class="btn btn-info">Enviar</button>
    </form>

</x-main-layout>
