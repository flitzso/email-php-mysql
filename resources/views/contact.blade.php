<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Email Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <form action="{{ route('contact.store') }}" method="post">
            @csrf
            <!-- Section: Contact v.2 -->
            <section class="mb-4">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>

                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12 mb-md-0 mb-5">
                        <!-- Form section -->
                        <!--Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your name" value="João">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Your email" value="joao@hotmail.com">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" value="Assunto de contato">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea">Minha mensagem de contato</textarea>
                                    <label for="message">Your message</label>
                                </div>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <div class="text-center text-md-left">
                            <button type="submit" class="btn btn-success btn-sm">Send</button>
                        </div>
                        <div class="status"></div>
                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Contact v.2 -->
        </form>

    </div>
</body>

</html>