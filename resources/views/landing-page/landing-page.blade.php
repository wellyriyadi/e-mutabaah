<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/paper_img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/ct-paper.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/css/demo.css" rel="stylesheet" />

</head>
<body>
<nav class="navbar navbar-ct-transparent" role="navigation-demo" id="demo-navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
           <div class="logo-container">
                <div class="logo">
                    <img src="app-assets/images/logo/logo1.png">
                </div>
                <div class="brand">
                   Rumah Qur'an <br> Al-Mubarok
                </div>
            </div>
    </div>

<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-example-2">
      <ul class="nav navbar-nav navbar-right">

          <!-- <li>
            <a href="tutorial.html" class="btn btn-danger btn-simple">Tutorial</a>
          </li> -->
          <li>
            <a href="/login" target="_blank" class="btn btn-succes btn-fill">Login</a>
          </li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>


<div class="wrapper">
    <div class="demo-header demo-header-image">
            <div class="motto">
                <h1 class="title-uppercase">Rumah Qur'an <br> Al-Mubarok</h1>
                <h3>Membangun Generasi Qur'ani</h3>
            </div>
    </div>
</div>

<div class="container">
  <div class="row">
    @foreach($dataInformasi as $value)
    <div class="col-md-4" style="padding: 2rem">
      <div class="card" style="width: 100%">
        <div class="card-body">
          <h3 class="card-title">{{$value->judul}}</h3>
          <p class="card-text" style="height: 50vh">{{$value->content}}</p>
          <label for="">Tanggal Dibuat {{$value->created_at}}</label>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


<footer class="footer-demo section-dark">
    <div class="container">
        
        <div class="copyright pull-right">
            &copy; 2022, made with <i class="fa fa-heart heart"></i> by Rumah Qur'an Creative Tim
        </div>
    </div>
</footer>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. </p>
      </div>
      <div class="modal-footer">
        <div class="left-side">
            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Never mind</button>
        </div>
        <div class="divider"></div>
        <div class="right-side">
            <button type="button" class="btn btn-danger btn-simple">Delete</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--    end modal -->


</body>

  <script src="{{asset('assets')}}/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="{{asset('assets')}}/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
	<script src="{{asset('assets')}}/js/bootstrap.js" type="text/javascript"></script>

	<!--  Plugins -->
	<script src="{{asset('assets')}}/js/ct-paper-checkbox.js"></script>
	<script src="{{asset('assets')}}/js/ct-paper-radio.js"></script>
	<script src="{{asset('assets')}}/js/bootstrap-select.js"></script>
	<script src="{{asset('assets')}}/js/bootstrap-datepicker.js"></script>

	<script src="{{asset('assets')}}/js/ct-paper.js"></script>
</html>
