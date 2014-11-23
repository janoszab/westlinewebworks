<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class dataGenerator extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'generate:data';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate random data.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$this->info('Start ...');

		$num = mt_rand(0, 1000);

		for($i = 0; $i <= $num; $i++) {
			$uts = mt_rand(1414059392,1416737792);

			DB::table('poll')->insert([
				[
					'question_id' => mt_rand(1, 5),
					'vote' => mt_rand(1, 10),
					'created_at' => date("Y-m-d H:i:s", $uts)
				]
			]);
		}

		$this->info($num . ' record added to database!');
		$this->info('End');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [];
	}

}
