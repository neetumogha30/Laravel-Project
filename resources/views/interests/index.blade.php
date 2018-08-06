@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Dashboard</div>
                  @foreach($interests as $interest)
                  
                <div class="card-body">
                    {{$interest->interest_name}}
                </div>
                  @endforeach
            </div>
        </div>
    </div>
</div>--->

<div class="container">
     {!! Form::open(['route' => 'interest.create','method'=>'post']) !!}    
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Interests</h6>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <form name ="interest-form" method="post">
                   
                    @foreach($interests as $interest)
			<div class="ui-block" style="float:left;margin:10px;width:30%">
				<!-- Birthday Item -->				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<!--<img src="img/avatar7-sm.jpg" alt="author">-->
					</div>
					<div class="birthday-author-name">
                                            <div class="checkbox">
                                           
                                                <label>
                                                    
                                                       <input  type="checkbox" name ="interestBox[]" value="{{$interest->id}}"><span class="checkbox-material"><span class="check"></span></span>
                                                        {{$interest->interest_name}}
                                                </label>
                                            </div>						
					</div>					
				</div>
				<!-- ... end Birthday Item -->
			</div>
                    @endforeach
                    
		</div>
	</div>
    <div class="align-right">
      {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
