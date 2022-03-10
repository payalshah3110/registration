<htm>
    <head>
        <title>Registration Form</title>
    </head>
    <style>
        .signup-form{
            width:300px;
            padding:20px;
            text-align:center;
            background:rgba(101,102,114,0.7);
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            overflow:hidden;


        }
        .btn{
            margin-top:60px;
            margin-bottom:20px;
            background:#487eb0;
            color:white;
            border-radius:40px;
            cursor:pointer;
            transition:0.8s;

        }
        .btn:hover{
            transform:scale(0.96);
        }
        .signup-form a{
            text-decoration: none;
            color:#000;
            font-family:'Ubuntu', sans-serif;
            padding:10px;
            transition:0.8s;
            display:block;


        }
        .signup-form a:hover{
            background:rgba(0,0,0,0.3);

        }
    </style>
    <body>
        
            <div class="signup-form">
            <form action ="process.php" method="post">

                <input type="text" placeholder="user name" class="txt " name="User name">
                <input type="email" placeholder=" Email " class="txt" name="Email">
                <input type="password" placeholder="password " class="txt" name="password">
                <input type="password" placeholder=" confirm password " class="txt" name="cpass">

                <input type="submit " value="Create an  Account" class="btn" name="'btn-save">
                
                <a href="#">Already Have an Account</a>
    </form>

                





            </div>



        
    </body>
</htm>