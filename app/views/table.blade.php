<table>
	<tr>
		<td>
			<h1>Name</h1>
		</td>
		<td>
			<h1>{{ $phone->name['vendor'] }} <i>{{ $phone->name['model'] }}</i></h1>
		</td>
	</tr>
	<tr>
		<td>
			<h1>Processor</h1>
		</td>
		<td>
			<h1>
				{{
	   				$phone->cpu['vendor'] .' '.
	   				$phone->cpu['model']  .' '.
	   				$phone->cores()       .' '.
	   				$phone->cpu['frequency'].'GHz'
				}}
			</h1>
		</td>
	</tr>
	<tr>
		<td>
			<h1>Display</h1>
		</td>
		<td>
			<h1>
				{{
					$phone->display['height'] . ' x '.
					$phone->display['width'] . ' pixels, ' .
					$phone->display['matrix']
				}}
			</h1>
		</td>
	</tr>
	<tr>
		<td>
			<h1>Camera</h1>
		</td>
		<td>
			<h1>{{ $phone->camera['mpixels'] . ' Megapixels '. $phone->camera['optics'] }}</h1>
		</td>
	</tr>
	<tr>
		<td>
			<h1>Battery</h1>
		</td>
		<td>
			<h1>{{ $phone->battery['capacity']. ' mAh' }}</h1>
		</td>
	</tr>
</table>