@foreach($pantries as $pantry)
    <li class="me-2">
        <a href="#" class="inline-block px-4 py-2 rounded-md hover:text-slate-900 hover:bg-blue-600">{{$pantry['name']}}</a>
    </li>
@endforeach
