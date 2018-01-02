
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIMAKMA</title>
  <!-- BOOTSTRAP STYLES-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" integrity="sha256-fmMNkMcjSw3xcp9iuPnku/ryk9kaWgrEbfJfKmdZ45o=" crossorigin="anonymous" />
    
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="{{asset('/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/home')}}">SIMAKMA</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php echo date('d-M-Y');?> &nbsp; <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-danger square-btn-adjust">Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="{{asset('/img/kamal.jpg')}}" class="user-image img-responsive"/>
          </li>
        
          
                    <li>
                        <a  href="{{ url('/home')}}"><i class="glyphicon glyphicon-home"></i> Dashboard</a>

                        <!-- <a  href="route('/cobacoba')"><i class="glyphicon glyphicon-home"></i> Dashboard</a> -->
                    </li>

                    <li>
                        <a  href="{{ url('/penduduk')}}"><i class="glyphicon glyphicon-th"></i> Data Penduduk</a>
                    </li>

                    <li  >
                        <a  href="{{ url('/tambah-data')}}"><i class="glyphicon glyphicon-edit"></i> Tambah Data </a>
                    </li>
                    <!--  <li  >
                        <a  href="?page=tentang"><i class="glyphicon glyphicon-user"></i> Developer </a>
                    </li> -->
                    
                        </ul>
                      </li>  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >         <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      
                      @yield('isi')
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
  </div> 
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('/js/jquery.metisMenu.js')}}"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="{{asset('/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/js/dataTables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('/js/custom.js')}}"></script>
    
    
   
</body>
</html>
