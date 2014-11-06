@extends('dashboard')

@section('content')
<section class="container">
 <table class="table">
    <tr>
       <th>Title</th>
       <th>Author</th>
       <th>Description</th>
       <th>Price</th>
       <th>Action</th>
    </tr>
    @foreach($booksdata as $book)
      <tr>
         <td>{{ $book->title }}</td>
         <td>{{ $book->author }}</td>
         <td>{{ $book->description }}</td>
         <td>{{ $book->price }}</td>
          <td>{{ link_to_action('BookController@edit', 'edit', array($book->id))}} | {{ link_to_action('BookController@delete', 'delete', array($book->id))}}</td>
    @endforeach
 </table>
</section>
@stop