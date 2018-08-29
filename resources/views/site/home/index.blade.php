@extends ('site.template.template1')

@section('content')

	<h1>Home Page do Site!</h1>
	{{$teste1 or 'Não existe'}}  
	@if( $var1 == '123')
		<p>É igual</p>	
	@else
		<p>É diferente<p>
	@endif

	@unless( $var1 == 123)
		<p>Não é igual..Unless<p>	
	@endunless

	@for ($i = 0; $i < 10; $i++)
		<p>for: {{$i}}</p>
	@endfor

{{--
	@if (count ($arrayData) > 0)
		@foreach ($arrayData as $array)
			<p>each: {{$array}}</P>
		@endforeach
	@else
		<p>Não existe itens para serem impressos</p>
	@endif
--}}
	@forelse ($arrayData as $array)
		<p>else: {{$array}}</P>
	@empty
		<p>Não existe itens para serem impressos</p>
	@endforelse

@include('site.includes.sidebar', compact('var1'))
@endsection

@push('scripts')
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@endpush
