@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8">

        <!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Lista de etiquetas</h3>
					</div>
					<div class="box-body">

              @if( !$tags  )
                  <p>Aún no creas ninguna etiqueta, Estas te ayudaran a ponerles una categoria a tus dispositivos</p>
              @endif



              @if($tags)

                  <table class="table table-striped table-condesed">
                      <thead>
                        <tr>
                          <th class="col-10">Etiqueta</th>
                          <th class="col-10">Descripcion</th>
                          <th class="col-1">Control</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach( $tags AS $tag)
                          <tr>
                            <td>{{ $tag->tag }}</td>
                            <td>
                              {{ $tag->descripcion }} <br>
                              <small>
                                <i class="fa fa-clock-o"></i>
                                    {{ \Carbon\Carbon::parse($tag->created_at)->diffForHumans() }}
                              </small>
                            </td>

                            <td>

                              <div class="btn-group">
                                <button type="button" class="btn btn-success">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Eliminar</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>

                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              @endif

					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>


      <div class="col-md-4">
        <!-- Default box -->
				<div class="box">
          {!! Form::open(['action' => 'TagsController@store']) !!}
					<div class="box-header with-border">
						<h3 class="box-title">Nueva etiqueta</h3>
					</div>
					<div class="box-body">

              {!! Form::open(['action' => 'TagsController@store']) !!}

              <div class="form-group">
                  {!! Form::label('Etiqueta', 'Etiqueta:'); !!}
                  {!! Form::text('tag', null ,['class'=>'form-control', 'placeholder'=>'Nueva etiqueta']); !!}
              </div>
              <div class="form-group">
                  {!! Form::label('descripcion', 'Descripcion:'); !!}
                  {!! Form::textarea('descripcion', null ,['class'=>'form-control', 'placeholder'=>'Descripción para esta etiqueta']); !!}
              </div>

              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif

              @if (session('status-error'))
                  <div class="alert alert-danger">
                      {{ session('status-error') }}
                  </div>
              @endif

					</div>
					<!-- /.box-body -->
          <div class='box-footer'>

            <div class="form-group">
                <button type="submit" id="btnCreateTag" class="btn btn-block btn-success">
                  <i class="fa fa-send-o"></i>&nbsp;&nbsp;
                  Crear etiqueta
                </button>
            </div>


          </div>
				</div>
        {!! Form::close() !!}
				<!-- /.box -->

      </div>



		</div>
	</div>
@endsection
