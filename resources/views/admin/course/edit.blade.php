@extends('layouts.adminbase')

@section('title', 'Edit Course :'.$data->title)

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Edit Course: {{$data->title}}</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Course Elements</h4>
                            <form role="form" action="{{route('admin.course.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        </div>
                    </div>
                    <form>
                            @csrf
                        <div class="form-group">
                            <label>Parent Category</label>

                            <select class="form-control select2" name="category_id" style="width: 200px">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif >
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                    </option>
                                @endforeach
                            </select>

                        </div>

                            <label>Title</label>
                            <input class="form-control" type="text" name="title" value="{{$data->title}}">
                        <div class="form-group" >
                            <label>Keywords</label>
                            <input class="form-control" type="text" name="keywords"  value="{{$data->keywords}}">
                        </div>
                        <div class="form-group" >
                            <label>Description</label>
                            <input class="form-control" type="text" name="description"  value="{{$data->description}}">
                        </div>
                        <div class="form-group" >
                            <label>Price</label>
                            <input class="form-control" type="number" name="price" value="{{$data->price}}">
                        </div>
                        <div class="form-group" >
                            <label>Tax %</label>
                            <input class="form-control" type="number" name="tax" value="{{$data->tax}}">
                        </div>
                        <div class="form-group" >
                            <label>Detail Inf</label>
                            <textarea class="form-control" name="detail">
                                  {{$data->detail }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                            <input type="file" class="custom-file-input " name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                        </div>
                            </div>
                        </div>

                        <div class="form-group">
                              <label>Status</label>
                              <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                              </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
                </div>
        </div>

                    </form>
                    <div class="collapse collapse-box" id="horizontal-basic-form1">
                        <div class="code-box">
                            <div class="clearfix">
                                <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#horizontal-basic"><i class="fa fa-clipboard"></i> Copy Code</a>
                                <a href="#horizontal-basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                            </div>
                            <pre><code class="xml copy-pre hljs" id="horizontal-basic">
<span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Text<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Johnny Brown"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Email<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"bootstrap@example.com"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>URL<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"https://getbootstrap.com"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"url"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Telephone<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1-(111)-111-1111"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"tel"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Password<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"password"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"password"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Readonly input<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Readonly input here…"</span> <span class="hljs-attr">readonly</span>=<span class="hljs-string">""</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Disabled input<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Disabled input"</span> <span class="hljs-attr">disabled</span>=<span class="hljs-string">""</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-md-6 col-sm-12"</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"weight-600"</span>&gt;</span>Custom Checkbox<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-checkbox mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customCheck1-1"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customCheck1-1"</span>&gt;</span>Check this custom checkbox<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-checkbox mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customCheck2-1"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customCheck2-1"</span>&gt;</span>Check this custom checkbox<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-checkbox mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customCheck3-1"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customCheck3-1"</span>&gt;</span>Check this custom checkbox<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-checkbox mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customCheck4-1"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customCheck4-1"</span>&gt;</span>Check this custom checkbox<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
			<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-md-6 col-sm-12"</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"weight-600"</span>&gt;</span>Custom Radio<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-radio mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customRadio4"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"customRadio"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customRadio4"</span>&gt;</span>Toggle this custom radio<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-radio mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customRadio5"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"customRadio"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customRadio5"</span>&gt;</span>Or toggle this other custom radio<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
				<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control custom-radio mb-5"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"customRadio6"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"customRadio"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-input"</span>&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-control-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"customRadio6"</span>&gt;</span>Or toggle this other custom radio<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
				<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
			<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Disabled select menu<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">disabled</span>=<span class="hljs-string">""</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">option</span>&gt;</span>Disabled select<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>input plaintext<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">readonly</span>=<span class="hljs-string">""</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control-plaintext"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"email@example.com"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Textarea<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Help text<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">small</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-text text-muted"</span>&gt;</span>
		  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
		<span class="hljs-tag">&lt;/<span class="hljs-name">small</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Example file input<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"file"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control-file form-control height-auto"</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-group"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Custom file input<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-file"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"file"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-file-input"</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"custom-file-label"</span>&gt;</span>Choose file<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
		<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>

</code></pre>
                        </div>
                    </div>
                </div>


@endsection
