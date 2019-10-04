<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Report</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="/css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">


</head>

<body>

    <br/>
    <div class="container text-center">
        <h4>Result-Report</h4>
        <br/>
        <center><p>
	    <iframe src="http://free.timeanddate.com/clock/i6cz7h3o/n5364/fn6/fs17/fc333/tct/pct/ftb/tt0" frameborder="0" width="397" height="23" allowTransparency="true"></iframe>
	    </p></center>
    </div>
    
    <br/><br/>

    <div class="container">
 
    <h5><i class="fa fa-tag"></i>Total Results</h5>

    <br/>
    <div class="text-center">
    <ul>
    <li><h1>Results= {{$resultcount}}</h1></li>
  
    

    </ul>
    </div>
    </div>

    <br/><br/>

    

<div class="container">
    <span class="float-right">                
        <a  class="btn btn-primary " role="button" onclick="printFunction()"><i class="fa fa-print"></i> Print</a>
    </span>
    <span class="float-left">                
        <a href="/exam" class="btn btn-danger " role="button"><i class="fa fa-reply"></i> Back</a>
    </span>
</div>

<br/><br/><br/><br/><br/>
<div class="container">
<footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span><h2>Copyright © Collage of Ophthalmologist Sri Lanka</h2></span>
          </div>
        </div>
      </footer>
</div>
</body>

</html>

<script>
function printFunction() {
  window.print();
}
</script>

