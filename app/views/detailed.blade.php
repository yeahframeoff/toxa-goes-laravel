<h1>{{ $phone->name['vendor'] }} <i>{{ $phone->name['model'] }}</i></h1>
<h1>Processor:
	{{
	   $phone->cpu['vendor'] .' '.
	   $phone->cpu['model']  .' '.
	   $phone->cores()       .' '.
	   $phone->cpu['frequency'].'GHz'
	}}
</h1>
<!-- <h1>Please, specify in url the id (0 to 5) of phone you want to watch</h1>
<h1>{{-- $url --}}/<a class="highlighted">right here</a></h1> -->