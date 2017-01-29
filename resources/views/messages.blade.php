<!DOCTYPE html>
<html lang="en">
@include('shared.head_msgs')

<?php

?>
<body>
	<div class="flex-center position-ref full-height" style="padding-bottom:50px;">
		<div class="center top-heading">
			@include('shared.header')
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
				$received_at = explode(' ', $msg->received_at); # just splitting the datetime here
				?>
				<article class="white-panel">
					<h4>{{ $msg->body }}</h4>
					<hr>
					<sub>
						{{  $received_at[0] }}
						<br/>
						{{ $received_at[1] }}
					</sub>
						<hr>
						<form method="post" action="{{ route('addComment') }}">
							<div class="form-group">
								<input type="hidden" name="id" value="{{ $msg->id }}">
								<textarea class="form-control" name="comment" placeholder="comment...">{{ $msg->comment or '' }}</textarea>
							</div>
							<div class="form-group">
								<input class="btn btn-default" type="submit" value="Save ❤">
							</div>
						</form>
					</article>
				<?php endforeach;?>
			</section>
		</div>
		@include('shared.scripts')
	</body>
	</html>
