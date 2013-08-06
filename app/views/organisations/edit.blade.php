@extends('layouts.scaffold')

@section('main')

<h1>Edit Organisation</h1>
{{ Form::model($organisation, array('method' => 'PATCH', 'route' => array('organisations.update', $organisation->id))) }}
    <ul>
        <li>
            {{ Form::label('parent_organisation', 'Parent_organisation:') }}
            {{ Form::text('parent_organisation') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type') }}
        </li>

        <li>
            {{ Form::label('other', 'Other:') }}
            {{ Form::text('other') }}
        </li>

        <li>
            {{ Form::label('registration_number', 'Registration_number:') }}
            {{ Form::text('registration_number') }}
        </li>

        <li>
            {{ Form::label('logo', 'Logo:') }}
            {{ Form::text('logo') }}
        </li>

        <li>
            {{ Form::label('director', 'Director:') }}
            {{ Form::text('director') }}
        </li>

        <li>
            {{ Form::label('place', 'Place:') }}
            {{ Form::text('place') }}
        </li>

        <li>
            {{ Form::label('geolocation', 'Geolocation:') }}
            {{ Form::text('geolocation') }}
        </li>

        <li>
            {{ Form::label('contact_person', 'Contact_person:') }}
            {{ Form::text('contact_person') }}
        </li>

        <li>
            {{ Form::label('mailing_address', 'Mailing_address:') }}
            {{ Form::text('mailing_address') }}
        </li>

        <li>
            {{ Form::label('telephone', 'Telephone:') }}
            {{ Form::input('number', 'telephone') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('website', 'Website:') }}
            {{ Form::text('website') }}
        </li>

        <li>
            {{ Form::label('organisation', 'Organisation:') }}
            {{ Form::text('organisation') }}
        </li>

        <li>
            {{ Form::label('topics', 'Topics:') }}
            {{ Form::text('topics') }}
        </li>

        <li>
            {{ Form::label('other_topics', 'Other_topics:') }}
            {{ Form::text('other_topics') }}
        </li>

        <li>
            {{ Form::label('who_do_you_help', 'Who_do_you_help:') }}
            {{ Form::text('who_do_you_help') }}
        </li>

        <li>
            {{ Form::label('who_is_your_founder', 'Who_is_your_founder:') }}
            {{ Form::text('who_is_your_founder') }}
        </li>

        <li>
            {{ Form::label('when_did_you_start', 'When_did_you_start:') }}
            {{ Form::text('when_did_you_start') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('organisations.show', 'Cancel', $organisation->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop