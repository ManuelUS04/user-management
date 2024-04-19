<div>
    @if(session()->has('message'))
        <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
            <div class="felx">
                <div>
                    <h4>{{session('message')}}</h4>
                </div>
            </div>
        </div>
    @endif
    <div class="flex justify-end">
        <button wire:click="crear" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 mb-2"> + Agregar Usuario</button>
    </div>
    @if ($modal)
        @include('livewire.crear')        
    @endif
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-gray-600 text-white">
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Nro de telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="border px-4 py-2">{{ $user->id }}</td>
                <td class="border px-4 py-2">{{ $user->name }}</td>
                <td class="border px-4 py-2">{{ $user->last_name }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>
                <td class="border px-4 py-2">{{ $user->phone }}</td>
                <td>
                    <button wire:click="edit({{$user->id}})"  class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4">Editar</button>
                    <button  wire:click="delete({{$user->id}})" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
