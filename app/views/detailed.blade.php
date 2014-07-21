<h1>{{ $phone->name['vendor'] }} <i>{{ $phone->name['model'] }}</i></h1>
<h1>Processor:
	{{
	   $phone->cpu['vendor'] .' '.
	   $phone->cpu['model']  .' '.
	   $phone->cores()       .' '.
	   $phone->cpu['frequency'].'GHz'
	}}
</h1>
<h1>Display:
	{{
		$phone->display['height'] . ' x '.
		$phone->display['width'] . ' pixels, ' .
		$phone->display['matrix']
	}}
</h1>
<h1>Camera:
	{{ $phone->camera['mpixels'] . ' Megapixels '. $phone->camera['optics'] }}
</h1>
<h1>
	Battery:
	{{
		$phone->battery['capacity']. ' mAh'
	}}
</h1>