@if(LaravelLocalization::getCurrentLocale() == 'lt') 
<div class="container-fluid six">
	{{-- <h1 class="sixCatch1">@lang('six.find')</h1> --}}
	<div id="map"></div>
	{{-- <iframe width="100%" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ9TXwzUjc5EYRTKLBFMpAbUY&key=AIzaSyAFltUChUDunwQvIdsH7q8DjoSOfVcRheA" allowfullscreen></iframe>
	
</div> --}}
@endif
<div class="container-fluid six1">
	<div class="container">
		<h1 class="sixCatch1">@lang('six.contacts')<br><span>@lang('six.callus') <span class="glyphicon glyphicon-earphone" style="vertical-align: middle;"></span>
	+370 46 383427</span><br>@lang('six.or')</h1>
			<div class="row">
				<div class="col-md-12 text-center">
					<button button type="button" class="btn-lg btn-mine-six">
									@lang('five.button')
					</button>
				</div>
			</div>
		<div class="row">
			{{-- <div class="col-md-4 metal">
				<form class="contacts" action="post" method="post">
					<h3 class="form-title"><b>@lang('six.fillin')</b></h3>
					<div class="form-group">
						<label for="name"><span class="glyphicon glyphicon-user"></span>@lang('six.name')</label>
						<input class="form-control" type="text" name="name" required title="@lang('six.entername')">
					</div>
					<div class="form-group">
						<label for="name"><span class="glyphicon glyphicon-user"></span>@lang('six.name')</label>
						<input class="form-control" type="text" name="name" required title="@lang('six.entername')">
					</div>
					<div class="form-group">
						<label for="name"><span class="glyphicon glyphicon-user"></span>@lang('six.name')</label>
						<input class="form-control" type="text" name="name" required title="@lang('six.entername')">
					</div>
					<div class="form-group">
						<label for="name"><span class="glyphicon glyphicon-user"></span>@lang('six.name')</label>
						<input class="form-control" type="text" name="name" required title="@lang('six.entername')">
					</div>

				</form>
			</div> --}}
			<div class="col-md-4 col-md-offset-4 metal">
				<h3><b>UAB "VPS"</b></h2>
				<p class="desc">
					Šilutės pl. 79</br>
					LT-94101, Klaipėda</br>
					Įmonės kodas 141994523</br>
					PVM mokėtojo kodas LT419945219</br>
					Telefonas / Faksas +370 46 383427</br>
					El. paštas: info@vpsjet.com
				</p>
			</div>
		</div>
	</div>
</div>

