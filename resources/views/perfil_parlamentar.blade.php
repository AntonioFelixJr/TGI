@extends('layout.app')

@section('titulo', 'Perfil')
@section('subTitulo', '')

@section('conteudo')
    <div class="card text-justify mt-5">
      <!--div class="card-header bg-primary text-light">
       Gastos públicos 
      </div-->
      <div class="card-body">
    		<div class="row">
          <div class="card-title col-sm-12 h3 col-md-12 mb-3">{{ '*Nome do Parlamentar*' }} </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
            <img class="card-img img-thumbnail" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [150x150]" src="{{ URL::asset('images/parlamentares/parlamentar_sem_foto.png') }}" data-holder-rendered="true">
          </div>

          <div class="card-subtitle col-lg-3 col-sm-12 col-md-2">

            <h5> Partido: </h5> 

            <p>
               {{ '*Nome do Partido*' }} 
            </p>
            <h5> Estado: </h5> 

            <p>
               {{ '*Nome do Estado*' }} 
            </p>
          </div>

          <div class="card-subtitle col-lg-3 col-sm-12 col-md-3 ">

            <h5> Maior gasto: </h5> 

            <p>
               {{ 'R$ *Maior Gasto*' }} 
            </p>
            <h5> Data : </h5> 

            <p>
               {{ '*Data do Maior gasto*' }} 
            </p>

          </div>

          <div class="card-subtitle col-lg-3 col-sm-12 col-md-3 ">

            <h5> Descrição gasto: </h5> 

            <p>
               {{ 'R$ *Desc gasto*' }} 
            </p>
            <h5> Fornecedor </h5> 

            <p>
               {{ '*Data do Maior gasto*' }} 
            </p>

          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center my-4">
            <p class=" display-3">Todos os gastos</p>
            
          </div>
        </div>

      
      <div class="row mt-3">

          <table class="table  table-striped col-lg-12 col-md-12 col-sm-12 float-right">

          <thead class="bg-primary text-light">

            <tr>

              <th scope="col">Valor </th>
              <th scope="col">Tipo</th>
              <th scope="col">Fornecedor</th>
              <th scope="col">Data</th>

            </tr>

          </thead>

          <tbody>

            <tr>

              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>

            </tr>

            <tr>

              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>

            </tr>

            <tr>

              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>

            </tr>

          </tbody>

        </table>
      </div>
        <nav>

          <ul class="pagination justify-content-center">

            <li class="page-item disabled">
              <a class="page-link" href="">Anterior</a>
            </li>

            <li class="page-item active">
              <a class="page-link" href="">1</a>
            </li>

            <li class="page-item">
              <a class="page-link" href="">2</a>
            </li>

            <li class="page-item">
              <a class="page-link" href="">Próximo</a>
            </li>

          </ul>
        </nav>

      </div>
  		
	</div>
@endsection