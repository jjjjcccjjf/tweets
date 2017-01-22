<!DOCTYPE html>
<html lang="en">
@include('shared.head_msgs')

<?php

?>
<body>
	<div class="flex-center position-ref full-height" style="padding-bottom:50px;">
		<div class="center top-heading">
			<h1>
				<a href="{{ url('/messages') }}">Her messages</a> /
				<a href="{{ url('/tweets') }}">My tweets for her</a>
				 😊😚😘😋
			<p style="font-size: 15px">{{ $_GET['add_msg'] or '' }}</p>
			</h1>

			<div class="row">

				<div class="col-md-4">
					<form method="post" action="{{ route('addMessage') }}">
						<div class="form-group">
							<input class="form-control" type="hidden" name="from" value="Jona">
						</div>
						<div class="form-group">
							<input class="form-control" type="hidden" name="mobile" value="+639163780740">
						</div>
						<div class="form-group">
							<textarea class="form-control" name="body" placeholder="message body..."></textarea>
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="received_at" placeholder="yyyy-mm-dd h:i:s">
						</div>
						<div class="form-group">
							<input class="btn btn-default" type="submit" value="Save ❤">
						</div>
					</form>
				</div>
				<div class="col-lg-8">
					
				</div>
			</div>
		</div>
		<section id="pinBoot">

		<?php foreach($msgs as $msg):
		$received_at = explode(' ', $msg->received_at);
		?>
			<article class="white-panel">
				<h4><?= $msg->body ?></h4>
				<hr>
				<sub><?= $received_at[0] . "<br/>" . $received_at[1] ?></sub>
			</article>
		<?php endforeach;?>
		</section>
	</div>
	@include('shared.scripts')
</body>
</html>
