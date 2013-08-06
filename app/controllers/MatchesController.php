<?php

class MatchesController extends \BaseController {
protected $layout = 'master';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		echo 'here we show all matches';
		$matches =  Mydata::all();
		$young = MyData::where('val1', '<', 24)->take(3)->get();
		$old = MyData::where('val1', '>=', 24)->take(3)->get();
		$ordered = MyData::orderBy('val1', 'asc')->get();
		$inverse = MyData::orderBy('val1', 'desc')->get();
		$this->layout->content = 
			View::make('matches/index', compact('matches'), compact('young') )
			->with('ordered', $ordered)
			->with('inverse', $inverse)
			->with('old', $old);
		
		$title = 'View all matches';
		View::share('title', $title);
		//coz $this->layout->title does not work here

			//->with('matches', MyData::all());
			//->with('matches', MyData::order_by('val1')->get());
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		echo 'a form to match ages';
		$this->layout->content = View::make('matches.form');

		$title = 'Create a new match';
		View::share('title', $title);
		//coz $this->layout->title does not work here
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		MyData::create(array(
			'name1'=>Input::get('name1'),
			'val1'=>Input::get('val1'),
			'name2'=>Input::get('name2'),
			'val2'=>Input::get('val2')
			));
		
		//$id = Mydata::find($id);
		//$match =  Mydata::find($id);
		//return Redirect::to_route('matches.show')
		//->with('match', compact('match'))
		//->with('message', 'Match created successfully!');

		return Redirect::to('matches')
		->with('message', 'Match created successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		//return "I am showing your a single match of id $id";
		
		$match =  Mydata::find($id);
		$combined = $match->name1 . ' vs ' . $match->name2;
		//print_r($match);
		$this->layout->content = 
			View::make('matches.show', compact('match'), compact('combined'))
			->with('id', $id);
		$title = 'Single Match';
		View::share('title', $title);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		print_r(Mydata::find($id));
		return View::make('matches.edit')
			->with('title', 'Edit Match')
			->with('match', Mydata::find($id));
			
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//$match = Mydata::find($id);
		//$match = Mydata::where('id', Mydata::user()->id)->find($id);

		//$url = Url::where('user_id', Auth::user()->id)->find($id);
		//$url = Url::find($id);
		//$input = Mydata::where('id', Mydata::find($id));

		//$input = Mydata::where('id', '=', $id);
		$input = Mydata::find($id);
		//$new_input = 
		$input->update(array(
			'name1'=>Input::get('name1'),
			'val1'=>Input::get('val1'),
			'name2'=>Input::get('name2'),
			'val2'=>Input::get('val2'),
			'updated_at'=>new DateTime
			));
		$input->save();
		
		
		return Redirect::to('matches/'.$id)
		->with('message', 'Match updated successfully!');
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = Mydata::find($id)->destroy();
		$data->save();
	}

}