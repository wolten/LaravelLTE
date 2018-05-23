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
					TAGS
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>


      <div class="col-md-4">
        <!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Nueva etiqueta</h3>
					</div>
					<div class="box-body">

               

					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

      </div>



		</div>
	</div>
@endsection
