
<!--
Blade Templating:
In the previous question you created a blank blade template file.
Make it so that it is displayed within the layout of the rest of the website:
define a section called 'content' that will contain all the HTML code
make sure that this template extends the layout template layouts/app
-->
@extends('layouts/app')

<!-- Creating Pages
    There are 3 tasks to be done within this question.
1) Create a new blade view file that corresponds to the path hero/index
-->
@section('content')
<h1>The hero roster</h1>
@endsection
