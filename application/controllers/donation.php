<?php

class Donation_Controller extends Base_Controller
{

	public function action_index()
	{		
		return View::make('donation.index');
	}

	public function action_donation()
	{
		
	}

	public function action_history()
	{
		return View::make('donation.history');
	}

}