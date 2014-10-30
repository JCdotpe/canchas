<form class="form-signin" role="form">
  <?php if (@$user_profile): ?>
                

              <!--   <?php var_dump($user_profile); ?> -->

<!-- 
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width: 140px; height: 140px;">
                        <h2><?=$user_profile['name']?></h2>
                        <a href="<?=$user_profile['link']?>" class="btn btn-lg btn-default btn-block" role="button">View Profile</a>
                        <a href="<?= $logout_url ?>" class="btn btn-lg btn-primary btn-block" role="button">Logout</a>
                    </div>
                </div> -->

      <!-- Facebook -->


      <div class="row">

        <div class="col-sm-2 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="#"><img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large"  style="width: 140px; height: 140px;" alt="Leonardo" /></a></li>
            <li class="active"><a href="#"><?=$user_profile['first_name']?></a></li>
            <li><a href="<?= $logout_url ?>">Cerrar Sesión</a></li>
          </ul>
        </div>

        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 main">

          <h2 class="sub-header">JUEGOS DISPONIBLES <a href="#" data-toggle="modal" data-target="#filters"><span class="glyphicon glyphicon-th pull-left" style="margin-right: 10px"></a></h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Inicio</th>
                  <th>Nombre</th>
                  <th>Inscritos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>27 oct 11:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 13 Hacienda Maranga [Torneo 17-19]</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>27 oct 19:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 17 Club de Trabajadores del BCRP - RESERCLUB</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>28 oct 13:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 10 Complejo Deportivo la 9</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>28 oct 17:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 15 VILLA SPORT CLUB</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>28 oct 19:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 12 VillaSport Los Precursores</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>28 oct 23:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 14 Complejo Deportivo San Pio X</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>29 oct 21:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 10 Tiro Libre</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>29 oct 21:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 12 Complejo Eliseo Naval</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>29 oct 22:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 15 VILLA SPORT CLUB</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>29 oct 22:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 11 Complejo Eliseo Naval</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>30 oct 18:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 12 VillaSport Los Precursores</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>30 oct 19:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 10 Complejo Eliseo Naval</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>30 oct 20:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 10 JV Mario Polar Ugarteche</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>30 oct 21:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 11 Entrepelotas Club</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>30 oct 21:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/.10 Las Vegas Stadium</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
                <tr>
                  <td>30 oct 22:00</td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">S/. 15 VillaSport Los Precursores</a></td>
                  <td><a class="more-info" href="#" data-toggle="modal" data-target="#more-info">1/2</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-sm-2 main">
          <h2 class="sub-header">Anuncios</h2>
            <ul class="nav">
              <li><img src="http://cuponaso.com/content/uploads/promos/fubolycmain.png" width="100%" /><br /><br /><br /></li> 
              <li><img src="http://www.marzapes.com/images/56/6914.jpg" width="100%" /><br /><br /></li>
            </ul>
        </div><!-- 2col -->


      </div><!-- row -->




<!-- Modal -->
<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">S/. 15 VillaSport Los Precursores</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-7">


      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <div class="google-maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804" width="600" height="218px" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="http://placehold.it/1200x600/fffccc/000&text=Two" alt="...">
    </div>
     <div class="item">
      <img class="img-responsive" src="http://placehold.it/1200x600/fcf00c/000&text=Three" alt="...">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

            <p class="players-game"><b>Invitar:</b> <a title="Facebook" href="#"><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a> <a title="Twitter" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a> <a title="Google+" href="#"><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x"></i></span></a> <a title="Linkedin" href="#"><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i></span></a> <a title="E-mail" href="#"><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x"></i></span></a>  <a title="Print" href="#"><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-print fa-stack-1x"></i></span></a></p>
            <hr />
            <p class="players-game"><b>FC BARCELONA:</b> Luis (32), Enrique (19), Juan (22), José (25), José (25), Diego (19), Raúl (20), Cristiano (20), Lionel (25), Juan (28), Jorge (26), Roberto (35), Roberto (35)</p>
            <hr />
            <p class="players-game"><b>REAL MADRID:</b> Luis (32), Enrique (19), Juan (22), José (25), José (25), Diego (19), Raúl (20), Cristiano (20), Lionel (25), Juan (28), Jorge (26), Roberto (35), Roberto (35)</p>
          </div><!-- col-sm-8 -->
          <div class="col-sm-5">

  <form class="form-horizontal" role="form">
    <fieldset>
      <legend>Detalle</legend>
      <div class="form-group">
        <label class="col-sm-8 control-label" for="card-holder-name">x1 Alquiler de cancha</label>
        <div class="col-sm-4">
          S/ 60.00
        </div>
      </div>     
      <div class="form-group">
        <label class="col-sm-8 control-label" for="card-holder-name">x1 Apuesta</label>
        <div class="col-sm-4">
          <p>S/ 0.00</p>
        </div>
      </div>          
      <div class="form-group">
        <label class="col-sm-8 control-label" for="card-holder-name">Comisión</label>
        <div class="col-sm-4">
          <p>S/ 2.50</p>
        </div>
      </div>          

      <legend>Pagar</legend>

      <div class="form-group">
        <label class="col-sm-8 control-label" for="card-number">Card Number:</label>
        <label class="col-sm-4 control-label" for="card-number">Expires:</label>
      </div>

      <div class="form-group">
        <div class="col-sm-8">
          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="●●●● ●●●● ●●●● ●●●●">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="MM / YY">
        </div><!-- col-sm-5 -->
      </div><!-- form-group -->    


      <div class="form-group">
        <label class="col-sm-8 control-label" for="card-number">Name on card:</label>
        <label class="col-sm-4 control-label" for="card-number">Card code:</label>
      </div>

      <div class="form-group">
        <div class="col-sm-8">
          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="CVC">
        </div>
      </div>  

      <p>
          <button type="button" class="btn btn-primary btn-lg btn-block">Pagar S/. 62.50</button>
      </p>
    </fieldset>
  </form>

          </div><!-- col-sm-4 -->          
        </div>
      </div>
    </div>
  </div>
