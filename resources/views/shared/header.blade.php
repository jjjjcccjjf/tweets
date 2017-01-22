<h1>
	<a href="{{ url('/messages') }}">Her messages</a> /
	<a href="{{ url('/tweets') }}">My tweets for her</a>
	😊😚😘😋
	<p style="font-size: 15px">{{ $_GET['add_msg'] or '' }}</p>
</h1>