@extends('layout.forntend_layout.header')

@section('content')
    <!-- GALLERY -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" id="gallery-carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#gallery-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#gallery-carousel" data-slide-to="1"></li>
                            <li data-target="#gallery-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/road.jpg" alt="Slider image">
                                <div class="carousel-caption">This is a caption.</div>
                            </div>
                            <div class="item">
                                <img src="images/sea.jpg" alt="Slider image">
                                <div class="carousel-caption">This is a caption.</div>
                            </div>
                            <div class="item">
                                <img src="images/shelter.jpg" alt="Slider image">
                                <div class="carousel-caption">This is a caption.</div>
                            </div>
                        </div> <!-- end carousel-inner -->

                        <a href="#gallery-carousel" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#gallery-carousel" class="right carousel-control" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div> <!-- end carousel -->
                </div>
                <!-- <div class="col-md-4"></div>-->
            </div>
        </div>
    </section>

    <!--Main Content Area-->
    <section>
        <div class="container content">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/product.png" alt="who-we-are" class="img-thumbnail hidden-xs hidden-sm">
                        <div class="caption">
                            <h3>Who We Are</h3>
                            <p>Your success. I'm a Paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.</p>
                            <p>
                                Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to write more. Tell a story and let your users get to know you.</p>
                            <p><a href="#" class="btn btn-default" role="button">Read More ...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/product.png" alt="Our-Products" class="img-thumbnail hidden-xs hidden-sm">
                        <div class="caption">
                            <h3>Our Products</h3>
                            <p>Your success. I'm a Paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.</p>
                            <p>
                                Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to write more. Tell a story and let your users get to know you.</p>
                            <p><a href="#" class="btn btn-default" role="button">Read More ...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/product.png" alt="Contact Us" class="img-thumbnail hidden-xs hidden-sm">
                        <div class="caption">
                            <h3>Contact Us</h3>
                            <p>Your success. I'm a Paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.</p>
                            <p>
                                Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to write more. Tell a story and let your users get to know you.</p>
                            <p><a href="#" class="btn btn-default" role="button">Read More ...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer Area-->
    <footer>
        <div class="container">
            <div class="well">
                <div class="row">
                    <div class="col-sm-6">© 2015 by 3Spire Ltd.</div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
    </html>
@stop