@extends('layouts.scaffold')

@section('main')

<h1>Show Organisation</h1>

<p>{{ link_to_route('organisations.index', 'Return to all organisations') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Parent_organisation</th>
				<th>Type</th>
				<th>Other</th>
				<th>Registration_number</th>
				<th>Logo</th>
				<th>Director</th>
				<th>Place</th>
				<th>Geolocation</th>
				<th>Contact_person</th>
				<th>Mailing_address</th>
				<th>Telephone</th>
				<th>Email</th>
				<th>Website</th>
				<th>Organisation</th>
				<th>Topics</th>
				<th>Other_topics</th>
				<th>Who_do_you_help</th>
				<th>Who_is_your_founder</th>
				<th>When_did_you_start</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $organisation->parent_organisation }}}</td>
					<td>{{{ $organisation->type }}}</td>
					<td>{{{ $organisation->other }}}</td>
					<td>{{{ $organisation->registration_number }}}</td>
					<td>{{{ $organisation->logo }}}</td>
					<td>{{{ $organisation->director }}}</td>
					<td>{{{ $organisation->place }}}</td>
					<td>{{{ $organisation->geolocation }}}</td>
					<td>{{{ $organisation->contact_person }}}</td>
					<td>{{{ $organisation->mailing_address }}}</td>
					<td>{{{ $organisation->telephone }}}</td>
					<td>{{{ $organisation->email }}}</td>
					<td>{{{ $organisation->website }}}</td>
					<td>{{{ $organisation->organisation }}}</td>
					<td>{{{ $organisation->topics }}}</td>
					<td>{{{ $organisation->other_topics }}}</td>
					<td>{{{ $organisation->who_do_you_help }}}</td>
					<td>{{{ $organisation->who_is_your_founder }}}</td>
					<td>{{{ $organisation->when_did_you_start }}}</td>
                    <td>{{ link_to_route('organisations.edit', 'Edit', array($organisation->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('organisations.destroy', $organisation->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop