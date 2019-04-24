<!doctype html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en"/>
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Treinamentos - @yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{asset('assets/js/require.min.js')}}"></script>
    <!-- Dashboard Core -->
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{asset('assets/plugins/charts-c3/plugin.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/plugins/charts-c3/plugin.js')}}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{asset('assets/plugins/input-mask/plugin.js')}}"></script>
  </head>

  <body class="">
        <div class="page">
            <div class="page-main">
                <div class="header py-4">
                    <div class="container">
                        <div class="d-flex">
                            <a class="header-brand" href="../index.html">
                                <img src="../demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
                            </a>
                            <div class="d-flex order-lg-2 ml-auto">
                                <div class="nav-item d-none d-md-flex">
                                    <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Visitar site</a>
                                </div>
                                <div class="dropdown d-none d-md-flex">
                                    <a class="nav-link icon" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="nav-unread"></span> </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                                            <div>
                                                <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                                                <div class="small text-muted">10 minutes ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                                            <div>
                                                <strong>Alice</strong> started new task: Tabler UI design.
                                                <div class="small text-muted">1 hour ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                                            <div>
                                                <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                                                <div class="small text-muted">2 hours ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown"> <span class="avatar" style="background-image: url(../demo/faces/female/25.jpg)"></span> <span class="ml-2 d-none d-lg-block"> <span class="text-default">Gabriel Andreazza</span> <small class="text-muted d-block mt-1">Administrator</small> </span> </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-user"></i> Profile </a>
                                        <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-settings"></i> Settings </a>
                                        <a class="dropdown-item" href="#"> <span class="float-right"><span class="badge badge-primary">6</span></span> <i class="dropdown-icon fe fe-mail"></i> Inbox </a>
                                        <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-send"></i> Message </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-help-circle"></i> Need help? </a>
                                        <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-log-out"></i> Sign out </a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse"> <span class="header-toggler-icon"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg order-lg-first">
                                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                                    <li class="nav-item">
                                        <a href="../index.html" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Cursos</a>
                                        <div class="dropdown-menu dropdown-menu-arrow">
                                            <a href="../cards.html" class="dropdown-item">Cards design</a>
                                            <a href="../charts.html" class="dropdown-item">Charts</a>
                                            <a href="../pricing-cards.html" class="dropdown-item">Pricing cards</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Alunos</a>
                                        <div class="dropdown-menu dropdown-menu-arrow">
                                            <a href="../maps.html" class="dropdown-item">Maps</a>
                                            <a href="../icons.html" class="dropdown-item">Icons</a>
                                            <a href="../store.html" class="dropdown-item">Store</a>
                                            <a href="../blog.html" class="dropdown-item">Blog</a>
                                            <a href="../carousel.html" class="dropdown-item">Carousel</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Certificados</a>
                                        <div class="dropdown-menu dropdown-menu-arrow">
                                            <a href="../profile.html" class="dropdown-item">Profile</a>
                                            <a href="../login.html" class="dropdown-item">Login</a>
                                            <a href="../register.html" class="dropdown-item">Register</a>
                                            <a href="../forgot-password.html" class="dropdown-item">Forgot password</a>
                                            <a href="../400.html" class="dropdown-item">400 error</a>
                                            <a href="../401.html" class="dropdown-item">401 error</a>
                                            <a href="../403.html" class="dropdown-item">403 error</a>
                                            <a href="../404.html" class="dropdown-item">404 error</a>
                                            <a href="../500.html" class="dropdown-item">500 error</a>
                                            <a href="../503.html" class="dropdown-item">503 error</a>
                                            <a href="../email.html" class="dropdown-item">Email</a>
                                            <a href="../empty.html" class="dropdown-item">Empty page</a>
                                            <a href="../rtl.html" class="dropdown-item">RTL mode</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="../form-elements.html" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../gallery.html" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../docs/index.html" class="nav-link"><i class="fe fe-file-text"></i> Documentation</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3 my-md-5">
                    <div class="col-md-6 col-lg-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-value float-right text-blue">+5%</div>
                                            <h3 class="mb-1">10</h3>
                                            <div class="text-muted">Novos alunos</div>
                                        </div>
                                    </div>                                     
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-value float-right text-red">-3%</div>
                                            <h3 class="mb-1">423</h3>
                                            <div class="text-muted">Alunos ativos</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-value float-right text-green">-3%</div>
                                            <h3 class="mb-1">64</h3>
                                            <div class="text-muted">Cursos ativos</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-value float-right text-yellow">9%</div>
                                            <h3 class="mb-1">443</h3>
                                            <div class="text-muted">Users</div>
                                        </div>
                                    </div>                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Cursos</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table card-table table-vcenter text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>cursos</th>
                                                <th>area</th>
                                                <th>inscritos</th>
                                                <th>nível</th>
                                                <th>Status</th>
                                                <th>Professor</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="invoice.html" class="text-inherit">Corel Draw</a>
                                                </td>
                                                <td>Gráfica</td>
                                                <td>120</td>
                                                <td>Todos</td>
                                                <td><span class="status-icon bg-success"></span>Ativo</td>
                                                <td>Eduardo</td>
                                                <td class="text-right">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>&nbsp;
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="invoice.html" class="text-inherit">Photoshop</a>
                                                </td>
                                                <td>Gráfica</td>
                                                <td>12</td>
                                                <td>Todos</td>
                                                <td><span class="status-icon bg-warning"></span>&nbsp;Inicio em &lt;date&gt;</td>
                                                <td>Luiz</td>
                                                <td class="text-right">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>&nbsp;
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="invoice.html" class="text-inherit">After Effects</a>
                                                </td>
                                                <td>Audio visual</td>
                                                <td>30</td>
                                                <td>Todos</td>
                                                <td><span class="status-icon bg-warning"></span>&nbsp;Início em &lt;date&gt;</td>
                                                <td>Gabriel</td>
                                                <td class="text-right">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>&nbsp;
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="invoice.html" class="text-inherit">Blender 3D</a>
                                                </td>
                                                <td>Audio Visual</td>
                                                <td>15</td>
                                                <td>Informática</td>
                                                <td><span class="status-icon bg-secondary"></span>Aguardando Inscrições</td>
                                                <td>Pedro</td>
                                                <td class="text-right">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="invoice.html" class="text-inherit">Segurança da informação</a>
                                                </td>
                                                <td>Programação</td>
                                                <td>63</td>
                                                <td>Todos</td>
                                                <td><span class="status-icon bg-danger"></span>Indisponível</td>
                                                <td>Paulo</td>
                                                <td class="text-right">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="invoice.html" class="text-inherit">Informática básica</a>
                                                </td>
                                                <td>Escritório</td>
                                                <td>654<br></td>
                                                <td>Todos</td>
                                                <td><span class="status-icon bg-secondary"></span>Aguardando Inscrições</td>
                                                <td>João</td>
                                                <td class="text-right">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Gerenciar</a>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="icon" href="javascript:void(0)"> <i class="fe fe-edit"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">First link</a>
                                        </li>
                                        <li>
                                            <a href="#">Second link</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">Third link</a>
                                        </li>
                                        <li>
                                            <a href="#">Fourth link</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">Fifth link</a>
                                        </li>
                                        <li>
                                            <a href="#">Sixth link</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">Other link</a>
                                        </li>
                                        <li>
                                            <a href="#">Last link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 mt-lg-0">
                            Premium and Open Source dashboard template with responsive and high quality UI. For Free!</div>
                    </div>
                </div>
            </div>
          @yield('content')


        </div>
      </div>



      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">First link</a>
                  </li>
                  <li>
                    <a href="#">Second link</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Third link</a>
                  </li>
                  <li>
                    <a href="#">Fourth link</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Fifth link</a>
                  </li>
                  <li>
                    <a href="#">Sixth link</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Other link</a>
                  </li>
                  <li>
                    <a href="#">Last link</a>
                  </li>
                </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
            </div>
          </div>
        </div>
      </div>
        <footer class="footer">
          <div class="container">
            <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                      <a href="./docs/index.html">Documentation</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="./faq.html">FAQ</a>
                    </li>
                  </ul>
                </div>
              <div class="col-auto">
                <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
              </div>
              </div>
            </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2018
                <a href=".">Tabler</a>. Theme by
                <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
              </div>
            </div>
          </div>
        </footer>
      </div>
      </body>
      </html>