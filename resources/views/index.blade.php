<!DOCTYPE html>
<html>
<head>
    <title>How To Download PDF File Using AJAX In Laravel 10</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style type="text/css">
        h2{
            text-align: center;
            font-size:22px;
            margin-bottom:50px;
        }
        body{
            background:#fff;
        }
        .section{                       
            background:#fff;
        }
        .pdf-btn{
            margin-top:30px;
        }
    </style> 
<body>
    {{-- @include('generate_pdf') --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mt-3 text-center">How To Download PDF File Using AJAX In Laravel 10</h1>
            </div>
        </div>
    </div>
    <div class="text-center pdf-btn">
        <button type="button" class="btn btn-dark download-pdf">Download PDF</button>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(".download-pdf").click(function(){
        var data = '';
        $.ajax({
            type: 'GET',
            url: "{{route('generate.pdf')}}",
            data: data,
            xhrFields: {
                responseType: 'blob'
            },
            success: function(response){
                var blob = new Blob([response]);
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = "invoice.pdf";
                link.click();
            },
            error: function(blob){
                console.log(blob);
            }
        });
    });

</script>
</html>