</div><!-- #more-info -->


<!-- Modal -->
<div class="modal fade" id="filters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Filtros de Búsqueda</h4>
      </div>
      <div class="modal-body">

  <form role="form">
    <fieldset>
      <div class="form-group">
        <label class="col-sm-6 control-label" for="card-number">Categoría</label>
        <label class="col-sm-6 control-label" for="card-number">Dinero:</label>
      </div>      
      <div class="form-group">
        <div class="col-sm-6">
          <select class="form-control">
            <option>Personal</option>
            <option>Equipos</option>
            <option>Torneo</option>
          </select>
        </div>
        <div class="col-sm-6">
          <select class="form-control">
            <option>Sin apuesta</option>
            <option>Con apuesta</option>
          </select>
        </div>        
      </div>     


      <div class="form-group">

      <br /><br /><br /><br />

        <label class="col-sm-4 control-label" for="card-number">Departamento:</label>
        <label class="col-sm-4 control-label" for="card-number">Provincia:</label>
        <label class="col-sm-4 control-label" for="card-number">Distrito:</label>
      </div>      
      <div class="form-group">
        <div class="col-sm-4">
          <select class="form-control">
            <option>Lima</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="col-sm-4">
          <select class="form-control">
            <option>Lima</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>   
        <div class="col-sm-4">
          <select class="form-control">
            <option>San Miguel</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>               
      </div>  

    </fieldset><!-- fieldset -->
  </form><!-- form -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Aplicar filtros</button>
      </div>
    </div>
  </div>
