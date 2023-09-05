<!DOCTYPE html>
<html>
<head>
@include('includes.head')
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<!-- ################################################################################################ --> 
<div id="wrapper">

@include('includes.headmenu')
<!-- ################################################################################################ -->
@yield('content')
<!-- ################################################################################################ --> 

<!-- ################################################################################################ -->
@include('includes.footer')

</div>
<!-- JAVASCRIPTS --> 
@include('includes.jsfooter')
</body>
</html>