<select>
    @foreach ($list as $item)
        <option value="{{ $item }}">{{ $item }}</option>
    @endforeach
</select>
