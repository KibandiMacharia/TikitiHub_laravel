@extends('layouts.admin_layout')

@section('stylesheets')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src="bootstrap/js/bootstrap.js"></script>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
@endsection

@section('content')
<html>
	<head>
	<title>TikitiHub</title>
		<style type="text/css">
		body {		
			font-family: Verdana;
		}
		
		div.invoice {
		border:1px solid #ccc;
		padding:10px;
		height:200pt;
		width:570pt;
		}

		div.company-address {
			border:1px solid #ccc;
			float:left;
			width:200pt;
		}
		
		div.ticket_details {
			float:right;
			width:200pt;
		}
		
		div.movie_info {
			float:right;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
		}

        div.seats {
			float:left;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
		}
		
		div.clear-fix {
			clear:both;
			float:none;
		}
		
		table {
			width:100%;
		}
		
		th {
			text-align: left;
		}
		
		td {
		}
		
		.text-left {
			text-align:left;
		}
		
		.text-center {
			text-align:center;
		}
		
		.text-right {
			text-align:right;
		}
		
		</style>
	</head>

    
    <hr style="border-top: 2px dotted black"/><br />

	<body>
    <div align= "center">
        <div class="invoice" align= "center">
            <div class="company-address">
                <h1><strong>Admits one</strong></h1>
            </div>
        
            <div class="ticket_details">
                Invoice N°: 564
                <br />
                
            </div>
            
            <div class="movie_info">
                Movie title:
                <br />
                Cinema:
                <br />
                Date: <?php echo  date("d/m/Y") . "<br>";?>
                <br />
                Time:
                <br />
            </div>

            <div class="seats">
                seat row:
                <br />
                seat number:
                <br />
            </div>

        </div>    
        </div>
	</body>
    <br />
    <hr style="border-top: 2px dotted black"/>
    <br />

    <button class="btn btn-primary" type="submit" value="print" name="print" onClick="window.print()">Print this page</button>

</html>
@endsection