<h3>Описание:</h3>
<div class="col-12">
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th colspan="2">Общая информация</th>
        </tr>
        </thead>
        @foreach($properties as $property)
            @if($property['tag'] == 'general_information')
                <tr>
                    <td>{{ $property['name'] }}</td>
                    <td>{{ $property['value'] }}</td>
                </tr>
            @endif
        @endforeach
        <thead class="thead-light">
        <tr>
            <th colspan="2">Основные</th>
        </tr>
        </thead>
        @foreach($properties as $property)
            @if($property['tag'] == 'main')
                <tr>
                    <td>{{ $property['name'] }}</td>
                    <td>{{ $property['value'] }}</td>
                </tr>
            @endif
        @endforeach
        <thead class="thead-light">
        <tr>
            <th colspan="2">Конструкция</th>
        </tr>
        </thead>
        @foreach($properties as $property)
            @if($property['tag'] == 'construction')
                <tr>
                    <td>{{ $property['name'] }}</td>
                    <td>{{ $property['value'] }}</td>
                </tr>
            @endif
        @endforeach
        <thead class="thead-light">
        <tr>
            <th colspan="2">Производительность и энергоэффективность</th>
        </tr>
        </thead>
        @foreach($properties as $property)
            @if($property['tag'] == 'performance_and_energy_efficiency')
                <tr>
                    <td>{{ $property['name'] }}</td>
                    <td>{{ $property['value'] }}</td>
                </tr>
            @endif
        @endforeach
        <thead class="thead-light">
        <tr>
            <th colspan="2">Управление и индикация</th>
        </tr>
        </thead>
        @foreach($properties as $property)
            @if($property['tag'] == 'control_and_indication')
                <tr>
                    <td>{{ $property['name'] }}</td>
                    <td>{{ $property['value'] }}</td>
                </tr>
            @endif
        @endforeach
        <thead class="thead-light">
        <tr>
            <th colspan="2">Шум</th>
        </tr>
        </thead>
        @foreach($properties as $property)
            @if($property['tag'] == 'noise')
                <tr>
                    <td>{{ $property['name'] }}</td>
                    <td>{{ $property['value'] }}</td>
                </tr>
            @endif
        @endforeach
        <thead class="thead-light">
        <tr>
            <th colspan="2">Очистка воздуха</th>
        </tr>
        </thead>
        @foreach($properties as $property)
            @if($property['tag'] == 'air_cleaning')
                <tr>
                    <td>{{ $property['name'] }}</td>
                    <td>{{ $property['value'] }}</td>
                </tr>
            @endif
        @endforeach
        <thead class="thead-light">
        <tr>
            <th colspan="2">Габариты</th>
        </tr>
        </thead>
        @foreach($properties as $property)
            @if($property['tag'] == 'dimensions')
                <tr>
                    <td>{{ $property['name'] }}</td>
                    <td>{{ $property['value'] }}</td>
                </tr>
            @endif
        @endforeach

    </table>
</div>
