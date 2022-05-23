@extends('templates.base')
@section('pageTitle', 'Pics listing')
@section('pageMain')

    <div class="container">
        <div class="row d-none">
            <div class="col">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Post title</th>
                          <th scope="col">Pic title</th>
                          <th scope="col">Shoot place</th>
                          <th scope="col">Pic date</th>
                          <th scope="col">Pic size</th>
                          <th scope="col">On sale</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pics as $pic)
                        <tr>
                            <th scope="row">{{$pic->id}}</th>
                            <td>{{$pic->post_title}}</td>
                            <td>{{$pic->pic_title}}</td>
                            <td>{{$pic->shoot_place}}</td>
                            <td>{{$pic->pic_date}}</td>
                            <td>{{$pic->pic_size}}</td>
                            <td>{{$pic->on_sale}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div>
        </div>
        <div class="row g-4">
            @foreach ($pics as $pic)
                <div class="col-4">
                    <div class="card h-100">
                        <img src="{{$pic->image}}" alt="">
                        <div class="card-body">
                            <h2 class="card-title">
                                {{-- qui il nome della route è sempre quella data da laravel(alla   fine le mette sempre uguali: il nome dell'elemento al plurale. il     nome del metodo, basta impararsi i metodi), la differenza è che     dobbiamo passargli un secondo argomento che sarebbe l'id, perché è un   parametro dinamico(quello che vogliamo è che ad ogni titolo assegni   il link dell'id corrispondente) --}}
                            <a href="{{ route('pics.show', $pic->id) }}">{{$pic->post_title}}</a>
                        </h2>
                        <p class="card-text">{{$pic->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

{{$pics->links()}}
@endsection

{{-- ciao --}}
