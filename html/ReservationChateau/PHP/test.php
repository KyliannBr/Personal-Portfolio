<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<style type="text/css">
	/* not required */
*,:active{
	outline: none;
}
*{
	padding: 0px;
	margin: 0px;
}

body{
	margin: 20px;
	background-color: #EEEDE9;
	-webkit-font-smoothing: antialiased;
	text-rendering: optimizeLegibility;
	font-size: 96.5%;
	font-family: Helvetica, Arial, sans-serif;
}

input{
	font-family: Helvetica, Arial, sans-serif;
}

h1, h2, h3, h4, h5, p{
	margin-bottom: 10px;
}

p{
	line-height: 20px;
}

a{
	text-decoration: none;
	color: #FF462B;
}

.clearfix{
	clear: both;
}

.animate{
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}


/* required */
.calendar{
	position: absolute;
	border-radius: 4px;
	overflow: hidden;
	width: 800px;
	height: 450px;
	left: 50%;
	margin-left: -400px;
	margin-top: -225px;
	top: 50%;
	background-color: #ffffff;
	color: #333333;
}

.calendar h1, .calendar h2{
	font-weight: 300;
	font-size: 26px;
	line-height: 28px;
	text-transform: uppercase;
	margin: 0px 0px 20px 0px;
}

.calendar h1 span{
	display: block;
}

.calendar .col{
	position: relative;
	float: left;
	height: 100%;
}

.calendar .col .content{
	padding: 40px;
}

.calendar ul{
	margin: 0px;
}

.calendar ul li{
	list-style: none;
}

.calendar .leftCol{
	width: 40%;
	background-color: #F48989;
}

.calendar .noteList li{
	color: #ffffff;
	margin-bottom: 10px;
}

.calendar .notes p,
.calendar .notes input,
.calendar .noteList li{
	font-weight: 300;
	font-size: 14px;
}

.calendar .notes p{
	border-bottom: solid 1px rgba(255,255,255,0.4);
}

.calendar .notes input{
	background-color: #F48989;
	color: #ffffff;
	border: none;
	width: 200px;
}

.calendar .addNote,
.calendar .removeNote{
	float: right;
	color: rgba(255,255,255,0.4);
	font-weight: bold;
	margin-left: 20px;
}

.calendar .addNote:hover,
.calendar .removeNote:hover{
	color: #ffffff;
}

.calendar .addNote{
	font-size: 16px;
}

.calendar .leftCol h1{
	color: #ffffff;
	margin-bottom: 40px;
}

.calendar .rightCol{
	width: 60%;
}

.calendar .rightCol h2{
	color: #C7BEBE;
	text-align: right;
	margin-bottom: 70px;
}

.calendar .months li,
.calendar .weekday li,
.calendar .days li{
	float: left;
	text-transform: uppercase;
}

.calendar .months li a,
.calendar .weekday li a,
.calendar .days li a{
	display: block;
	color: #747978;
}

.calendar .months li a{
	font-size: 10px;
	color: #C7BEBE;
	text-align: center;
	width: 32px;
	margin-bottom: 20px;
}

.calendar .months li .selected{
	font-weight: bold;
	color: #747978;
}

.calendar .weekday li a{
	width: 55px;
	text-align: center;
	margin-bottom: 20px;
	font-size: 12px;
}

.calendar .days li{
	width: 55px;
}

.calendar .days li a{
	width: 36px;
	height: 24px;
	text-align: center;
	margin: auto auto;
	font-size: 12px;
	font-weight: bold;
	border-radius: 12px;
	margin-bottom: 10px;
	padding-top: 10px;
}


.calendar .days li a:hover{
	background-color: #EEEDE9;
}

.calendar .days li .selected{
	background-color: #F5A1A3!important;
	color: #ffffff;
}

.calendar .days li .event{
	color: #F5A1A3;
}


/* placeholder color */
::-webkit-input-placeholder {color: #ffffff; }
:-moz-placeholder {color: #ffffff; }
::-moz-placeholder {color: #ffffff; }
:-ms-input-placeholder {color: #ffffff; }
</style>




		<div class="calendar">

			<div class="col leftCol">
				<div class="content">
					<h1 class="date"><?php echo date('l'); ?><span><?php echo date('F')." ".date("d"). ?> </span></h1>
					<div class="notes">
						<p>
							<input type="text" value="" placeholder="new note"/>
							<a href="#" title="Add note" class="addNote animate">+</a>
						</p>
						<ul class="noteList">
							<li>Headbutt a lion<a href="#" title="Remove note" class="removeNote animate">x</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col rightCol">
				<div class="content">
					<h2 class="year">2013</h2>
					<ul class="months">
						<li><a href="#" title="Jan" data-value="1">Jan</a></li>
						<li><a href="#" title="Feb" data-value="2">Feb</a></li>
						<li><a href="#" title="Mar" data-value="3">Mar</a></li>
						<li><a href="#" title="Apr" data-value="4">Apr</a></li>
						<li><a href="#" title="May" data-value="5">May</a></li>
						<li><a href="#" title="Jun" data-value="6">Jun</a></li>
						<li><a href="#" title="Jul" data-value="7">Jul</a></li>
						<li><a href="#" title="Aug" data-value="8">Aug</a></li>
						<li><a href="#" title="Sep" data-value="9" class="selected">Sep</a></li>
						<li><a href="#" title="Oct" data-value="10">Oct</a></li>
						<li><a href="#" title="Nov" data-value="11">Nov</a></li>
						<li><a href="#" title="Dec" data-value="12">Dec</a></li>
					</ul>
					<div class="clearfix"></div>
					<ul class="weekday">
						<li><a href="#" title="Mon" data-value="1">Mon</a></li>
						<li><a href="#" title="Tue" data-value="2">Tue</a></li>
						<li><a href="#" title="Wed" data-value="3">Wed</a></li>
						<li><a href="#" title="Thu" data-value="4">Thu</a></li>
						<li><a href="#" title="Fri" data-value="5">Fri</a></li>
						<li><a href="#" title="Say" data-value="6">Sat</a></li>
						<li><a href="#" title="Sun" data-value="7">Sun</a></li>
					</ul>
					<div class="clearfix"></div>
					<ul class="days">
						<script>
							for( var _i = 1; _i <= 31; _i += 1 ){
								var _addClass = '';
								if( _i === 12 ){ _addClass = ' class="selected"'; }
								
								switch( _i ){
									case 8:
									case 10:
									case 27:
										_addClass = ' class="event"';
									break;
								}

								document.write( '<li><a href="#" title="'+_i+'" data-value="'+_i+'"'+_addClass+'>'+_i+'</a></li>' );
							}
						</script>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="clearfix"></div>

		</div>




</body>
</html>