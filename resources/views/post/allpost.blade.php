@extends('layouts.app')

@section('content')

<div class="container">



<h1>
    All Post
</h1>

<a href="{{ url('/post/create') }}" class="btn btn-primary">Tambah</a>

<table class="table table-bordered">

    <tr>
        <th>
            Title
        </th>
        <th>
            create at
        </th>
    </tr>


    @foreach ($posts as $post)
    
    <tr>
        <td>
            {{ $post->title }}
        </td>
        <td>
            {{ $post->created_at }}
        </td>
    </tr>

    @endforeach


</table>

</div>
@endsection