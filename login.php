
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    
    <!-- sweet alert js & css -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="jquery-3.6.1.min.js"></script>
    <!-- Custom styles for this template-->

    <style>
        .xxx{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container d-flex h-100 justify-content-center align-items-center">

            <div class="xxx col-lg-5 col-md-6 ">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="logo.png" alt="" height="220px">
                                        <h1 class="h4 text-secondary mb-4">ระบบเบอร์มงคล</h1>
                                    </div>
                                    <form class="user" id="formLogin" method="POST">
                                        <input type="hidden" name="action" id="action" value="login">
                                        <div class="form-group mb-3">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" placeholder="อีเมลล์">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="รหัสผ่าน">
                                        </div>
                                    
                                        <input type="submit" name="login" value="เข้าสู่ระบบ" class="btn btn-primary btn-user btn-block mb-3" id="login">
                                        
                                    </form>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </div>


    <!-- Custom scripts for all pages-->
    <script src="sweet.js"></script>
    <script>
        $(function(){
            $('#formLogin').submit(function(e){
                e.preventDefault();
                let action = 'login'
                let email = $('#email').val();
                let password = $('#password').val();
                if(email != "" && password != ""){ 
                    $.ajax({
                        url:'check_login.php',
                        method:'post',
                        data:{email:email,password:password,action:action},
                        beforeSend:function(){
                            $('#login').val('login...');
                        },
                        success:function(data){
                            if(data == 'login'){
                                Swal('success','เข้าสู่ระบบสำเร็จ','');
                                window.location="admin/";
                            }else if(data == 'passworderror'){
                                Swal('error','รหัสผ่านไม่ถุกต้อง!','');
                                $('#password').val('');
                            }else if(data = 'emailerror'){
                                Swal('error','อีเมลล์ไม่ถุกต้อง!','');
                            }
                        }
                    });
                }else{
                    Swal('warning','ป้อนข้อมูลให้ครบถ้วน!','');
                }
            });
        });

        </script>
</body>
</html>