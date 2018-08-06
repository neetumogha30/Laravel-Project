@php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

@endphp

<!--<div class="card">
    <div class="card-header @role('admin', true) bg-secondary text-white @endrole">

        Welcome {{ Auth::user()->name }}

        @role('admin', true)
            <span class="pull-right badge badge-primary" style="margin-top:4px">
                Admin Access
            </span>
        @else
            <span class="pull-right badge badge-warning" style="margin-top:4px">
                User Access
            </span>
        @endrole

    </div>
    <div class="card-body">
        <h2 class="lead">
            {{ trans('auth.loggedIn') }}
        </h2>
        <p>
            <em>Thank you</em> for checking this project out. <strong>Please remember to star it!</strong>
        </p>
        <p>
            <iframe src="https://ghbtns.com/github-btn.html?user=jeremykenedy&repo=laravel-auth&type=star&count=true" frameborder="0" scrolling="0" width="170px" height="20px" style="margin: 0px 0 -3px .5em;"></iframe>
        </p>
        <p>
            This page route is protected by <code>activated</code> middleware. Only accounts with activated emails are able pass this middleware.
        </p>
        <p>
            <small>
                Users registered via Social providers are by default activated.
            </small>
        </p>

        <hr>

        <p>
            You have
                <strong>
                    @role('admin')
                       Admin
                    @endrole
                    @role('user')
                       User
                    @endrole
                </strong>
            Access
        </p>

        <hr>

        <p>
            You have access to {{ $levelAmount }}:
            @level(5)
                <span class="badge badge-primary margin-half">5</span>
            @endlevel

            @level(4)
                <span class="badge badge-info margin-half">4</span>
            @endlevel

            @level(3)
                <span class="badge badge-success margin-half">3</span>
            @endlevel

            @level(2)
                <span class="badge badge-warning margin-half">2</span>
            @endlevel

            @level(1)
                <span class="badge badge-default margin-half">1</span>
            @endlevel
        </p>

        @role('admin')

            <hr>

            <p>
                You have permissions:
                @permission('view.users')
                    <span class="badge badge-primary margin-half margin-left-0">
                        {{ trans('permsandroles.permissionView') }}
                    </span>
                @endpermission

                @permission('create.users')
                    <span class="badge badge-info margin-half margin-left-0">
                        {{ trans('permsandroles.permissionCreate') }}
                    </span>
                @endpermission

                @permission('edit.users')
                    <span class="badge badge-warning margin-half margin-left-0">
                        {{ trans('permsandroles.permissionEdit') }}
                    </span>
                @endpermission

                @permission('delete.users')
                    <span class="badge badge-danger margin-half margin-left-0">
                        {{ trans('permsandroles.permissionDelete') }}
                    </span>
                @endpermission

            </p>

        @endrole

    </div>
</div> -->
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">January</h6>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar7-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Marina Valentine </a>
						<div class="birthday-date">January 16th, 1989</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar20-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Michael Maximoff</a>
						<div class="birthday-date">January 24th, 1972</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">February</h6>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar21-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Rachel Howlett</a>
						<div class="birthday-date">February 4th, 1992</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar4-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<div class="birthday-date">February 7th, 1988</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->
				

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar22-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Dave Marinara</a>
						<div class="birthday-date">February 12th, 1980</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->
				

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar23-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Jessica Stevens</a>
						<div class="birthday-date">February 18th, 1986</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->
			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar1-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Mathilda Brinker</a>
						<div class="birthday-date">February 23rd, 1988</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar2-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Nicholas Grissom</a>
						<div class="birthday-date">February 27th, 1990</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">March</h6>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar10-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Elaine Dreyfuss</a>
						<div class="birthday-date">March 1st, 1984</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar67-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<div class="birthday-date">March 1st, 1991</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar24-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Luke Scarred</a>
						<div class="birthday-date">March 6th, 1988</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar26-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Marina Polson</a>
						<div class="birthday-date">March 13th, 1984</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar27-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Sarah Knight</a>
						<div class="birthday-date">March 16th, 1994</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar28-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Claire Roberts</a>
						<div class="birthday-date">March 22nd, 1985</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar29-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Jet Pepelu IV</a>
						<div class="birthday-date">March 27th, 1989</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">April</h6>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar6-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">James Summers</a>
						<div class="birthday-date">April 14th, 1985</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar30-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Marie Claire Stevens</a>
						<div class="birthday-date">April 21st, 1994</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar31-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Jessy Owens</a>
						<div class="birthday-date">April 28th, 1988</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">May</h6>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">June</h6>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">July</h6>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar32-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Lindsay Jeffson</a>
						<div class="birthday-date">July 5th, 1990</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar33-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Mary Jane Stark</a>
						<div class="birthday-date">July 8th, 1987</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">August</h6>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">September</h6>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar34-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Mark Taylor</a>
						<div class="birthday-date">September 14th, 1987</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar3-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Sarah Hetfield</a>
						<div class="birthday-date">September 17th, 1990</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar35-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Tony Stevens</a>
						<div class="birthday-date">September 20th, 1984</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar36-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Ann Marie Gibson</a>
						<div class="birthday-date">September 22nd, 1988</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">October</h6>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">November</h6>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">December</h6>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img src="img/avatar8-sm.jpg" alt="author">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Diana Jameson</a>
						<div class="birthday-date">December 17th, 1989</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

	</div>
</div>
