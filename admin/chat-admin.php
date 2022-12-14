
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Modern, flexible and responsive Bootstrap 5 admin &amp; dashboard template">
        <meta name="author" content="Bootlab">

        <title>Admin Chat</title>

        <style>
            body {
                opacity: 0;
            }
            .chat-messages {
                display: flex;
                flex-direction: column;
                height: 400px !important;
                overflow-y: scroll ;
            }
            .ml-5{
                margin-left: 10px !important
            }
        </style>
        <script src="js/settings.js"></script>
        <!-- END SETTINGS -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-120946860-7');
        </script>
    </head>

    <body>
        <div class="splash active">
            <div class="splash-icon"></div>
        </div>

        <div class="wrapper">
            <jsp:include page="/include/admin_side_nav.jsp"/>
            <div class="main">
                <jsp:include page="/include/admin_top_nav.jsp"/>
                <main class="content">
                    <div class="container-fluid">

                        <div class="header">
                            <h1 class="header-title">
                                Chat
                            </h1>

                        </div>
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-12 col-lg-5 col-xl-3 border-end">

                                    <div class="px-4 d-none d-md-block">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <input type="text" class="form-control my-3" placeholder="Search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="data-append-customers">

                                        <a href="#" onclick="" class="list-group-item list-group-item-action border-0">
                                            <div class="badge bg-success float-end">5</div>
                                            <div class="d-flex align-items-start">
                                                <img src="img/avatars/avatar-5.jpg" class="rounded-circle  me-1" alt="Michelle Bilodeau" width="40" height="40">
                                                <div class="flex-grow-1 ms-3">

                                                    <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="customer-name" value="<%=customer.getName()%>">   
                                        </a>

                                    </div>
                                    <input type="hidden" id="customer-active-id">
                                    <input type="hidden" id="customer-active-name">

                                    <hr class="d-block d-lg-none mt-1 mb-0" />
                                </div>
                                <div class="col-12 col-lg-7 col-xl-9">
                                    <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                        <div class="d-flex align-items-center py-1">
                                            <div class="position-relative">
                                                <img src="img/info.png" class="rounded-circle me-1 pro-pic" width="40" height="40">
                                            </div>
                                            <div class="flex-grow-1 ps-3">
                                                <strong id="displaying-client-name">Tap On Chat Head on left to Respond to a Customer!</strong>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="position-relative">


                                        <div class="chat-messages p-4" id="chat-messagesssss">

                                        </div>


                                    </div>
                                    <input type="hidden" id="customer_id_msg">
                                    <input type="hidden" id="agent_id" value="2">
                                    <input type="hidden" id="send_by" value="1">
                                    <div class="flex-grow-0 py-3 px-4 border-top">
                                        <div class="input-group">
                                            <input type="text"  id="message_chat" class="form-control" placeholder="Type your message">
                                            <button class="btn btn-primary" onclick="sendMsg()">Send</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-muted">
                            <div class="col-8 text-start">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Support</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Privacy</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Terms of Service</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4 text-end">
                                <p class="mb-0">
                                    &copy; 2021 - <a href="dashboard-default.html" class="text-muted">Spark</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>

        <svg width="0" height="0" style="position:absolute">
        <defs>
    <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
        <path
            d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
        </path>
    </symbol>
    </defs>
    </svg>
    <script src="js/app.js"></script>
    <script src="../../assets/libs/jquery/jquery.min.js" type="text/javascript"></script>




    <script>

                                                document.addEventListener("DOMContentLoaded", function () {
                                                    $('.chat-messages').scrollTop($('.chat-messages')[0].scrollHeight);
                                                });
    </script>
</body>
</html>