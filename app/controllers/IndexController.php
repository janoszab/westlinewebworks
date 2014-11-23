<?php

class IndexController extends Controller {

	public function showIndex()
	{
		//select question_id, count(vote) as vote from poll group by question_id;
		$data = DB::table('poll')
			->select(DB::raw('question_id, count(vote) as vote'))
			->groupBy('question_id')
			->orderBy('vote', 'desc')
			->get();

		if (Request::ajax()) {
			return View::make('pages.ajax', array('data' => $data));
		} else {
			return View::make('pages.index', array('data' => $data));
		}

	}

}
