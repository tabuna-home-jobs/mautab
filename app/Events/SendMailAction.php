<?php namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Mail;

class SendMailAction extends Event
{

	use SerializesModels;

	/**
	 * Отправка кода активации на email клиента
	 *
	 * @return void
	 */
	public function __construct($activationCode, $request)
	{
		Mail::send('mail/activate', ['activationCode' => $activationCode, 'email' => $request->email], function ($message) use ($request) {
			$message->from('us@example.com', 'Laravel');
			$message->to($request->email)->cc($request->email);
		});
	}

}
