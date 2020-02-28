@extends('main')
@section('title','Home')
@section('contete')

<div class="card-body">

  <table class="table table-bordered">
    <thead class="thead-light">
      <h1 align="center">Todos</h1>
      <thead class="thead-dark">
        <tr>

          <th scope="col">c</th>
          <th scope="col">t</th>

        </tr>

      </thead>
    <tbody>
      @foreach($tickets as $t)
      <tr>
        <td>{{$t->type}}</td>
        <td>{{$t->content}}</td>
        <td>{{$t->state}}</td>
       
      @endforeach
    </tbody>
  </table>
</div>

<section class="ftco-services ftco-no-pb">
  <div class="container-wrap">
    <div class="row no-gutters">
      <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-teacher"></span>

            <div class="media-body p-2 mt-3">
              <a href="#"> <button type="button" class="btn">
                  <h3 class="heading"> Advise on social problem </h3>
                </button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-reading"></span>

            <div class="media-body p-2 mt-3">
              <a href="#"><button type="button" class="btn">
                  <h3 class="heading"> Advise study plan </h3>
                </button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-books"></span>

            <div class="media-body p-2 mt-3">
              <a href="#"><button type="button" class="btn">
                  <h3 class="heading"> Advise about course </h3>
                </button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="glyphicon glyphicon-envelope"></span>

            <div class="media-body p-2 mt-3">
              <a href="#"><button type="button" class="btn">
                  <h3 class="heading"> send a massage! </h3>
                </button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection