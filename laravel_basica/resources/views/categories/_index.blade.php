{{-- Varibales disponible:
    $categories Array(Categorie) --}}


@foreach ($categories as $categorie)
    <li><a href="#">{{ $categorie->name }} [{{ count($categorie->posts) }}]</a></li>
@endforeach
