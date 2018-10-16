<!DOCTYPE html>
<html lang="en" class="photograph-to-patternPage">

    <head>
        <meta charset="utf-8"> 
        <title>Just Woow</title>

        <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.0.3/es5-shim.min.js" integrity="sha384-gf+lmGYhmDUp3YEl+TJVFirE6s3M8Hd44CrxdwJ6YIi1XtcpiM1HOAzu5M2/cxNy" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js" integrity="sha384-FZY+KSLVXVyc1qAlqH9oCx1JEOlQh6iXfw3o2n3Iy32qGjXmUPWT9I0Z9e9wxYe3" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.8/handlebars.min.js" integrity="sha256-4d88O9e7pCb/y6LHNiCfPQAutcLvYzg+TdjCYR5bMr0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" integrity="sha384-ch1nZWLCNJ31V+4aC8U2svT7i40Ru+O8WHeLF4Mvq4aS7VD5ciODxwuOCdkIsX86" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//static.rapidresizer.com/js/memfield.js"></script>
        <script type="text/javascript" src="https://online.rapidresizer.com/js/util.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-browser/0.1.0/jquery.browser.min.js" integrity="sha384-xALInxc4riWDMD60wAijicgvFODQUNYp0wHKLInkFisJjE3UK4Qm65CruTOR7B8x" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" integrity="sha384-yNuQMX46Gcak2eQsUzmBYgJ3eBeWYNKhnjyiBqLd1vvtE9kuMtgw6bjwN8J0JauQ" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.7.0/js/md5.min.js" integrity="sha256-I0CACboBQ1ky299/4LVi2tzEhCOfx1e7LbCcFhn7M8Y=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/spark-md5/3.0.0/spark-md5.min.js" integrity="sha256-vZfKuqtZrm/miyPulNgpGOT0P57rJDIoGfzzGaMuqfg=" crossorigin="anonymous"></script>

        <link href="https://online.rapidresizer.com/style-r.css" rel="stylesheet"> <!-- put my css last to override others -->

    </head>

    <body class="photograph-to-patternPage">

        <img src="//static.rapidresizer.com/img/rrvertad.png" style="opacity: 0; position: absolute; top: 0; left: 0; width: 0; height: 0;" alt="Rapid Resizer"><!-- so visitor's pinterest buttons find it -->
        <div class="container">

            <div class="row">
                <div class="col-sm-6">

                    <img id=origImg style="border: 1px solid black; max-height: 7em; max-width: 33%; margin: 5px 0 0.5em 0; float: right;" class="collapse" title="Original image">

                    <div style="max-width: 63%;">
                        <h2 class="text-left" style="margin-top: 0;">1. Load a Photo</h2>
                        <p><input type=file name=pictureFile zaccept="image/*,application/pdf,image/jpeg" style="background: white; max-width: 100%;"><!-- image/jpeg to accept *.jpeg files in IE10 --></p>
                    </div>

                    <p><canvas id=pictureStencil style="border: 1px solid black; margin: 0 0; width: 100%; background: white;"></canvas></p>

                </div>

                <div class="col-sm-6" style="display:none;" >

                    <h2 class="text-left" style="margin-top: 0;">
                        2. Turn It into a Design
                        <i class="fa fa-spinner fa-pulse pull-right text-info tracingBusy collapse"></i>
                    </h2>

                    <!--<p czlass="text-center">Experiment with the options below to get the best result.-->

                    <div class="btn-group btn-group-justified" id=modes data-toggle="buttons" style="margin: 1em 0;">
                        <label title="Makes edges black and everything else white" class="btn btn-default active">
                            <input type=radio name=mode value=edges id=edgesMode checked> Edges
                        </label>
                        <label title="Makes the light areas white and the dark areas black" class="btn btn-default">
                            <input type=radio name=mode value=blobs id=blobsMode> Threshold
                        </label>
                        <label title="Like threshold but works better on shaded areas" class="btn btn-default">
                            <input type=radio name=mode value=adaptive id=adaptiveMode> Adaptive
                        </label>
                    </div>

                    <div class="container-fluid" style="margin: 1em 0;">
                        <div class=row>
                            <div class="col-md-2 zcontrol-label" style="text-align: left;">Dark</div>
                            <div class="col-md-8">
                                <input type=range min=0 max=255 value=120 step=1 id=thresholdSlider class=vcenter style="display: block;">
                            </div>
                            <div class="col-md-2" style="text-align: right;">White</div>
                        </div>
                        <div class="text-center" style="font-size: small;">If the preview's all white, drag the slider closer to <em>Dark</em>.</div>
                    </div>

                    <div class="container-fluid" style="margin: 1em 0;">
                        <div class=row>
                            <div class="col-md-2 zcontrol-label" style="text-align: left;">Sharp</div>
                            <div class="col-md-8">
                                <input type=range min=0 max=4 value="1" step="0.1" id=blurSlider class=vcenter style="display: block;">
                            </div>
                            <div class="col-md-2" style="text-align: right;">Soft</div>
                        </div>
                    </div>

                    <p class="btn-group btn-group-justified forOutline" data-toggle="buttons">
                        <label class="btn btn-default">
                            <input type=checkbox id=outline name=outline value=1 title="Outlines black areas to make a line drawing"> Outline
                        </label>
                    </p>


                    <div class=insertMaillistButton></div>

                </div>

            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jsfeat/0.0.8/jsfeat-min.js" integrity="sha256-ScdMpYIK/UTHar0b9cWeLpD773/iyj/6MXk1qDzVSwg=" crossorigin="anonymous"></script>
            <script src="https://online.rapidresizer.com/js/photograph-to-pattern.js"></script>


        </div>


        <script type="text/javascript" src="https://s3.amazonaws.com/assets.freshdesk.com/widget/freshwidget.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/UAParser.js/0.7.13/ua-parser.min.js" integrity="sha256-5EfHRmJj4gidcvHOoD9XKBH/P/dgRMyBNDXFKtOJhoc=" crossorigin="anonymous"></script>



        <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
    </body>
</html>

<!--https://online.rapidresizer.com/photograph-to-pattern.php-->