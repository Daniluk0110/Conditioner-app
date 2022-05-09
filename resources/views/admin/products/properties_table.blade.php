<div class="card-body">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="width: 10px">id</th>
            <th>Название</th>
            <th>Значение</th>
            <th>Числовое значение</th>
        </tr>
        </thead>
        <tbody>
        @foreach($properties as $property)
            <tr>
                <td>{{ $property->id }}</td>
                <td>{{ $property->name }}</td>
                <td>
                    <input type="text"
                           value="{{old('property_text_ids[' . $property->id . ']')}}"
                           name="property_text_ids[{{ $property->id }}]">
                </td>
                <td>
                    <input type="text"
                           value="{{old('property_float_ids[' . $property->id . ']')}}"
                           name="property_float_ids[{{ $property->id }}]">
                </td>
            </tr>
        @endforeach
        </tbody>
        @error('property_text_ids')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        @error('property_float_ids')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </table>
</div>
