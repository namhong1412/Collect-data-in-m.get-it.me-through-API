<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Collect data in get-it.me</title>
    <!--favicon-->
    <link rel="apple-touch-icon" href="assets/theme/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/theme/images/favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- lightbox -->
    <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Themes styles-->
    <link href="assets/theme/css/theme.css" rel="stylesheet">
    <!-- Your custom css -->
    <link href="assets/theme/css/theme-custom.css" rel="stylesheet">
</head>

<body>
    <!-- wrapper page -->
    <div class="wrapper">
        <!-- main-header -->
        <header class="main-header">
            <!-- mobile navbar -->
            <div class="hero-header">
                <div class="inner-hero-header">
                    <div class="container">
                        <div class="text-center logo"> <a href="index.php"><img src="assets/theme/images/logo-get-it.png" width="285" alt=""></a></div>
                        <div class="relative">
                            <i class="fa fa-globe ic-fade-globe"></i>
                            <!-- form search -->
                            <div class="form-search-home">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nhập đường link trên get-it<a href="m.get-it.me"></a></label>
                                            <input class="form-control" type="text" placeholder="Nhập link input tại đây" id="name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-t-primary btn-lg btn-theme btn-pill btn-block" id="button">Xác nhận</button>
                                </div>
                            </div> <!-- end form search -->
                        </div>
                    </div>
                </div>
                <!-- modal Advanced search -->
                <div class="modal fade" id="modal-advanced">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Advanced Job Search</h4>
                                </div>
                                <div class="modal-body">
                                    <h5>Find Jobs</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>With all of these words</label>
                                                <input type="text" class="form-control " name="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>With the exact phrase</label>
                                                <input type="text" class="form-control " name="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Show jobs of type</label>
                                        <select class="form-control">
                                            <option value="all">All job types</option>
                                            <option value="fulltime">Full-time</option>
                                            <option value="parttime">Part-time</option>
                                            <option value="contract">Contract</option>
                                            <option value="internship">Internship</option>
                                            <option value="temporary">Temporary</option>
                                        </select>
                                    </div>
                                    <div class="white-space-10"></div>
                                    <h5>Where and When</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Radius </label>
                                                <select id="radius" class="form-control">
                                                    <option value="0">only in</option>
                                                    <option value="5">within 5 kilometers </option>
                                                    <option value="10">within 10 kilometers </option>
                                                    <option value="15">within 15 kilometers </option>
                                                    <option selected="" value="25">within 25 kilometers </option>
                                                    <option value="50">within 50 kilometers </option>
                                                    <option value="100">within 100 kilometers </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Of </label>
                                                <input type="text" class="form-control" maxlength="250" value="United States">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Age - Jobs published </label>
                                                <select class="form-control">
                                                    <option value="any">anytime</option>
                                                    <option value="15">within 15 days</option>
                                                    <option value="7">within 7 days</option>
                                                    <option value="3">within 3 days</option>
                                                    <option value="1">since yesterday</option>
                                                    <option value="last">since my last visit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Display</label>
                                                <select class="form-control">
                                                    <option selected="" value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="50">50</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success btn-theme">Find Jobs</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- end modal forgot password -->
            </div>
        </header><!-- end main-header -->
        <!-- body-content -->
    </div>
    <!--end body-content -->
    </div><!-- end wrapper page -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/plugins/jquery.js"></script>
    <script src="assets/plugins/jquery.easing-1.3.pack.js"></script>
    <!-- jQuery Bootstrap -->
    <script src="assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JS -->
    <script src="assets/theme/js/theme.js"></script>
    <script>
    $(document).ready(function() {
        $('#button').click(function() {
            var name2 = $('#name').val();
            var patt = /A[0-9]{12}$/gi;
            var name = name2.match(patt).toString();
            $.ajax({
                method: "GET",
                url: "https://m.get-it.me/api/v1/article/" + name,
                dataType: "json",
                headers: {
                    "accept": "application/json",
                    "Access-Control-Allow-Origin": "*"
                },
                success: function(data) {
                    content_processing(data);
                    images_processing(data);
                }
            });
        });

        function content_processing(data) {
            var data_user_name = data.responseData.user.name;
            var data_user_phone = data.responseData.article.userPhoneNo;
            var data_article_title = data.responseData.article.title;
            var data_article_description = data.responseData.article.description;
            var data_article_price = data.responseData.article.price;
            var name2 = $('#name').val();
            var patt = /A[0-9]{12}$/gi;
            var id_product = name2.match(patt).toString();
            $.ajax({
                url: "create_file.php",
                method: "POST",
                data: {
                    data_user_name: data_user_name,
                    data_user_phone: data_user_phone,
                    data_article_title: data_article_title,
                    data_article_description: data_article_description,
                    data_article_price: data_article_price,
                    id_product: id_product,
                }
            });
        }

        function images_processing(data) {
            var data_img = data.responseData.article.images;
            for (i in data_img) {
                var data_json = data_img[i].url;
                var name2 = $('#name').val();
                var patt = /A[0-9]{12}$/gi;
                var id_product = name2.match(patt).toString();
                $.ajax({
                    url: "down_images.php",
                    method: "POST",
                    data: {
                        data_img: data_json,
                        id_product: id_product,
                    }
                });
            }
        }
    });
    </script>
</body>

</html>