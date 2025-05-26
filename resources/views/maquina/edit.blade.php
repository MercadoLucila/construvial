<div>
    <form action="">
        <select name="type" id="type">
            @foreach ($tipos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->name}}</option>
            @endforeach
        </select>
    </form>
</div>
