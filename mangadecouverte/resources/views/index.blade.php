<table class="table talbe-bordered table-striped">
    <thead>
        <th>Id</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Couverture</th>
    </thead>
    @foreach($mangas as $manga)
    <tr>
        <td>{{ $manga->id_manga}}</td>
        <td>{{ $manga->titre}}</td>
        <td>{{$manga ->prix}}</td>
        <td>{{$manga->couverture}}</td>
    </tr>
    @endforeach
</table>
