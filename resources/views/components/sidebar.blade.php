<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			@foreach($listMenu as $x) @if(isset($x['child']))
			<li class="treeview">
				<a href="#">
							<i class="{{$x['icon']}}"></i> <span>{{$x['text']}}</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
				<ul class="treeview-menu">
					@foreach($x['child'] as $y)
					<li><a href="{{$y['url']}}"><i class="{{$y['icon']}}"></i> <span> {{$y['text']}}</span></a></li>
					@endforeach
				</ul>
			</li>
			@else
			<li><a href="{{$x['url']}}"><i class="{{$x['icon']}}"></i> <span> {{$x['text']}}</span></a></li>
			@endif @endforeach
		</ul>
	</section>
</aside>
{{-- Props : 1.listMenu (url, icon, text, child) --}}