</div><!-- #filters -->      



                <!-- End Facebook -->
  <?php else: ?>
         <!--        <h2 class="form-signin-heading">Login with Facebook</h2>
                <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block" role="button">Login</a> -->


  <div id="hero" class="static-header light clearfix">
        <div class="text-heading">
            <h1 class="animated hiding" data-animation="bounceInDown" data-delay="0">Do not wait &mdash; <span class="highlight">launch</span> your startup now!</h1>
            <p class="animated hiding" data-animation="fadeInDown" data-delay="500">this tempate is flexible enough to suit any kind of startup or new business</p>
            <ul class="list-inline">
                <li><a class="btn btn-primary animated hiding" data-animation="bounceIn" data-delay="700" href="<?= $login_url ?>">Iniciar Sesión</a></li>
            </ul>
        </div>
        <div class="video-wrapper">
            <div class="container">
                <img src="http://vivaco.com/demo/startuply/assets/img/features/app_block.png" alt="video" class="img-responsive animated hiding" data-animation="bounceInUp" data-delay="1000" />
            </div>
        </div>
    </div>
    
    <div id="clients">
        <div class="container">
            <ul class="list-inline logos">
                <li><img class="animated hiding" data-animation="fadeInUp" data-delay="0" src="http://vivaco.com/demo/startuply/assets/img/logos/logo-1.png" alt="mashable" /></li>
                <li><img class="animated hiding" data-animation="fadeInUp" data-delay="200" src="http://vivaco.com/demo/startuply/assets/img/logos/logo-2.png" alt="tnw" /></li>
                <li><img class="animated hiding" data-animation="fadeInUp" data-delay="400" src="http://vivaco.com/demo/startuply/assets/img/logos/logo-3.png" alt="virgin" /></li>
                <li><img class="animated hiding" data-animation="fadeInUp" data-delay="600" src="http://vivaco.com/demo/startuply/assets/img/logos/logo-4.png" alt="microsoft" /></li>
                <li><img class="animated hiding" data-animation="fadeInUp" data-delay="800" src="http://vivaco.com/demo/startuply/assets/img/logos/logo-5.png" alt="forbes" /></li>
            </ul>
        </div>
    </div>
    
    <a id="showHere"></a>
    

    
    <hr class="no-margin" />
    
    <section id="process" class="section dark">
        <div class="container">
            <div class="section-content row">                
                <div class="col-sm-6 pull-right animated hiding" data-animation="fadeInRight">
                    <img src="http://vivaco.com/demo/startuply/assets/img/features/content_image1.png" class="img-responsive" alt="process 2" />
                </div>
                <div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
          <br/><br/>
                    <article>
                        <h3>NEW AGE <span class="highlight">TECHNOLOGY</span></h3>
                        <div class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br/> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                        <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
                    </article>
                </div>
                
                <hr class="clearfix" />
                
                <div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
                    <img src="http://vivaco.com/demo/startuply/assets/img/features/helmet.jpg" class="img-responsive" alt="process 3" />
                </div>
                <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
          <br/><br/>
                    <article>
                        <h3>HANG <span class="highlight">ON TO</span> YER HELMET</h3>
                        <div class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br/> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                        <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
                    </article>
                </div>
                
            </div>
        </div>
    </section>
    
    <section id="features" class="section inverted">
        <div class="container">
            <div class="section-content">
                <div id="featuredTab">
                    <ul class="list-unstyled animated hiding" data-animation="fadeInRight">
                      <li class="active">
                          <a href="#home" data-toggle="tab">
                              <div class="tab-info">
                                  <div class="tab-title">Lorem Dolor</div>
                                  <div class="tab-desc">Sit amet, consectetur adipiscing elit<br />hac divisione rem ipsam prorsus</div>
                              </div>
                              <!--<div class="tab-icon"><span class="icon icon-multimedia-20"></span></div>-->
                          </a>
                      </li>
                      <li>
                          <a href="#profile" data-toggle="tab">
                              <div class="tab-info">
                                  <div class="tab-title">Lorem Dolor</div>
                                  <div class="tab-desc">Sit amet, consectetur adipiscing elit<br />hac divisione rem ipsam prorsus</div>
                              </div>
                              <!--<div class="tab-icon"><span class="icon icon-seo-icons-27"></span></div>-->
                          </a>
                      </li>
                      <li>
                          <a href="#messages" data-toggle="tab">
                              <div class="tab-info">
                                  <div class="tab-title">Lorem Dolor</div>
                                  <div class="tab-desc">Sit amet, consectetur adipiscing elit<br />hac divisione rem ipsam prorsus</div>
                              </div>
                              <!-- <div class="tab-icon"><span class="icon icon-seo-icons-28"></span></div>-->
                          </a>
                      </li>
                    </ul>
                    
                    <div class="tab-content animated hiding" data-animation="fadeInLeft">
                      <div class="tab-pane in active" id="home"><img src="http://vivaco.com/demo/startuply/assets/img/features/rich_features_1.png" class="img-responsive animated hiding" data-animation="fadeInLeft" alt="macbook" /></div>
                      <div class="tab-pane" id="profile"><img src="http://vivaco.com/demo/startuply/assets/img/features/rich_features_2.png" class="img-responsive animated hiding" data-animation="fadeInLeft" alt="macbook" /></div>
                      <div class="tab-pane" id="messages"><img src="http://vivaco.com/demo/startuply/assets/img/features/rich_features_3.png" class="img-responsive animated hiding" data-animation="fadeInLeft" alt="macbook" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  <section id="features-list" class="section dark">
        <div class="container animated hiding" data-animation="fadeInDown">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">  
          <i class="icon icon-office-44 icon-active"></i>
                    <span class="h7">FEATURE 1</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>                       
      <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">  
          <i class="icon icon-shopping-18 icon-active"></i>
                    <span class="h7">FEATURE 2</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
      <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">  
          <i class="icon icon-seo-icons-27 icon-active"></i>
                    <span class="h7">FEATURE 3</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
      <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">  
          <i class="icon icon-office-24 icon-active"></i>
                    <span class="h7">FEATURE 4</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
      <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">  
          <i class="icon icon-graphic-design-13 icon-active"></i>
                    <span class="h7">FEATURE 5</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
      <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">  
          <i class="icon icon-arrows-37 icon-active"></i>
                    <span class="h7">FEATURE 6</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
      <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">  
          <i class="icon icon-badges-votes-14 icon-active"></i>
                    <span class="h7">FEATURE 7</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
      <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">  
          <i class="icon icon-badges-votes-16 icon-active"></i>
                    <span class="h7">FEATURE 8</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>           
        </div>
    </section>  
  
  <section id="newsletter" class="long-block light">
        <div class="container center">
            <div class="col-sm-12 col-lg-5">
                <article>
                    <h2><strong>GET</strong> LIVE UPDATES</h2>
                     <p class="thin">No spam promise - only latest news and prices!</p>
                </article>
            </div>
            <div class="col-sm-12 col-lg-7">
       <form id="subscribe" class="form" action="/demo/startuply/index-main.html" method="post">
            <div class="form-group form-inline">
              <input size="15" type="text" class="form-control required" id="NewsletterName" name="NewsletterName" placeholder="Your name" /> 
              <input size="25" type="email" class="form-control required" id="NewsletterEmail" name="NewsletterEmail" placeholder="your@email.com" /> 
        <input type="submit" class="btn btn-default" value="SUBSCRIBE" />
        <span id="response">
                </span>
            </div>
          </form>
            </div>
      
      
      
        </div>
    </section>
  
    <section id="product" class="section dark">
        <div class="container">
            <div class="section-header animated hiding" data-animation="fadeInDown">
                <h2>PRODUCT <span class="highlight">PACKAGES</span></h2>
                <div class="sub-heading">
                    Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                    <br />dfs sit atmet sit dolor greand fdanrh sdfs
                </div>
            </div>
            <div class="section-content row">
            
                <div class="col-sm-4">
                    <div class="package-column animated hiding" data-animation="flipInY">
                        <div class="package-title">Individual</div>
                        <div class="package-price">
                            <div class="price"><span class="currency">$</span>25</div>
                            <div class="period">per month</div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li><strong>Free</strong> Domain</li>
                                <li><strong>Unlimited</strong> Websites</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Disk Space</li>
                            </ul>
                            <a href="#" class="btn btn-secondary btn-block">Get started</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="package-column animated hiding" data-animation="flipInY" data-delay="500">
                        <div class="package-title">Studio</div>
                        <div class="package-price">
                            <div class="price"><span class="currency">$</span>45</div>
                            <div class="period">subscription</div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li><strong>Free</strong> Domain</li>
                                <li><strong>Unlimited</strong> Websites</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Disk Space</li>
                            </ul>
                            <a href="#" class="btn btn-secondary btn-block">Get started</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="package-column animated hiding" data-animation="flipInY">
                        <div class="package-title">Enterprise</div>
                        <div class="package-price">
                            <div class="price"><span class="currency">$</span>95</div>
                            <div class="period">per month</div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li><strong>Free</strong> Domain</li>
                                <li><strong>Unlimited</strong> Websites</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Disk Space</li>
                            </ul>
                            <a href="#" class="btn btn-secondary btn-block">Get started</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
  
  <section id="awards" class="section dark">
        <div class="container">
            <div class="section-header animated hiding" data-animation="fadeInDown">
                <h2><span class="highlight">OUR</span> AWARDS</h2>
                <div class="sub-heading">
                    Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                    <br />dfs sit atmet sit dolor greand fdanrh sdfs
                </div>
            </div>
            <div class="section-content">                
                <ul class="list-inline logos">
                    <li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="0" src="http://vivaco.com/demo/startuply/assets/img/logos/award-5.jpg" alt="mashable" /></a></li> 
                    <li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="400" src="http://vivaco.com/demo/startuply/assets/img/logos/award-3.jpg" alt="virgin" /></a></li> 
          <li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="600" src="http://vivaco.com/demo/startuply/assets/img/logos/award-4.jpg" alt="forbes" /></a></li> 
                    <li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="800" src="http://vivaco.com/demo/startuply/assets/img/logos/award-1.jpg" alt="microsoft" /></a></li>          
                </ul>
            </div>
        </div>
    </section>
    
    
    <section id="guarantee" class="long-block light">
        <div class="container">
            <div class="col-md-12 col-lg-9">
        <i class="icon icon-seo-icons-24 pull-left"></i>
                <article class="pull-left">
                    <h2><strong>LAUNCH</strong> YOUR STARTUP NOW!</h2>
                    <p class="thin">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
                </article>
            </div>
      
            <div class="col-md-12 col-lg-3">
                <a href="http://themeforest.net/item/startuply-responsive-multipurpose-landing-page/7953388" class="btn btn-default">Get this template</a>
            </div>
        </div>
    </section>



  <?php endif; ?>
</form>
 

