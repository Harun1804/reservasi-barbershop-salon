<center style="padding: 0.5rem; width: 100%; box-sizing: border-box; background-color: #FEFEFE;">
	<div style="border-top: 2px solid #7367F0; padding: 2rem; text-align: left; box-sizing: border-box;">
		<h3>Hi {{ $data['name'] }},</h3>
		<p>
			You received this email because you registered your email at
			our website <a href="#">ijigo</a>.
		</p>
		<p>To complete your sign up, please verify your email by clicking the button down below:</p>

		<a href="{{ route('verify', ['token' => $data['token']]) }}" style="background: #7367F0; color: #FFFFFF; display: block; padding: 7px 24px; margin: 2rem 0; border-radius: 0.42rem; border: 1px solid transparent; text-decoration: none; font-weight: bold; text-align: center;">
			VERIFY EMAIL
		</a>

		<p>
			Or copy this link and paste in your web browser<br><br>
			{{ route('verify', ['token' => $data['token']]) }}
		</p>
	</div>
</center>
